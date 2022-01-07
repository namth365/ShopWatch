<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
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

Route::get('/product-detail', function () {
    return view('Frontend.Website.ProductDetail');
});
Route::get('/', function () {
    return view('Frontend.Website.Home');
});
Route::get('/cart', function () {
    return view('Frontend.Website.Cart');
});
Route::get('/checkout', function () {
    return view('Frontend.Website.Checkout');
});
Route::get('/404', function () {
    return view('Frontend.Website.404');
});
Route::get('/admin', function () {
    return view('Backend.Admin.Index');
});

//Back-End
Route::resource('categories',CategoryController::class);
Route::resource('products',ProductController::class);
Route::resource('users',UserController::class);
Route::resource('orders',OrderController::class);
Route::resource('orderitem',OrderitemController::class);
Route::resource('slider',SliderController::class);

//Front-End
// Route::get('home',[FrontendController::class,'index'])->name('home');
// Route::get('home',[FrontendController::class,'index'])->name('home');