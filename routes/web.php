<?php

use App\Http\Controllers\Users\BestSellerController;
use App\Http\Controllers\Users\CartController;
use App\Http\Controllers\Users\FlashSalesController;
use App\Http\Controllers\Users\HomeController;

use App\Http\Controllers\Users\RateProductsController;
use App\Http\Controllers\Users\TrendingProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\Admin\AttributesController;
use App\Http\Controllers\Admin\BrandsController;

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

// Route::get('/', function () {
//     return view('Website.index');
// });
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
Route::group(['prefix'=>'admin'],function() {
    Route::resource('/categories',CategoriesController::class);
    Route::resource('/attributes',AttributesController::class);
    Route::resource('/brands',BrandsController::class);
});

Route::resource('cart', CartController::class);
Route::GET('carts', [HomeController::class, 'addToCart'])->name('cart.addToCart');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
