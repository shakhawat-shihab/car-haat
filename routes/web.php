<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
    // return View::first(['welcome', "about"]);
});


Route::get("/signup", [SignupController::class, 'create'])->name('signup');
Route::get("/login", [LoginController::class, 'create'])->name('login');



