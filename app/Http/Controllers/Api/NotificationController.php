<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use Carbon\Carbon;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function getDesignerNotification()
    {
        $designerId = auth()->user()->id;
        return Notification::where('user_type', 2)->where('user_id', $designerId)->orderBy('id', 'DESC')->paginate(10);
    }

    public function getShopkeeperNotification()
    {
        $shopId = auth()->user()->id;
        return Notification::where('user_type', 3)->where('user_id', $shopId)->orderBy('id', 'DESC')->paginate(10);
    }

    public function getGeneralUserNotification()
    {
        $user = auth()->user()->id;
        return Notification::where('user_type', 4)->where('user_id', $user)->orderBy('id', 'DESC')->paginate(10);
    }

    public function unseenNotificationNumber(Request $request)
    {
        $request->validate([
            'user_type' => 'required',
            'user_id' => 'required',
        ]);
        $unseen = Notification::where('user_type', $request->user_type)->where('user_id', $request->user_id)->where('is_seen', 0)->count();
        $data = [
            'unseen_notification_number' => $unseen,
        ];
        return response()->json($data);
    }

    public function setAllNotificationSeen(Request $request)
    {
        $request->validate([
            'user_type' => 'required',
            'user_id' => 'required',
        ]);
        Notification::where('user_type', $request->user_type)->where('user_id', $request->user_id)->where('is_seen', 0)->update(['is_seen' => 0]);
        $data = [
            'status' => 200,
            'message' => '',
        ];
        return response()->json($data);
    }

    public function clearAllNotification(Request $request)
    {
        $request->validate([
            'user_type' => 'required',
            'user_id' => 'required',
        ]);
        Notification::where('user_type', $request->user_type)->where('user_id', $request->user_id)->where('is_seen', 0)->delete();
        $data = [
            'status' => 200,
            'message' => 'Successfully Cleared All notification',
        ];
        return response()->json($data);
    }

    public function notificationStore(Request $request)
    {
        $request->validate([
            'receiver_type' => 'required',
            'receiver_id' => 'required',
            'title' => 'required',
            'body' => 'required',
        ]);
        $notification=new Notification();
        $notification->user_type=$request->receiver_type;
        $notification->user_id=$request->receiver_id;
        $notification->title=$request->title;
        $notification->body=$request->body;
        $notification->date=Carbon::now();
        $notification->save;
        $data = [
            'status' => 200,
            'message' => 'Successful',
        ];
        return response()->json($data);
    }

}
