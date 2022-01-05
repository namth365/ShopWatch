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

Route::get('/home', function () {
    return view('Home');
});
Route::get('/product-detail', function () {
    return view('Frontend.Website.Products.ProductDetail');
});
Route::get('/shop', function () {
    return view('Frontend.Website.Shop');
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

