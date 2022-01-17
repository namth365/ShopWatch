<?php

use App\Http\Controllers\Frontend\CategoryController as FrontendCategoryController; 
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\OrderController;
use App\Http\Controllers\Frontend\SliderController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\Admin\SlidersController;
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

Route::get('/check-out', function () {
    return view('Frontend.Website.Checkout');
});
Route::get('/404', function () {
    return view('Frontend.Website.404');
});
// Route::get('/admin', function () {
//     return view('Backend.Home');
// });


//Back-end
Route::group(['prefix' => 'admin'], function () {
    Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::resource('categories', CategoriesController::class);
    Route::resource('products', ProductsController::class);
    Route::resource('users', UsersController::class);
    Route::resource('orders', OrdersController::class);
    Route::resource('orderitem', OrderitemsController::class);
    Route::resource('sliders', SlidersController::class);
});
//Front-end
Route::get('/', [HomeController::class, 'index']);
Route::get('category/{id}', [FrontendCategoryController::class, 'category'])->name('category');
Route::get('/product-detail/{id}', [ProductController::class, 'product_detail'])->name('product_detail');
Route::get('sliders', [SliderController::class, 'slider'])->name('sliders');
Route::post('addtocart/{id}', [CartController::class, 'addtocart'])->name('addtocart');
Route::get('cart', [CartController::class, 'cart'])->name('cart');
Route::post('edit-cart', [CartController::class, 'edit_cart'])->name('edit-cart');
Route::get('delete-cart/{id}', [CartController::class, 'destroy'])->name('delete-cart');
Route::get('check-out', [OrderController::class, 'check_out'])->name('check-out');
Route::get('success/{id}', [OrderController::class, 'success'])->name('success');
Route::post('postRegister', [OrderController::class, 'postRegister'])->name('postRegister');
Route::get('search', [HomeController::class, 'search'])->name('search');
Route::get('search-price/{id}', [ProductController::class, 'filter_search'])->name('search-price');
