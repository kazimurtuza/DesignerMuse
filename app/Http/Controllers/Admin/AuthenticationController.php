<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Designer;
use App\Models\NotificationDeviceToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function loginView(){
        return view('admin.sign_in');
    }

    public function login(Request $request){

        $findAdmin= Admin::where('is_authentic',1)->where('email',$request->email)->first();

        if($findAdmin){
            $this->validate($request, [
                'email' => 'required|email',
                'password' => 'required|min:6',
            ]);
            if (Auth::guard('admin')->attempt($request->only('email', 'password'))) {
                $this->deviceTokenStore($findAdmin->user_type,$findAdmin->id,$request->device_token);
                return redirect()->intended('admin/dashboard');
            }
            return redirect()->back()->with('error', 'Email or password is incorrect');
        }
        return redirect()->back()->with('error', 'Email or password is incorrect');
    }

    public function logout(){
       $user= Auth::guard('admin')->user();
        NotificationDeviceToken::where('user_type',$user->user_type)->where('user_id',$user->id)->delete();
       Auth::guard('admin')->logout($user);
       return redirect()->intended('/');
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
}
