<?php

use App\Http\Controllers\Frontend\CategoryController as FrontendCategoryController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\SliderController;
use App\Http\Controllers\Frontend\ProductController;
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
// Route::get('/cart', function () {
//     return view('Frontend.Website.Cart');
// });
Route::get('/checkout', function () {
    return view('Frontend.Website.Checkout');
});
Route::get('/404', function () {
    return view('Frontend.Website.404');
});
Route::get('/admin', function () {
    return view('Backend.Admin.Index');
});
Route::get('/success', function () {
    return view('Frontend.Website.Success');
});

//Back-end
Route::resource('categories',CategoryController::class);
Route::resource('products',ProductController::class);
Route::resource('users',UserController::class);
Route::resource('orders',OrderController::class);
Route::resource('orderitem',OrderitemController::class);
Route::resource('slider',SliderController::class);

//Front-end
Route::get('/',[HomeController::class,'index']);
Route::get('category/{id}',[FrontendCategoryController::class,'category'])->name('category');
Route::get('/product-detail/{id}',[ProductController::class,'product_detail'])->name('product_detail');
Route::get('sliders',[SliderController::class,'slider'])->name('sliders');
Route::post('addtocart/{id}',[CartController::class,'addtocart'])->name('addtocart');
Route::get('cart',[CartController::class,'cart'])->name('cart');
Route::post('edit-cart',[CartController::class,'edit_cart'])->name('edit-cart');
Route::get('delete-cart/{id}',[CartController::class,'destroy'])->name('delete-cart');
Route::get('check-out',[OrderController::class,'checkout'])->name('check-out');

