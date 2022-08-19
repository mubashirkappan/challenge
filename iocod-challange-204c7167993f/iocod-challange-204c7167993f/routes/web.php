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


Route::post('challenge', function () {
    return view('challenge2');
});


Route::post('challenge_email', function () {
   Storage::disk('local')->append('example.txt', implode(',',$_POST));

return redirect('/thank_you');
});


Route::get('thank_you',function(){

    return view('thank_you');
});