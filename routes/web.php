<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::get('/cart/checkout/thankyou',[HomeController::class,'thankyou'])->name('checkout.cart');


Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginUser'])->name('handle.user');
Route::get('/login/register',[AuthController::class,'register'])->name('register');
Route::post('/login/register',[AuthController::class,'registerUser'])->name('register.user');

Route::get('/logout',[AuthController::class,'logout'])->name('logout');




Route::middleware(['auth'])->group(function () {
    // Admin

    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    //product
    Route::get('/show.product', [DashboardController::class, 'showProduct'])->name('show.product');
    Route::get('/add.product', [DashboardController::class, 'addProduct'])->name('add.product');
    Route::get('/edit.product', [DashboardController::class, 'editProduct'])->name('edit.product');


});

