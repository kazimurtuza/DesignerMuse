<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationSendController extends Controller
{
    public function updateDeviceToken(Request $request)
    {
        return $request->token;
        Auth::user()->device_token =  $request->token;

        Auth::user()->save();

        return response()->json(['Token successfully stored.']);
    }

    public function sendNotification(Request $request)
    {
        $FcmToken = User::whereNotNull('web_device_token')->pluck('web_device_token')->all();
        sendNotification('order','completed',$FcmToken);
        return redirect()->back();
    }


}
