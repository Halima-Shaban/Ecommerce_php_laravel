<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\checkFromName;

Route::get('/', [HomeController::class,'index']);

Route::get('/about', [AboutController::class,'index']);

Route::get('/contact', [ContactController::class,'index']);

Route::get('/products', [ProductController::class,'index'])->name('products');

Route::get('/product/{id}', [ProductController::class,'show']);

Route::post('/send-message', [HomeController::class,'sendMessage']);

Route::prefix('auth')->group(function(){

    Route::get('login',[AuthController::class,'login'])->name('auth.login');
    Route::post('login',[AuthController::class,'loginSubmit'])->name('auth.loginSubmit');
    Route::post('logout',[AuthController::class,'logout'])->name('auth.logout');
    Route::get('register',[AuthController::class,'register'])->name('auth.register');
    Route::post('register',[AuthController::class,'createNewUser'])->name('auth.createNewUser');

});


Route::prefix('admin')->middleware('auth')->group(function(){
    Route::resource('admin-products',AdminProductController::class);

});
//csrf attack search 
