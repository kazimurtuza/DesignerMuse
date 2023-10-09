<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\NotificationDeviceToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiNotificationController extends Controller
{
    public function notificationStore(Request $request){
        $request->validate([
            'device_token'=>'required',
            'device_type'=>'required',
            'id'=>'required',
            'user_type'=>'required',
        ]);

        $this->deviceTokenStore($request->user_type,$request->id,$request->device_token,$request->device_type);

        $data = [
            'status' => 200,
            'message' => 'Successfully token saved',
        ];
        return response()->json($data);
    }

    public function notificationTokenDelete(Request $request){

        $request->validate([
            'device_token'=>'required',
        ]);
        NotificationDeviceToken::where('user_type',$request->user_type)->where('device_type',$request->device_type)->where('token',$request->device_token)->where('user_id',$request->id)->delete();
        $data = [
            'status' => 200,
            'message' => 'Successfully token deleted',
        ];
        return response()->json($data);
    }

    function deviceTokenStore($userType,$userId,$deviceToken,$deviceType){
        $notificationData=NotificationDeviceToken::where('user_type',$userType)->where('token',$deviceToken)->where('device_type',$deviceType)->where('user_id',$userId)->first();
        if($notificationData){
            $notification=$notificationData;
        }else{
            $notification=new NotificationDeviceToken();
        }
        $notification->user_type=$userType;
        $notification->device_type=$deviceType;
        $notification->user_id=$userId;
        $notification->token=$deviceToken;
        $notification->save();
    }


}
