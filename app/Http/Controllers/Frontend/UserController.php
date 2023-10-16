<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ForgotPassword;
use App\Mail\OrderMail;
use App\Mail\ShopApproved;
use App\Mail\UserMailVerification;
use App\Models\AdminSetting;
use App\Models\Designer;
use App\Models\DesignerServiceRate;
use App\Models\NotificationDeviceToken;
use App\Models\Shopkeeper;
use App\Models\ShopkeeperDetails;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use function PHPUnit\Framework\returnArgument;

class UserController extends Controller
{
    public function userLogin()
    {
        return view('frontend.user.sign_in');
    }

    public function userRegistration()
    {
        return view('frontend.user.sign_up');
    }

    public function userRegistrationStore(Request $request)
    {
        $user_id = '';
        if ($request->user_type == 'general_user') {
            $is_existing = User::where('email', $request->email)->first();
            if ($is_existing) {
                return redirect()->back()->with('error', 'Already  registered this email');
            }
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();
            $user->id_no=10000+$user->id;
            $user->save();
            $user_id = $user->id;
        }

        if ($request->user_type == 'designer') {
            $is_existing = Designer::where('email', $request->email)->where('is_authentic', 1)->first();
            $settingCharge = AdminSetting::first();
            if (!$settingCharge) {
                return redirect()->back()->with('error', 'First Set charge rate');
            }
            if ($is_existing) {
                return redirect()->back()->with('error', 'Already  registered this email');
            }

            $designer = new Designer();
            $designer->name = $request->name;
            $designer->email = $request->email;
            $designer->is_authentic = 1;
            $designer->password = Hash::make($request->password);
            $designer->save();
            $designer->id_no=10000+$designer->id;
            $designer->save();
            $user_id = $designer->id;

            $serviceSetting=new DesignerServiceRate();
            $serviceSetting->designer_id=$user_id;
            $serviceSetting->call_rate=0;
            $serviceSetting->video_rate=0;
            $serviceSetting->online_rate=0;
            $serviceSetting->active_time_schedule='30';
            $serviceSetting->save();
        }

        if ($request->user_type == 'shopkeeper') {
            $is_existing = Shopkeeper::where('email', $request->email)->where('is_authentic', 1)->first();
            $settingCharge = AdminSetting::first();
            if (!$settingCharge) {
                return redirect()->back()->with('error', 'First Set  charge rate');
            }
            if ($is_existing) {
                return redirect()->back()->with('error', 'Already  registered this email');
            }
            $shopkeeper = new Shopkeeper();
            $shopkeeper->name = $request->name;
            $shopkeeper->email = $request->email;
            $shopkeeper->password = Hash::make($request->password);
            $shopkeeper->is_authentic = 1;
            $shopkeeper->is_approved = 1;
            $shopkeeper->save();
            $shopkeeper->id_no=10000+$shopkeeper->id;
            $shopkeeper->save();

            $user_id = $shopkeeper->id;
            $shop=new ShopkeeperDetails();
            $shop->user_id=$user_id;
            $shop->name=$request->name;
            $shop->save();

        }

        if($request->user_type=='general_user'){
            $details = [
                'user_type' => $request->user_type,
                'title' => 'Mail from Registration',
                'user_id' => $user_id,
                'name' => $request->name,

            ];
            Mail::to($request->email)->send(new UserMailVerification($details));
            return redirect()->back()->with('success', 'Successfully registration completed. Please check your mail and verify ');
        }
        else{
            return redirect()->back()->with('success', 'Successfully registration completed.');
        }





    }

    public function userRegistrationMailVerification(Request $request)
    {

           $updatedata = User::find($request->user_id);
            $updatedata->is_authentic = 1;
            $updatedata->email_verified_at = Carbon::now();
            $updatedata->save();


//        if ($request->user_type == 'designer') {
//            $updateDesigner = Designer::find($request->user_id);
//            $updateDesigner->is_authentic = 1;
//            $updateDesigner->email_verified_at = Carbon::now();
//            $updateDesigner->save();
//        }
//
//        if ($request->user_type == 'shopkeeper') {
//            $updateShop = Shopkeeper::find($request->user_id);
//            $updateShop->is_authentic = 1;
//            $updateShop->email_verified_at = Carbon::now();
//            $updateShop->save();
//
//        }
        return redirect()->intended('frontend/user/login')->with('success','Mail verification completed successfully');
    }

    public function loginUser(Request $request)
    {
        if ($request->user_type == 'general_user') {
            $user = User::where('email', $request->email)->where('is_deleted',0)->first();
            if ($user && Hash::check($request->password,$user->password)) {
                Auth::login($user);
                $this->deviceTokenStore($user->user_type,$user->id,$request->device_token);
                return redirect()->intended('/')->with('success', 'Successfully Login');
            }
            return redirect()->back()->with('error', 'Email or password is incorrect');

        }
        if ($request->user_type == 'designer') {
            $findDesigner = Designer::where('is_authentic', 1)->where('email', $request->email)->where('is_deleted',0)->first();
            if ($findDesigner &&  Hash::check($request->password,$findDesigner->password)) {
                $this->validate($request, [
                    'email' => 'required|email',
                    'password' => 'required|min:4',
                ]);
                if (Auth::guard('designer')->attempt($request->only('email', 'password'))) {
                    $this->deviceTokenStore($findDesigner->user_type,$findDesigner->id,$request->device_token);
                    return redirect()->intended('designer/profile/setting');
                }
                return redirect()->back()->with('error', 'Email or password is incorrect');
            }
        }

        if ($request->user_type == 'shopkeeper') {
            $userNotApproved = Shopkeeper::where('is_authentic', 1)->where('is_approved',0)->where('email', $request->email)->where('is_deleted',0)->first();
            if($userNotApproved){
                return redirect()->back()->with('error', 'Your Shop activation request has been sent.Wait for administrator permission');
            }

            $findUser = Shopkeeper::where('is_authentic', 1)->where('is_approved',1)->where('is_deleted',0)->where('email', $request->email)->first();
            if ($findUser && Hash::check($request->password,$findUser->password)) {
                $this->validate($request, [
                    'email' => 'required|email',
                    'password' => 'required|min:4',
                ]);
                if (Auth::guard('shopkeeper')->attempt($request->only('email', 'password'))) {
                    Auth::guard('shopkeeper')->login($findUser);
                    $this->deviceTokenStore($findUser->user_type,$findUser->id,$request->device_token);
                    return redirect()->intended('shopkeeper/dashboard')->with('success','successfully Login');
                }
                return redirect()->back()->with('error', 'Email or password is incorrect');

            }
        }

        return redirect()->back()->with('error', 'Email or password is incorrect');

    }


    function deviceTokenStore($userType,$userId,$deviceToken){
        $notificationData=NotificationDeviceToken::where('user_type',$userType)->where('token',$deviceToken)->where('user_id',$userId)->first();
        if($notificationData){
            $notification=$notificationData;
        }else{
            $notification=new NotificationDeviceToken();
        }

        $notification->user_type=$userType;
        $notification->device_type=3;
        $notification->user_id=$userId;
        $notification->token=$deviceToken;
        $notification->save();

    }

    public function userLogout(Request $request){
        $user=Auth::user();
        NotificationDeviceToken::where('user_type',$user->user_type)->where('user_id',$user->id)->delete();
        Auth::logout();

        return redirect()->intended('/')->with('success','successfully logged out');
    }

    public function designerLogout(){
        $user=auth()->guard('designer')->user();
        NotificationDeviceToken::where('user_type',$user->user_type)->where('user_id',$user->id)->delete();
        auth()->guard('designer')->logout();

        return redirect()->intended('/')->with('success','successfully logged out');
    }

    function forgotPassword(){
        return view('frontend.user.forgotPassword');
    }
    function resetMailSend(Request $request){
        $userInfo='';
        $userName='';
        if($request->user_type==1){  /*general user*/
            $userInfo = User::where('email',$request->email)->first();
        }
        if($request->user_type==2) { /*designer user or company */
            $userInfo = Designer::where('email',$request->email)->first();
        }
        if($request->user_type==3) { /*shopkeeper user*/
            $userInfo = Shopkeeper::where('email',$request->email)->first();
        }
        if($userInfo==''){
            return Redirect::back()->with('error','Your email is incorrect');
        }

        $details = [
            'user_type' =>$request->user_type ,
            'user_id' =>$userInfo->id ,
            'title' => 'Mail from Designers Muse Reset Password',
            'name' =>  $userInfo->name,
            'email' => $request->email,
        ];
        Mail::to($request->email)->send(new ForgotPassword($details));
        return Redirect::back()->with('success','Successfully sent mail to reset password');


//        Mail::to($shop->email)->send(new ShopApproved($details));


    }
    public function resetPassword(Request $request){
        $userId=$request->user_id;
        $userType=$request->user_type;
        return view('frontend.user.resetPassword')->with(compact('userId','userType'));
    }

    public function updateUserPassword(Request $request){

        if($request->password===$request->confirm_password){
            if($request->type==1){  /*general user*/
                $userInfo = User::find($request->id);
            }
            if($request->type==2) { /*designer user or company */
                $userInfo = Designer::find($request->id);
            }
            if($request->type==3) { /*shopkeeper user*/
                $userInfo = Shopkeeper::find($request->id);
            }
            $userInfo->password=Hash::make($request->password);
            $userInfo->save();


            return Redirect::intended('/')->with('success','Your password has been successfully updated');

        }else{
            return Redirect::back()->with('error','Password and confirm password does not match');
        }

    }
}
