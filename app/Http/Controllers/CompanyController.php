<?php

namespace App\Http\Controllers;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\company;

class CompanyController extends Controller
{
    public function index()
    {
        //$companies=company::all();
        $companies=company::paginate(10);
        return view(view: 'companies.companies')->with([
            'companies'=> $companies
        ]);
    }
    public function show(company $company)
    {
        return view(view: 'companies.company')->with([
            'company'=> $company
        ]);
    }
    public function edit()
    {
        return view(view: 'companies.edit-company');
    }
    public function store(Request $request)
    {
        $validator=$this->validate($request, [
            'logo' => 'required|image|mimes:png|max:2048|dimensions:min_width=100,min_height=100',
        ]);
        if(!$validator){
            return redirect(route(name: 'index'));
         }
        $image= $request->file('logo');
        $fileName=$image->getClientOriginalExtension();
        $img = Image::make($image->getRealPath());
            $img->resize(120, 120, function ($constraint) {
                $constraint->aspectRatio();                 
            });
            $img->stream(); // <-- Key point
            //dd();
            Storage::disk('local')->put('public'.'/'.$request->name.".".$fileName, $img, 'public');
        company::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'logo'=>$request->name .".". $fileName,
            'website'=>$request->site
        ]);
        return redirect(route(name: 'index'));
    }
    public function view_update(company $company)
    {
        return view(view: 'companies.updateCompany')->with([
            'company'=> $company
        ]);
    }
    public function update($id, Request $request)
    {
        company::whereId($id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'website'=>$request->site
        ]);
        return redirect(route(name: 'index'));
    }
    public function delete($id)
    {
        Company::destroy($id);
        return redirect(route(name: 'index'));
        $model->refresh();
    }
}
