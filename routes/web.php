<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::view('login','login');
Route::post('login','App\Http\Controllers\logincontroller@login');
Route::get('companies','App\Http\Controllers\CompanyController@index')-> name('index');
Route::post('companies','App\Http\Controllers\CompanyController@store');
Route::get('companies/delete/{company}','App\Http\Controllers\CompanyController@delete')-> name('delete');
Route::get('companies/update/{company}','App\Http\Controllers\CompanyController@view_update')-> name('view_update');
Route::post('companies/update/{company}','App\Http\Controllers\CompanyController@update')-> name('update');
Route::get('companies/new','App\Http\Controllers\CompanyController@edit')-> name('add');
Route::get('companies/{company}','App\Http\Controllers\CompanyController@show')-> name('company');
Route::get('/file-resize', [ResizeController::class, 'index']);
Route::post('/resize-file', [ResizeController::class, 'resizeImage'])->name('resizeImage');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
