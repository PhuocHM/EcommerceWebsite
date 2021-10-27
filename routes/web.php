<?php

use App\Http\Controllers\Users\BestSellerController;
use App\Http\Controllers\Users\CartController;
use App\Http\Controllers\Users\CategoriesProductController;
use App\Http\Controllers\Users\FlashSalesController;
use App\Http\Controllers\Users\HomeController;

use App\Http\Controllers\Users\RateProductsController;
use App\Http\Controllers\Users\TrendingProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\AttributesController;
use App\Http\Controllers\Admin\BrandsController;
use App\Http\Controllers\Admin\EmployeesController;
use App\Http\Controllers\Admin\GroupsController;
use App\Http\Controllers\Admin\ProductAttributesController;
use App\Http\Controllers\Admin\ProductImagesController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\UsersController;

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

Route::resource('flash-sales', FlashSalesController::class);
Route::resource('rate-products', RateProductsController::class);
Route::resource('maybe-you-like', MaybeYouLikeController::class);
Route::resource('category', CategoriesProductController::class);

Route::resource('cart', CartController::class);
Route::GET('carts', [HomeController::class, 'addToCart'])->name('cart.addToCart');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/home', AdminController::class);
    Route::resource('/categories', CategoriesController::class);
    Route::resource('/attributes', AttributesController::class);
    Route::resource('/brands', BrandsController::class);
    Route::resource('/productAttributes', ProductAttributesController::class);
    Route::resource('/products', ProductsController::class);
    Route::resource('/productImages', ProductImagesController::class);
    Route::resource('/users', UsersController::class);
    Route::resource('/employees', EmployeesController::class);
    Route::resource('/groups', GroupsController::class);
});
