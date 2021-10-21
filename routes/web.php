<?php

use App\Http\Controllers\Users\HomeController;
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

Route::resource('/', HomeController::class);


Route::get('login', function () {
    return view('Website.login');
});
Route::get('category', function () {
    return view('Website.list-product');
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
