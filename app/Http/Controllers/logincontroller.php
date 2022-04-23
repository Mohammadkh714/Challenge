<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class logincontroller extends Controller
{
    public function login(Request $request)
    {
     //   return User::where('email',$request->input('email'));
    }
}
