<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthenticationController;
use App\Http\Controllers\Designer\DesignerController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\GeneralUser\GeneralUserController;
use App\Http\Controllers\ShopKeeper\ShopController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Designer Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['middleware' => 'designerAuthCheck'], function () {
    Route::get('designer/package/setting',[\App\Http\Controllers\Designer\DesignerSettingController::class, 'timeSetting'])->name('designer.package.setting');
    Route::get('time/schedule/setting',[\App\Http\Controllers\Designer\DesignerSettingController::class, 'timeSchedule'])->name('time.schedule.setting');
    Route::get('time/schedule/list',[\App\Http\Controllers\Designer\DesignerSettingController::class, 'timeScheduleList'])->name('time.schedule.list');
    Route::get('time/schedule/edit',[\App\Http\Controllers\Designer\DesignerSettingController::class, 'timeScheduleEdit'])->name('time.schedule.edit');

    Route::post('time/schedule/create',[\App\Http\Controllers\Designer\DesignerSettingController::class, 'timeScheduleCreate'])->name('time.schedule.create');
    Route::get('time/schedule/slot/get',[\App\Http\Controllers\Designer\DesignerSettingController::class, 'timeSlotGet'])->name('time.schedule.slot.get');
    Route::post('designer/selected/slot/store',[\App\Http\Controllers\Designer\DesignerSettingController::class, 'designerSlotStore'])->name('designer.selected.slot.store');
    Route::post('designer/selected/slot/update',[\App\Http\Controllers\Designer\DesignerSettingController::class, 'timeScheduleUpdate'])->name('designer.selected.slot.update');
    Route::post('designer/selected/rate/store',[\App\Http\Controllers\Designer\DesignerSettingController::class, 'designerServiceRate'])->name('designer.service.rate.store');


    //Profile Setting
    Route::get('designer/profile/setting',[DesignerController::class, 'profileSetting'])->name('designer.profile.setting');
    Route::post('profile/data/store',[DesignerController::class, 'profileDataStore'])->name('profile.data.store');
    Route::post('experience/data/store',[DesignerController::class, 'experienceStore'])->name('experience.data.store');
    Route::post('education/data/store',[DesignerController::class, 'educationStore'])->name('education.data.store');
    Route::post('designer/profile/project/store',[DesignerController::class, 'profileProject'])->name('designer.profile.project.store');
    Route::get('get/project/data',[DesignerController::class, 'getProjectInfo'])->name('get.project.data');
    Route::post('designer/profile/project/edit',[DesignerController::class, 'projectItemEdit'])->name('designer.profile.project.edit');

    Route::get('get/experience/get',[DesignerController::class, 'getExperienceInfo'])->name('get.experience.data');
    Route::post('experience/data/edit',[DesignerController::class, 'experienceInfoEdit'])->name('experience.data.edit');

    Route::get('get/education/data',[DesignerController::class, 'getEducationInfo'])->name('get.education.data');
    Route::post('education/data/update',[DesignerController::class, 'educationUpdate'])->name('education.data.update');


    Route::get('designer/pending/withdrawal/list',[\App\Http\Controllers\Designer\BillBalanceController::class, 'withdrawalRequestList'])->name('designer.pending.withdrawal.list');
    Route::get('designer/completed/withdrawal/list',[\App\Http\Controllers\Designer\BillBalanceController::class, 'withdrawalRequestCompleted'])->name('designer.completed.withdrawal.list');


    //meeting list
    Route::get('designer/meeting/list',[\App\Http\Controllers\Designer\DesignerMeetingController::class, 'meetingList'])->name('designer.meeting.list');

    //project
    Route::get('designer/project/list',[\App\Http\Controllers\Designer\DesignerProjectController::class, 'myProjectList'])->name('designer.project.list');
    Route::get('designer/project/details',[\App\Http\Controllers\Designer\DesignerProjectController::class, 'projectDetails'])->name('designer.project.details');
    Route::get('designer/project/status',[\App\Http\Controllers\Designer\DesignerProjectController::class, 'projectUpdateStatus'])->name('designer.project.status');
    Route::get('project/agreement/set',[\App\Http\Controllers\Designer\DesignerProjectController::class, 'projectAgreementSet'])->name('project.agreement.set');
    Route::post('designer/project/agreement/store',[\App\Http\Controllers\Designer\DesignerProjectController::class, 'projectAgreementStore'])->name('designer.project.agreement.store');

    Route::post('user/project/file/add', [\App\Http\Controllers\GeneralUser\ProjectController::class, 'addProjectFile'])->name('add.project.file');

    //Designer Balance and withdrawal
    Route::get('designer/balance',[\App\Http\Controllers\Designer\BillBalanceController::class, 'myBalance'])->name('designer.balance');
    Route::get('designer/withdrawal/request',[\App\Http\Controllers\Designer\BillBalanceController::class, 'withdrawalRequest'])->name('designer.withdrawal.request');


    //bank Account
    Route::get('designer/bank/list',[\App\Http\Controllers\Designer\DesignerBankAccountController::class, 'bankAccount'])->name('designer.bank.list');
    Route::post('designer/bank/store',[\App\Http\Controllers\Designer\DesignerBankAccountController::class, 'bankAccountStore'])->name('designer.bank.store');

    Route::get('designer/payment/list',[\App\Http\Controllers\Designer\BillBalanceController::class, 'designerPaymentList'])->name('designer.payment.list');

    //designer
    Route::get('designer/dashboard', [designerController::class, 'designerDashboard'])->name('designer.dashboard');

    //designer logout
     Route::get('frontend/designer/logout', [UserController::class, 'designerLogout'])->name('frontend.designer.logout');
  //designer Report
     Route::get('designer/financial/report', [\App\Http\Controllers\Designer\DesingerReportController::class, 'financialReport'])->name('designer.financial.report');


});

Route::get('designer/list',[\App\Http\Controllers\Frontend\FrontendDesignerController::class, 'designerList'])->name('designer.list');
Route::get('designer/profile/{designer_id}',[\App\Http\Controllers\Frontend\FrontendDesignerController::class, 'designerProfile'])->name('designer.profile');
Route::get('designer/appointment',[\App\Http\Controllers\Frontend\FrontendDesignerController::class, 'designerAppointment'])->name('designer.appointment');
Route::get('designer/appointment/time/slot',[\App\Http\Controllers\Frontend\FrontendDesignerController::class, 'getDesignerTimeSlot'])->name('get.designer.time.slot');
Route::post('designer/appointment/booked',[\App\Http\Controllers\Frontend\FrontendDesignerController::class, 'designerAppointmentBook'])->name('designer.appointment.booked');






