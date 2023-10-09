<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function getDesignerNotification(){
        $designerId=auth()->user()->id;
        return Notification::where('user_type',2)->where('user_id',$designerId)->orderBy('id','DESC')->paginate(10);
    }
    public function getShopkeeperNotification(){
        $shopId=auth()->user()->id;
        return Notification::where('user_type',3)->where('user_id',$shopId)->orderBy('id','DESC')->paginate(10);
    }
    public function getGeneralUserNotification(){
        $user=auth()->user()->id;
        return Notification::where('user_type',4)->where('user_id',$user)->orderBy('id','DESC')->paginate(10);
    }

}
