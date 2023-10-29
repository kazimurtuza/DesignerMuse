<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthenticationController;
use App\Http\Controllers\Designer\DesignerController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\GeneralUser\GeneralUserController;
use App\Http\Controllers\Shopkeeper\ShopController;
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


Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('frontend/user/login', [UserController::class, 'userLogin'])->name('frontend.user.login');
Route::get('frontend/user/registration', [UserController::class, 'userRegistration'])->name('frontend.user.registration');
Route::get('frontend/user/forgot/password', [UserController::class, 'forgotPassword'])->name('frontend.user.forgot.pass');
Route::get('frontend/user/reset/mail/send', [UserController::class, 'resetMailSend'])->name('frontend.reset.password.mail.send');
Route::get('user/reset/password', [UserController::class, 'resetPassword'])->name('user.reset.password');
Route::post('user/update/user/password', [UserController::class, 'updateUserPassword'])->name('frontend.update.user.password');


Route::post('frontend/user/registration/store', [UserController::class, 'userRegistrationStore'])->name('admin.registration.store');
Route::post('frontend/user/login/check', [UserController::class, 'loginUser'])->name('admin.user.login');
Route::get('frontend/user/mail/verification', [UserController::class, 'userRegistrationMailVerification'])->name('registration.mail.verification');

//shopkeeper
//Route::get('shopkeeper/dashboard',[ShopController::class, 'shopHome'])->name('shopkeeper.index');


//registration

Route::group(['middleware' => 'generalUserAuthCheck'], function () {
    //general_user
    Route::get('general_user/dashboard', [GeneralUserController::class, 'generalUserDashboard'])->name('general.user.dashboard');
    //order list
    Route::get('user/my/order/list', [\App\Http\Controllers\GeneralUser\OrderController::class, 'myOrder'])->name('user.my.order.list');
    Route::get('user/my/order/details', [\App\Http\Controllers\GeneralUser\OrderController::class, 'orderDetails'])->name('user.my.order.details');

    //create designer project
    Route::get('designer/create/project', [\App\Http\Controllers\GeneralUser\ProjectController::class, 'createProject'])->name('designer.create.project');
    Route::post('designer/project/agreement/accept/store', [\App\Http\Controllers\GeneralUser\ProjectController::class, 'projectAgreementAcceptStore'])->name('designer.project.agreement.accept.store');
    //project
    Route::post('designer/project/store', [\App\Http\Controllers\GeneralUser\ProjectController::class, 'projectStore'])->name('designer.project.store');
    Route::get('user/project/list', [\App\Http\Controllers\GeneralUser\ProjectController::class, 'myProjectList'])->name('user.project.list');
    Route::get('user/project/details', [\App\Http\Controllers\GeneralUser\ProjectController::class, 'projectDetails'])->name('client.project.details');
    Route::get('user/release/milestone', [\App\Http\Controllers\GeneralUser\ProjectController::class, 'releaseMilestone'])->name('release.milestone');
    Route::post('user/project/milestone/create', [\App\Http\Controllers\GeneralUser\ProjectController::class, 'milestoneCreate'])->name('user.project.milestone.create');
    Route::post('user/project/file/add', [\App\Http\Controllers\GeneralUser\ProjectController::class, 'addProjectFile'])->name('add.project.file');

    Route::post('user/project/completed', [\App\Http\Controllers\GeneralUser\ProjectController::class, 'projectCompleted'])->name('user.project.completed');

    Route::get('designer/meeting/outcome', [\App\Http\Controllers\GeneralUser\MeetingController::class, 'designerMeetingOutcomeUpdate'])->name('designer.meeting.outcome.update');
    Route::get('user/old/meeting/list', [\App\Http\Controllers\GeneralUser\MeetingController::class, 'oldMeetingList'])->name('user.my.old.meeting.list');

    Route::get('user/accept/agreement', [\App\Http\Controllers\GeneralUser\ProjectController::class, 'acceptAgreement'])->name('accept.agreement');

    //reating Review
    Route::post('frontend/product/rating/review/store', [\App\Http\Controllers\GeneralUser\ReatingReviewController::class, 'productRatingReviewStore'])->name('product.rating.review.store');
    Route::post('frontend/project/rating/review/store', [\App\Http\Controllers\GeneralUser\ReatingReviewController::class, 'projectRatingReviewStore'])->name('project.rating.review.store');

    //meeting list
    Route::get('user/my/meeting/list', [\App\Http\Controllers\GeneralUser\MeetingController::class, 'meetingList'])->name('user.my.meeting.list');
    Route::get('user/my/old/meeting/list', [\App\Http\Controllers\GeneralUser\MeetingController::class, 'oldMeetingList'])->name('user.my.old.meeting.list');

    //Chat
    Route::get('user/project/chat', [\App\Http\Controllers\Frontend\FrontendChatController::class, 'clientProjectChat'])->name('client.project.chat');

    //general user
    Route::get('user/shop/cart/add', [\App\Http\Controllers\GeneralUser\ShopCartController::class, 'addToCart'])->name('user.cart.add');
    Route::post('user/shop/customer', [\App\Http\Controllers\Shopkeeper\OrderController::class, 'Order'])->name('user.cart.customer');

    //log out
    Route::get('frontend/user/logout', [UserController::class, 'userLogout'])->name('frontend.user.logout');

//    product wish ar add

    Route::get('shop/product/wish/add', [\App\Http\Controllers\Frontend\ShopWishlistController::class, 'wishAdd'])->name('shop.product.wish.add');
    Route::get('shop/product/ar/add', [\App\Http\Controllers\Frontend\ShopWishlistController::class, 'arAdd'])->name('shop.product.ar.add');
    Route::get('shop/product/wishlist', [\App\Http\Controllers\Frontend\ShopWishlistController::class, 'wishList'])->name('shop.product.wishlist');


    Route::post('/store-token', [\App\Http\Controllers\NotificationSendController::class, 'updateDeviceToken'])->name('store.token');
    Route::post('/send-web-notification', [\App\Http\Controllers\NotificationSendController::class, 'sendNotification'])->name('send.web-notification');

});

Route::post('/support/message/send', [\App\Http\Controllers\SupportController::class, 'supportMessageSend'])->name('support.message.send');
Route::get('/support/list', [\App\Http\Controllers\SupportController::class, 'supportSupportList'])->name('supportList');

//general user

Route::get('user/shop/cart/list', [\App\Http\Controllers\GeneralUser\ShopCartController::class, 'cardList'])->name('user.cart.details');
Route::get('card/item/inc/dsc', [\App\Http\Controllers\GeneralUser\ShopCartController::class, 'carIncDec'])->name('card.item.inc.dec');

//chat
Route::get('frontend/meeting/project/chat/store', [\App\Http\Controllers\Frontend\FrontendChatController::class, 'designerChatStore'])->name('frontend.meeting.project.chat.store');
Route::get('frontend/designer/project/chat', [\App\Http\Controllers\Frontend\FrontendChatController::class, 'designerProjectChat'])->name('frontend.designer.project.chat');

Route::get('all/chat/list', [\App\Http\Controllers\Frontend\FrontendChatController::class, 'allChatList'])->name('all.chat.list');

Route::get('designer/payment/success', [\App\Http\Controllers\Admin\PaymentController::class, 'successPayment'])->name('success.payment');

Route::get('frontend/about/ous', [\App\Http\Controllers\PageController::class, 'aboutOus'])->name('frontend.about.ous');
Route::get('how/we/work', [\App\Http\Controllers\PageController::class, 'howWeWork'])->name('frontend.how.we.work');
Route::get('language/set', [\App\Http\Controllers\Frontend\LanguageController::class, 'languageSet'])->name('language.set');

//pages
Route::get('terms-condition', [\App\Http\Controllers\Frontend\WebTermsAndConditionController::class, 'termsCondition'])->name('terms.condition');
Route::get('privacy-policy', [\App\Http\Controllers\Frontend\WebTermsAndConditionController::class, 'privacyPolicy'])->name('privacy.policy');

Route::get('get/unseen/message', [\App\Http\Controllers\Frontend\FrontendChatController::class, 'unseenCatGet'])->name('get.unseen.message');




