<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\ProductController;
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

Route::get('/', function () {
    return view('Website.index');
});
Route::get('login', function () {
    return view('Website.login');
});
Route::get('category', function () {
    return view('Website.grid-product');
});
Route::get('detail', function () {
    return view('Website.detail');
});
Route::get('cart', function () {
    return view('Website.shopping-cart');
});
Route::get('wishlist', function () {
    return view('Website.wishlist');
});
Route::get('admin/home', function () {
    return view('admin.dashboard.home');
});

Route::resource('/product', ProductController::class);
