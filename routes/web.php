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
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\AttributesController;
use App\Http\Controllers\Admin\BrandsController;
use App\Http\Controllers\Admin\CommentsController;
use App\Http\Controllers\Admin\CouponsController;
use App\Http\Controllers\Admin\EmployeesController;
use App\Http\Controllers\Admin\GroupPermisionsController;
use App\Http\Controllers\Admin\GroupsController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\Admin\ProductAttributesController;
use App\Http\Controllers\Admin\ProductImagesController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\SuppliersController;
use App\Http\Controllers\Admin\StocksController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\CustomersController;
use App\Http\Controllers\Admin\DiscountController;
use App\Http\Controllers\Admin\DiscountProductController;
use App\Http\Controllers\Admin\ExcelController;


use App\Http\Controllers\Admin\LoginAdminController;
use App\Http\Controllers\Admin\OrderItemsController;

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

Route::group(['prefix' => 'admin', 'middleware' => 'auth:admins'], function () {
    Route::get('/home', AdminController::class)->name('home');
    Route::resource('/categories', CategoriesController::class);
    Route::resource('/attributes', AttributesController::class);
    Route::resource('/brands', BrandsController::class);
    Route::resource('/productAttributes', ProductAttributesController::class);
    Route::resource('/products', ProductsController::class);
    Route::resource('/productImages', ProductImagesController::class);
    Route::resource('/users', UsersController::class);
    Route::resource('/suppliers', SuppliersController::class);
    Route::resource('/stocks', StocksController::class);
    Route::resource('/employees', EmployeesController::class);
    Route::resource('/groups', GroupsController::class);
    Route::resource('/coupons', CouponsController::class);
    Route::resource('/comments', CommentsController::class);
    Route::resource('/roles', RolesController::class);
    Route::resource('/groupPermisions', GroupPermisionsController::class);
    Route::resource('/orders', OrdersController::class);
    Route::resource('/customers', CustomersController::class);
    Route::resource('/discounts', DiscountController::class);
    Route::resource('/discountProduct', DiscountProductController::class);
    Route::get('/reset-password', [LoginAdminController::class, 'resetPass'])->name('reset.pass.admin');
    Route::put('/reset-password', [LoginAdminController::class, 'resetPassAction']);
    Route::resource('/excel', ExcelController::class);
    Route::POST('/export-latest-order', [ExcelController::class, 'export_latest_orders'])->name('excel.export_latest_orders');
    Route::resource('/orderItems', OrderItemsController::class);
    Route::get('/createOrderItems/{id}', [OrderItemsController::class,'createItem'])->name('create.item');
    Route::resource('/customers', CustomersController::class);

});

Route::get('admin/login', [LoginAdminController::class, 'formLogin'])->name('login.admin');
Route::post('admin/login', [LoginAdminController::class, 'loginAction'])->name('login.admin.action');
Route::get('admin/logout', [LoginAdminController::class, 'logoutAction'])->name('logout.admin.action');

Route::post('/status', [OrdersController::class, 'status']);


