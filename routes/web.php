<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\signupcontroller;
use App\Http\Controllers\LoginController;

Route::get('/',[Homecontroller::class, 'Homepage']);

Route::get('/caretips',[Homecontroller::class, 'petcare']);
Route::post('/postcaretips',[signupcontroller::class, 'storeq']);

Route::get ('/contact',[Homecontroller::class,'contact']);

Route::get('/login',[Homecontroller::class, 'login']);
Route::post('/postlogin', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/userhome', function () {
    if (session()->has('user')) {
        return view('userhome');
    } else {
        return redirect('/login');
    }
});

Route::get('/signup',[Homecontroller::class, 'signup']);
Route::post('/postsignup',[signupcontroller::class, 'store']);




