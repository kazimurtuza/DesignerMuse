<?php

use App\Http\Controllers\Admin\AuthenticationController;
use App\Http\Controllers\Designer\designerController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\GeneralUser\GeneralUserController;
use App\Http\Controllers\Shopkeeper\AdminPanelController;
use App\Http\Controllers\Shopkeeper\AuthController;
use App\Http\Controllers\Shopkeeper\OrderController;
use App\Http\Controllers\Shopkeeper\ProductController;
use App\Http\Controllers\ShopKeeper\ProfileController;
use App\Http\Controllers\Shopkeeper\ShopController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| ShopKeeper Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'shopAuthCheck'], function () {
    Route::get('shopkeeper/dashboard', [AdminPanelController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::get('shopkeeper/product', [ProductController::class, 'addProduct'])->name('shopkeeper.product.add');
    Route::post('shopkeeper/add/shop/product', [ProductController::class, 'productStore'])->name('add.shop.product');
    Route::get('shopkeeper/product/list', [ProductController::class, 'productList'])->name('shopkeeper.product.list');
    Route::get('shopkeeper/profile/setting', [\App\Http\Controllers\Shopkeeper\ShopkeeperProfileController::class, 'profileSetting'])->name('shopkeeper.profile.setting');
    Route::post('user/profile/store', [\App\Http\Controllers\Shopkeeper\ShopkeeperProfileController::class, 'profileStore'])->name('user.profile.store');
    Route::get('user/shopkeeper/logout', [AuthController::class, 'shopkeeperLogout'])->name('shopkeeper.admin.logout');

    Route::get('shopkeeper/pending/customer', [OrderController::class, 'shopkeeperPendingOrder'])->name('shopkeeper.pending.customer');
    Route::get('shopkeeper/completed/customer', [OrderController::class, 'shopkeeperCompletedOrder'])->name('shopkeeper.completed.customer');
    Route::get('shopkeeper/processing/customer', [OrderController::class, 'shopkeeperProcessingOrder'])->name('shopkeeper.processing.customer');
    Route::get('customer/status/update', [OrderController::class, 'orderStatusUpdate'])->name('customer.status.update');

    Route::get('shopkeeper/order/details', [OrderController::class, 'getOrderDetails'])->name('shop.order.details');
    Route::get('shopkeeper/product/edit', [ProductController::class, 'productEdit'])->name('shop.product.edit');
    Route::post('shopkeeper/product/update', [ProductController::class, 'productUpdate'])->name('shop.product.update');
    Route::get('shopkeeper/product/img/delete', [ProductController::class, 'productImgDelete'])->name('delete.product.image');
    Route::get('shopkeeper/bank/list', [\App\Http\Controllers\ShopKeeper\BankBalanceController::class, 'bankAccount'])->name('shopkeeper.bank.list');
    Route::post('shopkeeper/bank/store', [\App\Http\Controllers\ShopKeeper\BankBalanceController::class, 'bankAccountStore'])->name('shopkeeper.bank.store');
    Route::get('shopkeeper/balance', [\App\Http\Controllers\ShopKeeper\BankBalanceController::class, 'bankBalance'])->name('shopkeeper.balance');
    Route::post('shopkeeper/balance/withdrawal', [\App\Http\Controllers\ShopKeeper\BankBalanceController::class, 'withdrawalRequest'])->name('shopkeeper.balance.withdrawal');
    Route::get('shopkeeper/report/report', [\App\Http\Controllers\Shopkeeper\ReportController::class, 'financialReport'])->name('shopkeeper.financial.report');
    Route::get('shopkeeper/withdrawal/list', [\App\Http\Controllers\Shopkeeper\ReportController::class, 'withdrawalList'])->name('shopkeeper.withdrawal.list');

//    Bank Balance


});

Route::get('shop/list', [ShopController::class, 'shopList'])->name('shop.list');
Route::get('shopkeeper/profile/view/{shop_id}', [ShopController::class, 'profileView'])->name('shop.profile.view');
Route::get('shopkeeper/all/product/list', [ShopController::class, 'allProductList'])->name('shop.product.list');
Route::get('shopkeeper/product/details', [ShopController::class, 'productDetails'])->name('shop.product.details');




