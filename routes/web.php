<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MathController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\ShowCarController;
use App\Http\Controllers\SignupController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Rules\Numeric;

Route::get('/', function () {
    return view('index');
    // return View::first(['welcome', "about"]);
});

// Route::get('/about', function () {
//     return view('about', [
//         "name" => 'John Doe',
//         "age" => 30,
//     ]);
// });

// Route::get('/hello', [HelloController::class , 'welcome']);


// Route::get('/product/{id?}', function (string $id = "") {
//     dd($id);
// })->whereNumber('id');

// Route::get('/product/category/{cat?}', function (string $cat = "default") {
//     dd("cat " . $cat);
// })->where('cat', '[a-zA-Z]+');


// Route::get('/home', function (string $cat = "default") {
//     //    return redirect()->route('product', ['id' => 1]);
//     return to_route('product', ['id' => 1]);
// });

// Route::get('/product/{id?}', function (string $id = "") {
//     dd($id);
// })->name("product");

// Route::prefix('admin')->group(function () {
//     Route::get('/dashboard', function () {
//         dd('Admin Dashboard');
//     });
//     Route::get('/settings', function () {
//         dd('Admin Settings');
//     });
// });


// Route::fallback(function () {
//     dd('404 Not Found');
// });


// Route::get('/car', [CarController::class, 'index']);
// Route::get('/show-car', ShowCarController::class);

// Route::get('/sum/{a}/{b}', [MathController::class, 'sum']);
// Route::get('/subtract/{a}/{b}', [ShowCarController::class, 'subtract']);



Route::get("/signup", [SignupController::class, 'create'])->name('signup');
Route::get("/login", [LoginController::class, 'create'])->name('login');



