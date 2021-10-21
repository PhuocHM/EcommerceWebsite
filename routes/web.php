<?php

use App\Http\Controllers\Users\BestSellerController;
use App\Http\Controllers\Users\FlashSalesController;
use App\Http\Controllers\Users\HomeController;
use App\Http\Controllers\Users\NewCategoriesController;
use App\Http\Controllers\Users\RateProductsController;
use App\Http\Controllers\Users\TrendingProductController;
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
Route::resource('bestseller', BestSellerController::class);
Route::resource('trending', TrendingProductController::class);




Route::resource('new-categories', NewCategoriesController::class);


Route::resource('flash-sales', FlashSalesController::class);


Route::resource('rate-products', RateProductsController::class);


Route::resource('maybe-you-like', MaybeYouLikeController::class);


