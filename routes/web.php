<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

//homeController
Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/shop',[HomeController::class,'shop'])->name('shop');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/services',[HomeController::class,'services'])->name('services');
Route::get('/blogs',[HomeController::class,'blog'])->name('blog');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/cart',[HomeController::class,'cart'])->name('cart');
Route::get('/cart/checkout',[HomeController::class,'checkout'])->name('checkout');
Route::get('/cart/checkout/thankyou',[HomeController::class,'thankyou'])->name('thankyou');


//Dashboard
Route::get('/admin',[AdminController::class,'dashboard'])->name('dashboard');

