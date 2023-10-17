<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthenticationController;
use App\Http\Controllers\Admin\GeneralUserController;
use App\Http\Controllers\Admin\ShopController;
use App\Http\Controllers\Designer\DesignerController;
use App\Http\Controllers\Frontend\UserController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => 'adminAuthCheck'], function() {
    Route::get('admin/dashboard',[AdminController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::get('admin/shop/color/list',[ShopController::class, 'colorSetting'])->name('admin.color.list');
    Route::get('admin/shopkeeper/logout',[AuthenticationController::class, 'logout'])->name('super.admin.logout');
    Route::post('admin/shop/color/store',[ShopController::class, 'colorStore'])->name('admin.shop.store.color');
    Route::post('admin/shop/color/update',[ShopController::class, 'colorUpdate'])->name('admin.shop.update.color');
    Route::get('admin/shop/product/category/list',[ShopController::class, 'productCategoryList'])->name('admin.shop.product.category');
    Route::post('admin/shop/category/store',[ShopController::class, 'productCategoryStore'])->name('admin.shop.category.store');
    Route::post('admin/shop/update/category',[ShopController::class, 'productCategoryUpdate'])->name('admin.shop.update.category');
    Route::get('admin/shop/order/list',[\App\Http\Controllers\Admin\ShopOrderController::class, 'shopOrderList'])->name('admin.shop.order.list');
    Route::get('admin/shop/order/details/get',[\App\Http\Controllers\Admin\ShopOrderController::class, 'shopOrderDetailsGet'])->name('admin.shop.order.details.get');
    Route::get('admin/shop/pending/list',[ShopController::class, 'deletedShopList'])->name('admin.shop.pending.shop.list');
    Route::get('shopkeeper/active/list', [ShopController::class, 'ShopActiveList'])->name('shop.active.list');
    Route::get('shopkeeper/approve/shop/request', [ShopController::class, 'approveShopRequest'])->name('approve.shop');
    Route::get('shopkeeper/shop/inactive', [ShopController::class, 'shopInactive'])->name('shop.inactive');
    /*All general User*/
    Route::get('admin/all/general/user/list', [GeneralUserController::class, 'userList'])->name('admin.all.general.user.list');

    //designer Info
    Route::get('admin/designer/list', [\App\Http\Controllers\Admin\AdminDesignerController::class, 'designerList'])->name('admin.designer.list');
    Route::get('admin/designer/delete', [\App\Http\Controllers\Admin\AdminDesignerController::class, 'designerDelete'])->name('admin.designer.delete');
    Route::get('admin/booked/meeting/list', [\App\Http\Controllers\Admin\AdminDesignerController::class, 'designerMeetingList'])->name('admin.designer.meeting.list');
    Route::get('admin/booked/project/list', [\App\Http\Controllers\Admin\AdminDesignerController::class, 'designerProjectList'])->name('admin.designer.project.list');

    Route::get('admin/booked/old/meeting/list', [\App\Http\Controllers\Admin\AdminDesignerController::class, 'designerOldMeetingList'])->name('admin.designer.old.meeting.list');
    Route::get('admin/booked/old/project/list', [\App\Http\Controllers\Admin\AdminDesignerController::class, 'designerOldProjectList'])->name('admin.designer.old.project.list');

    Route::post('admin/designer/service/rate/update', [\App\Http\Controllers\Admin\AdminDesignerController::class, 'designerServiceUpdate'])->name('designer.service.rate.update');

    //payment
    Route::get('admin/pending/withdrawal/list', [\App\Http\Controllers\Admin\PaymentController::class, 'pendingWithdrawalList'])->name('admin.pending.withdrawal.list');
    Route::get('admin/completed/withdrawal/list', [\App\Http\Controllers\Admin\PaymentController::class, 'completedWithdrawalList'])->name('admin.completed.withdrawal.list');
    Route::get('admin/withdrawal/completed', [\App\Http\Controllers\Admin\PaymentController::class, 'withdrawalCompleted'])->name('admin.withdrawal.completed');

    //registration
    Route::get('admin/designer/registration', [\App\Http\Controllers\Admin\UserRegistrationController::class, 'designerRegistration'])->name('admin.user.registration');
    Route::get('admin/shop/registration', [\App\Http\Controllers\Admin\UserRegistrationController::class, 'shopRegistration'])->name('admin.shop.registration');

    //  setting
    Route::get('admin/charge/rate', [\App\Http\Controllers\Admin\SettingController::class, 'chargeRateSetting'])->name('admin.charge.rate');
    Route::post('admin/charge/rate/store', [\App\Http\Controllers\Admin\SettingController::class, 'chargeRateStore'])->name('setting.charge.store');
    Route::get('admin/home/setting', [\App\Http\Controllers\Admin\SettingController::class, 'homeSetting'])->name('admin.home.setting');
    Route::post('admin/home/setting/store', [\App\Http\Controllers\Admin\SettingController::class, 'homeSettingStore'])->name('admin.home.setting.store');


    Route::post('admin/home/feature-setting/store', [\App\Http\Controllers\Admin\SettingController::class, 'featureSetting'])->name('admin.home.feature-setting.store');
    Route::post('admin/home/about-phone-web/store', [\App\Http\Controllers\Admin\SettingController::class, 'aboutPhoneWeb'])->name('admin.home.about-phone-web.store');
    Route::post('admin/home/looking-for/store', [\App\Http\Controllers\Admin\SettingController::class, 'lookingFor'])->name('admin.looking-for.store');


    Route::post('admin/home/top-bar/setting/store', [\App\Http\Controllers\Admin\SettingController::class, 'homeSettingTopBarStore'])->name('admin.home.top-bar.setting.store');
    Route::get('page/top/item/delete', [\App\Http\Controllers\Admin\SettingController::class, 'topItemDelete'])->name('page.top.item.delete');

    Route::get('admin/how/we/work/set', [\App\Http\Controllers\Admin\SettingController::class, 'howWork'])->name('admin.we.work');
    Route::post('admin/how/it/work/store', [\App\Http\Controllers\Admin\SettingController::class, 'howWorkStore'])->name('how.it.work.store');
    Route::get('privacy/condition', [\App\Http\Controllers\Admin\SettingController::class, 'privacyCondition'])->name('privacy.condition');
    Route::post('privacy/condition/store', [\App\Http\Controllers\Admin\SettingController::class, 'privacyConditionStore'])->name('privacy.condition.store');

    Route::post('admin/create/project/list', [\App\Http\Controllers\Admin\AboutOusController::class, 'createProject'])->name('admin.project.store');
    Route::post('admin/our/member', [\App\Http\Controllers\Admin\AboutOusController::class, 'createMember'])->name('admin.member.store');
    Route::get('our/member/deleter', [\App\Http\Controllers\Admin\AboutOusController::class, 'deleteMember'])->name('our.member.delete');
    Route::get('admin/project/delete', [\App\Http\Controllers\Admin\AboutOusController::class, 'adminProjectDelete'])->name('admin.project.delete');


    Route::post('admin/about/ous/store', [\App\Http\Controllers\Admin\AboutOusController::class, 'aboutOusStore'])->name('admin.about.ous.store');
    Route::get('admin/about/ous/set', [\App\Http\Controllers\Admin\AboutOusController::class, 'aboutOus'])->name('admin.about.ous');

    Route::post('shopkeeper/service/charge/update', [ShopController::class, 'serviceChargeUpdate'])->name('shopkeeper.service.charge.update');

    Route::get('admin/faq', [\App\Http\Controllers\FaqController::class,'faqList'])->name('admin.faq.list');
    Route::get('admin/faq/delete', [\App\Http\Controllers\FaqController::class,'faqDelete'])->name('admin.faq.delete');
    Route::post('admin/faq/add', [\App\Http\Controllers\FaqController::class,'addFaq'])->name('admin.add.faq');

    Route::get('support/messages/list', [\App\Http\Controllers\SupportController::class,'supportList'])->name('support.messages.list');
    Route::get('support/details', [\App\Http\Controllers\SupportController::class,'supportDetails'])->name('support.details');
    Route::get('support/mail/replay', [\App\Http\Controllers\SupportController::class,'supportReply'])->name('replay.support.mail');
    Route::get('admin/financial/report', [\App\Http\Controllers\Admin\AdminFinancialReportController::class,'financialReport'])->name('admin.financial.report');

});


//super Admin
Route::get('/admin', [AuthenticationController::class, 'loginView'])->name('admin.login');
Route::post('/super/admin', [AuthenticationController::class, 'login'])->name('super.admin.login');




