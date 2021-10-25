<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Users\BestSellerController;
use App\Http\Controllers\Users\CartController;
use App\Http\Controllers\Users\FlashSalesController;
use App\Http\Controllers\Users\HomeController;

use App\Http\Controllers\Users\RateProductsController;
use App\Http\Controllers\Users\TrendingProductController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::get('/logout-user', [LoginController::class, 'logout'])->name('logout.user');
Route::resource('/', HomeController::class);
Route::resource('bestseller', BestSellerController::class);
Route::resource('trending', TrendingProductController::class);

Route::resource('flash-sales', FlashSalesController::class);
Route::resource('rate-products', RateProductsController::class);
Route::resource('maybe-you-like', MaybeYouLikeController::class);

Route::resource('cart', CartController::class);
Route::GET('carts', [HomeController::class, 'addToCart'])->name('cart.addToCart');

Route::group(['prefix' => 'admin'], function () {
    Route::resource('/categories', CategoriesController::class);
    Route::resource('/attributes', AttributesController::class);
    Route::resource('/brands', BrandsController::class);
});
