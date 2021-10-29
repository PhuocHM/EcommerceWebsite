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
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\Admin\AttributesController;
use App\Http\Controllers\Admin\BrandsController;
use App\Http\Controllers\Auth\SettingController;
use App\Http\Controllers\Users\CategoriesProductController;
use App\Http\Controllers\Users\OrderController;
use App\Http\Controllers\Users\ProductDetailController;
use App\Http\Controllers\Users\CouponController;


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
Route::get('/setting-user', [SettingController::class, 'setting'])->name('setting.user');
Route::put('/setting-user/{id}', [SettingController::class, 'update'])->name('update.user');
Route::get('/change-pass', [SettingController::class, 'settingPassword'])->name('setting.pass');
Route::put('/change-pass', [SettingController::class, 'resetPassword'])->name('reset.pass');


Route::resource('/', HomeController::class);
Route::resource('bestseller', BestSellerController::class);
Route::resource('trending', TrendingProductController::class);
Route::resource('flash-sales', FlashSalesController::class);
Route::resource('rate-products', RateProductsController::class);
Route::resource('maybe-you-like', MaybeYouLikeController::class);
Route::resource('category', CategoriesProductController::class);
Route::resource('product-detail', ProductDetailController::class);
Route::resource('order', OrderController::class);
Route::resource('coupon', CouponController::class);

Route::resource('cart', CartController::class);
Route::GET('order-detail', [OrderController::class, 'orderDetail'])->name('order.orderDetail');
Route::GET('api/carts', [HomeController::class, 'addToCart'])->name('cart.addToCart');
Route::GET('api/seach', [HomeController::class, 'seach'])->name('home.seach');
Route::GET('api/check-cart', [HomeController::class, 'checkCart'])->name('cart.checkCart');
Route::GET('api/deleteCartItem', [HomeController::class, 'deleteCartItem'])->name('cart.deleteCartItem');
Route::GET('api/syncCart', [HomeController::class, 'syncCart'])->name('cart.syncCart');
Route::GET('api/showCart', [HomeController::class, 'showCart'])->name('cart.showCart');
Route::GET('api/checkCoupon', [HomeController::class, 'checkCoupon'])->name('coupon.checkCoupon');
Route::GET('api/getFlashSale', [HomeController::class, 'getFlashSale'])->name('discounts.getFlashSale');
Route::GET('api/addComment', [HomeController::class, 'addComment'])->name('home.addComment');

Route::resource('cart', CartController::class);
Route::GET('carts', [HomeController::class, 'addToCart'])->name('cart.addToCart');

Route::group(['prefix' => 'admin'], function () {
    Route::resource('/categories', CategoriesController::class);
    Route::resource('/attributes', AttributesController::class);
    Route::resource('/brands', BrandsController::class);
});
