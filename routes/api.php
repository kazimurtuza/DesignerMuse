<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware(['auth:sanctum', 'type.generalUser'])->group(function () {
    Route::get('frontend/user/old/project/list', [\App\Http\Controllers\Api\UserProjectController::class, 'oldProjectList']);
    Route::get('frontend/user/new/project/list', [\App\Http\Controllers\Api\UserProjectController::class, 'newProjectList']);
    Route::get('frontend/user/project/details', [\App\Http\Controllers\Api\UserProjectController::class, 'projectDetails']);
    Route::post('frontend/user/project/milestone/create', [\App\Http\Controllers\Api\UserProjectController::class, 'milestoneCreate']);
    Route::post('accept/agreement', [\App\Http\Controllers\Api\UserProjectController::class, 'acceptAgreement']);


    Route::get('designer/general/project/details', [\App\Http\Controllers\Api\Designer\ApiDesignerProjectController::class, 'userProjectDetails']);
    //    Shop Product purchase
    Route::post('shop/product/purchase', [\App\Http\Controllers\Api\GeneralUser\Order\ShopOrderController::class, 'order']);
    Route::get('user/shop/order/list', [\App\Http\Controllers\Api\GeneralUser\Order\ShopOrderController::class, 'orderList']);
    Route::get('get/user/order/details', [\App\Http\Controllers\Api\GeneralUser\Order\ShopOrderController::class, 'orderDetails']);
    //    Shop Product purchase

   //    Meeting List

    Route::get('user/meeting/list', [\App\Http\Controllers\Api\UserMeetingController::class, 'meetingList']);
    Route::get('user/old/meeting/list', [\App\Http\Controllers\Api\UserMeetingController::class, 'oldMeetingList']);
    Route::get('user/pending/meeting/list', [\App\Http\Controllers\Api\UserMeetingController::class, 'pendingMeetingList']);
    Route::get('user/meeting/status/update', [\App\Http\Controllers\Api\UserMeetingController::class, 'meetingStatusUpdate']);
    Route::post('user/meeting/create', [\App\Http\Controllers\Api\UserMeetingController::class, 'meetingBooked']);


    //    wishlist Controller
    Route::get('product/wishlist/get', [\App\Http\Controllers\Api\GeneralUser\WishlistController::class, 'wishList']);
    Route::get('my/ar/list/get', [\App\Http\Controllers\Api\GeneralUser\WishlistController::class, 'arList']);
    Route::get('product/wishlist/add', [\App\Http\Controllers\Api\GeneralUser\WishlistController::class, 'wishAdd']);
    Route::get('wishlist/ar/delete', [\App\Http\Controllers\Api\GeneralUser\WishlistController::class, 'arDelete']);
    Route::get('product/wishlist/delete', [\App\Http\Controllers\Api\GeneralUser\WishlistController::class, 'wishDelete']);

    //add air
    Route::get('product/add/ar', [\App\Http\Controllers\Api\GeneralUser\WishlistController::class, 'addAirList']);

    //create project
    Route::post('frontend/user/project/create', [\App\Http\Controllers\Api\UserProjectController::class, 'projectStore']);
    Route::post('frontend/user/project/completed', [\App\Http\Controllers\Api\UserProjectController::class, 'projectCompleted']);
    Route::get('user/project/milestone/release', [\App\Http\Controllers\Api\UserProjectController::class, 'ProjectMilestoneRelease']);

//    rating review
    Route::post('project/rating/review/add', [\App\Http\Controllers\Api\UserProjectController::class, 'projectRatingReviewAdd']);
    Route::post('product/rating/review/add', [\App\Http\Controllers\Api\GeneralUser\Order\ShopOrderController::class, 'productRatingReviewStore']);


    Route::get('user/delete/account', [\App\Http\Controllers\Api\GeneralUser\GeneralUserController::class, 'deleteAccount']);
    Route::post('user/info/update', [\App\Http\Controllers\Api\GeneralUser\GeneralUserController::class, 'profileUpdate']);
    Route::get('user/info/get', [\App\Http\Controllers\Api\GeneralUser\GeneralUserController::class, 'profileInfo']);

    Route::get('generalUser/notification', [\App\Http\Controllers\Api\NotificationController::class, 'getGeneralUserNotification']);
});

//shop Order Payment success
Route::post('shop/product/purchase/payment/success', [\App\Http\Controllers\Api\GeneralUser\Order\ShopOrderController::class, 'orderPaymentSuccess']);
Route::post('user/project/milestone/success/reject', [\App\Http\Controllers\Api\UserProjectController::class, 'milestonePaymentResult']);
Route::post('user/meeting/payment/success/reject', [\App\Http\Controllers\Api\UserMeetingController::class, 'meetingPaymentResult']);

Route::middleware(['auth:sanctum', 'type.designer'])->group(function () {
    Route::get('designer/setting/service/rate/get', [\App\Http\Controllers\Api\Designer\DesignerSettingController::class, 'designerServiceRate']);
    Route::get('designer/setting/service/rate/update', [\App\Http\Controllers\Api\Designer\DesignerSettingController::class, 'designerServiceRateUpdate']);
    Route::get('designer/setting/service/time/slot/update', [\App\Http\Controllers\Api\Designer\DesignerSettingController::class, 'designerServiceRateUpdate']);
    Route::get('login/designer/details', [\App\Http\Controllers\Api\Designer\ApiDesignerController::class, 'designerDetails']);

//    profile add  update
    Route::post('login/designer/profile/add/update', [\App\Http\Controllers\Api\Designer\ApiDesignerController::class, 'profileDataStore']);

//    portfolio store
    Route::post('login/designer/portfolio/add', [\App\Http\Controllers\Api\Designer\ApiDesignerController::class, 'profileProjectAdd']);
    Route::post('login/designer/portfolio/edit', [\App\Http\Controllers\Api\Designer\ApiDesignerController::class, 'projectItemEdit']);

//  Bank Account
    Route::get('designer/account/create', [\App\Http\Controllers\Api\Designer\ApiDesignerBankController::class, 'createAccount']);
    Route::get('designer/bank/list', [\App\Http\Controllers\Api\Designer\ApiDesignerBankController::class, 'bankList']);
//  Withdrawal
    Route::get('designer/all/withdrawal/list', [\App\Http\Controllers\Api\Designer\ApiDesignerWithdrawal::class, 'withdrawalAllList']);
    Route::get('designer/all/withdrawal/pending/list', [\App\Http\Controllers\Api\Designer\ApiDesignerWithdrawal::class, 'withdrawalPendingList']);
    Route::get('designer/all/withdrawal/complete/list', [\App\Http\Controllers\Api\Designer\ApiDesignerWithdrawal::class, 'withdrawalCompleteList']);
    Route::post('designer/withdrawal/request', [\App\Http\Controllers\Api\Designer\ApiDesignerWithdrawal::class, 'withdrawalRequest']);

//  Meeting List
    Route::get('designer/all/meeting/list', [\App\Http\Controllers\Api\Designer\ApiDesignerMeetingController::class, 'meetingList']);
    Route::get('designer/meeting/date/list', [\App\Http\Controllers\Api\Designer\ApiDesignerMeetingController::class, 'meetingDateList']);
    Route::get('designer/meeting/date/slot/edit', [\App\Http\Controllers\Api\Designer\ApiDesignerMeetingController::class, 'meetingTimeEdit']);
    Route::post('designer/meeting/date/slot/update', [\App\Http\Controllers\Api\Designer\ApiDesignerMeetingController::class, 'meetingTimeUpdate']);

//  Project List
    Route::get('designer/all/project/list', [\App\Http\Controllers\Api\Designer\ApiDesignerProjectController::class, 'projectList']);

//  Project Details
    Route::get('designer/project/details', [\App\Http\Controllers\Api\Designer\ApiDesignerProjectController::class, 'designerProjectDetails']);
    Route::get('designer/project/accept/reject', [\App\Http\Controllers\Api\Designer\ApiDesignerProjectController::class, 'projectUpdateStatus']);

//  time slot
    Route::get('designer/active/time/slot', [\App\Http\Controllers\Api\Designer\TimeSlotController::class, 'timeslotList']);
//    time shedule store
    Route::post('designer/time/schedule/store', [\App\Http\Controllers\Api\Designer\TimeSlotController::class, 'designerScheduleStore']);

//
    Route::get('designer/balance/get', [\App\Http\Controllers\Api\Designer\ApiDesignerBankController::class, 'balanceInfo']);
    Route::get('designer/financial/report', [\App\Http\Controllers\Api\Designer\ApiDesignerReportController::class, 'financialReport']);

    Route::get('designer/account/delete', [\App\Http\Controllers\Api\Designer\DesignerController::class, 'accountDelete']);

    Route::get('designer/notification', [\App\Http\Controllers\Api\NotificationController::class, 'getDesignerNotification']);

    Route::post('designer/agreement/store', [\App\Http\Controllers\Api\UserProjectController::class, 'projectAgreementStore']);


//    Report

});

Route::post('add/project/file', [\App\Http\Controllers\Api\Designer\ApiDesignerProjectController::class, 'addProjectFile']);

Route::middleware(['auth:sanctum', 'type.shopkeeper'])->group(function () {
    Route::get('shopkeeper/profile/info', [\App\Http\Controllers\Api\Shopkeeper\ApiShopkeeperController::class, 'shopkeeperProfileInfo']);
    Route::post('shopkeeper/profile/update', [\App\Http\Controllers\Api\Shopkeeper\ApiShopkeeperController::class, 'profileUpdate']);
    Route::get('shopkeeper/product/list', [\App\Http\Controllers\Api\Shopkeeper\ApiProductController::class, 'productList']);

    Route::post('shopkeeper/product/create', [\App\Http\Controllers\Api\Shopkeeper\ApiProductController::class, 'productStore']);
    Route::post('shopkeeper/product/update', [\App\Http\Controllers\Api\Shopkeeper\ApiProductController::class, 'productUpdate']);
    Route::get('shopkeeper/product/img/delete', [\App\Http\Controllers\Api\Shopkeeper\ApiProductController::class, 'productImgDelete']);
    Route::get('shopkeeper/product/pending/order', [\App\Http\Controllers\Api\Shopkeeper\ApiShopProductOrderController::class, 'shopkeeperPendingOrder']);
    Route::get('shopkeeper/product/complete/order', [\App\Http\Controllers\Api\Shopkeeper\ApiShopProductOrderController::class, 'shopkeeperCompletedOrder']);
    Route::get('shopkeeper/product/processing/order', [\App\Http\Controllers\Api\Shopkeeper\ApiShopProductOrderController::class, 'shopkeeperProcessingOrder']);
    Route::get('shopkeeper/product/all/order', [\App\Http\Controllers\Api\Shopkeeper\ApiShopProductOrderController::class, 'shopkeeperAllOrder']);
    Route::get('shopkeeper/order/details', [\App\Http\Controllers\Api\Shopkeeper\ApiShopProductOrderController::class, 'orderDetails']);
    Route::post('shopkeeper/order/status/change', [\App\Http\Controllers\Api\Shopkeeper\ApiShopProductOrderController::class, 'updateOrderStatus']);

//    balance
    Route::get('shopkeeper/balance', [\App\Http\Controllers\Api\Shopkeeper\ShopkeeperBalanceController::class, 'balance']);
    Route::post('withdrawal/request', [\App\Http\Controllers\Api\Shopkeeper\ShopkeeperBalanceController::class, 'withdrawalRequest']);
    Route::get('withdrawal/list', [\App\Http\Controllers\Api\Shopkeeper\ShopkeeperBalanceController::class, 'withdrawalList']);
    Route::post('shopkeeper/bank/add', [\App\Http\Controllers\Api\Shopkeeper\ShopkeeperBalanceController::class, 'bankAdd']);
    Route::get('shopkeeper/bank/list', [\App\Http\Controllers\Api\Shopkeeper\ShopkeeperBalanceController::class, 'bankList']);
    Route::get('financial/report', [\App\Http\Controllers\Api\Shopkeeper\ShopkeeperReportController::class, 'financialReport']);

    Route::get('shop/product/delete', [\App\Http\Controllers\Api\Shopkeeper\ApiProductController::class, 'productDelete']);
    Route::get('shop/account/delete', [\App\Http\Controllers\Api\Shopkeeper\ApiShopkeeperController::class, 'accountDelete']);
    Route::get('shopkeeper/notification', [\App\Http\Controllers\Api\NotificationController::class, 'getShopkeeperNotification']);
});

//product category
Route::get('shop/get/product/category', [\App\Http\Controllers\Api\FrontendShopkeeperController::class, 'productCategory']);
Route::get('shopkeeper/product/details', [\App\Http\Controllers\Api\Shopkeeper\ApiProductController::class, 'productDetails']);
Route::get('product/list/category/wise', [\App\Http\Controllers\Api\Shopkeeper\ApiProductController::class, 'categoryWiseProductList']);
//product color
Route::get('product/color/list', [\App\Http\Controllers\Api\Shopkeeper\ApiProductController::class, 'productColorList']);


Route::get('product/rating/review/list', [\App\Http\Controllers\Api\Shopkeeper\ApiProductController::class, 'ratingReview']);
Route::get('shop/related/product/ list', [\App\Http\Controllers\Api\Shopkeeper\ApiProductController::class, 'relatedProduct']);


//designer
Route::get('frontend/all/designer', [\App\Http\Controllers\Api\FrontendDesignerController::class, 'designerList']);
Route::get('frontend/designer/details', [\App\Http\Controllers\Api\FrontendDesignerController::class, 'designerDetails']);
Route::get('frontend/designer/project', [\App\Http\Controllers\Api\FrontendDesignerController::class, 'designerProject']);
Route::get('frontend/designer/portfolio', [\App\Http\Controllers\Api\FrontendDesignerController::class, 'designerPortfolio']);
Route::get('frontend/designer/rating/review', [\App\Http\Controllers\Api\FrontendDesignerController::class, 'designerRatingList']);

Route::get('frontend/designer/service/rate', [\App\Http\Controllers\Api\FrontendDesignerController::class, 'designerServiceRate']);
Route::get('frontend/designer/date/wise/active/time/schedule', [\App\Http\Controllers\Api\FrontendDesignerController::class, 'designerActiveTimeSchedule']);


//shop
Route::get('frontend/all/shop/list', [\App\Http\Controllers\Api\FrontendShopkeeperController::class, 'shopkeeperList']);
Route::get('frontend/shop/details', [\App\Http\Controllers\Api\FrontendShopkeeperController::class, 'shopkeeperDetails']);
Route::get('frontend/shop/product/list', [\App\Http\Controllers\Api\FrontendShopkeeperController::class, 'shopProductList']);
Route::get('frontend/shop/product/detail', [\App\Http\Controllers\Api\FrontendShopkeeperController::class, 'shopProductDetails']);
Route::get('frontend/shop/rating/review/list', [\App\Http\Controllers\Api\FrontendShopkeeperController::class, 'ratingReviewList']);


//user Registration login
Route::post('frontend/user/registration', [\App\Http\Controllers\Api\FrontendAuthenticationController::class, 'userRegistration']);
Route::post('frontend/user/login', [\App\Http\Controllers\Api\FrontendAuthenticationController::class, 'generalUserLogin']);
Route::get('frontend/user/isLogin', [\App\Http\Controllers\Api\FrontendAuthenticationController::class, 'getToken']);

//forget password
Route::get('reset/password/opt/get', [\App\Http\Controllers\Api\FrontendAuthenticationController::class, 'otpGet']);
Route::get('reset/password/opt/check', [\App\Http\Controllers\Api\FrontendAuthenticationController::class, 'checkOtpCode']);
Route::post('reset/password/store', [\App\Http\Controllers\Api\FrontendAuthenticationController::class, 'resetPassword']);

//Designer Registration login
Route::get('frontend/designer/registration', [\App\Http\Controllers\Api\FrontendAuthenticationController::class, 'designerRegistration']);
Route::post('frontend/designer/login', [\App\Http\Controllers\Api\FrontendAuthenticationController::class, 'designerUserLogin']);


//ShopKeeper Registration login
Route::get('frontend/shopkeeper/registration', [\App\Http\Controllers\Api\FrontendAuthenticationController::class, 'shopkeeperRegistration']);
Route::post('frontend/shopkeeper/login', [\App\Http\Controllers\Api\FrontendAuthenticationController::class, 'shopkeeperLogin']);


// Designer chatting
Route::post('chat/store', [\App\Http\Controllers\Api\ChattingController::class, 'chatMessageStore']);
Route::get('chat/list/get', [\App\Http\Controllers\Api\ChattingController::class, 'getChatData']);

//homepage
Route::get('popular/product/list', [\App\Http\Controllers\Api\HomeController::class, 'popularProduct']);
Route::get('search/product', [\App\Http\Controllers\Api\HomeController::class, 'searchProduct']);
Route::get('active/shop/designer/count', [\App\Http\Controllers\Api\HomeController::class, 'shopDesignerCount']);


Route::post('support/message/create', [\App\Http\Controllers\Api\ApiSupportController::class, 'sendMessage']);
Route::get('get/faq/list', [\App\Http\Controllers\Api\ApiFaqController::class, 'getFaq']);

//location

Route::get('get/country', [\App\Http\Controllers\Api\ApiLocationController::class, 'countryList']);


// After Payment
Route::post('meeting/after/payment/result/store', [\App\Http\Controllers\Api\ApiAfterPaymentController::class, 'meetingPaymentSuccess']);
Route::post('milestone/after/payment/result/store', [\App\Http\Controllers\Api\ApiAfterPaymentController::class, 'milestonePaymentSuccess']);



Route::post('notification/token/store', [\App\Http\Controllers\Api\ApiNotificationController::class, 'notificationStore']);
Route::post('notification/token/delete', [\App\Http\Controllers\Api\ApiNotificationController::class, 'notificationTokenDelete']);








