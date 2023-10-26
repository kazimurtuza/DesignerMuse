<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Resources\howItworkResource;
use App\Models\Designer;
use App\Models\DesignerAppointmentList;
use App\Models\DesignerChat;
use App\Models\HowItWork;
use App\Models\Notification;
use App\Models\NotificationDeviceToken;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendChatController extends Controller
{
    public function clientProjectChat(Request $request)
    {
        $date = Carbon::now();

        $chatInfo = DesignerAppointmentList::find($request->meeting_id);
        $userName = $chatInfo->client->name;
        $designerName = $chatInfo->designer->name;
        $meetingNo = $chatInfo->id_no;

        $userId = $chatInfo->user_id;
        $designerId = $chatInfo->designer_id;
        $meetingId = $request->meeting_id;
        $chatList = DesignerChat::where('meeting_id', $request->meeting_id)->get();
        return view('chat.customerChat')->with(compact('userId', 'designerId', 'chatList', 'meetingId', 'designerName', 'userName', 'meetingNo'));
    }

    public function allChatList(Request $request)
    {
        $designer = Auth::guard('designer')->user();
        $user = Auth::user();
        $is_sender_client = '';
        $meetingList = [];
        if ($user) {
            $is_sender_client = 1;
            $meetingList = DesignerAppointmentList::where('user_id', $user->id)->where('payment_status', 1)->get();
        }
        if ($designer) {
            $is_sender_client = 0;
            $meetingList = DesignerAppointmentList::where('designer_id', $designer->id)->where('payment_status', 1)->get();
        }


        $date = Carbon::now();

        if ($request->meeting_id) {
            $chatInfo = DesignerAppointmentList::find($request->meeting_id);
        }
        $userName = $request->meeting_id ? $chatInfo->client->name : '';
        $designerName = $request->meeting_id ? $chatInfo->designer->name : '';
        $meetingNo = $request->meeting_id ? $chatInfo->id_no : '';

        $userId = $request->meeting_id ? $chatInfo->user_id : '';
        $designerId = $request->meeting_id ? $chatInfo->designer_id : '';
        $meetingId = $request->meeting_id ? $request->meeting_id : '';
        $chatList = $request->meeting_id ? DesignerChat::where('meeting_id', $request->meeting_id)->get() : [];
        return view('chat.allChatList')->with(compact('is_sender_client', 'userId', 'designerId', 'chatList', 'meetingId', 'designerName', 'userName', 'meetingNo', 'meetingList'));


    }


    public function designerProjectChat(Request $request)
    {
        $date = Carbon::now();
        $chatInfo = DesignerAppointmentList::find($request->meeting_id);
        $userName = $chatInfo->client->name;
        $designerName = $chatInfo->designer->name;
        $meetingNo = $chatInfo->id_no;

        $userId = $chatInfo->user_id;
        $designerId = $chatInfo->designer_id;
        $meetingId = $request->meeting_id;
        $chatList = DesignerChat::where('meeting_id', $request->meeting_id)->get();
        return view('chat.designerChat')->with(compact('userId', 'designerId', 'chatList', 'meetingId', 'designerName', 'userName', 'meetingNo'));
    }

    public function designerChatStore(Request $request)
    {
        $chat = new DesignerChat();
        $chat->customer_id = $request->customer_id;
        $chat->seller_id = $request->seller_id;
        $chat->meeting_id = $request->meeting_id;
        $chat->message = $request->message;
//        $chat->seen_status=$request
        $chat->is_sender_client = $request->is_sender_client;
        $chat->date_time = Carbon::now();
        $chat->date = Carbon::now();
        $chat->created_at = Carbon::now();
        $chat->save();

        //Notification
        $token ='driR0krOWKB7JC64bziotV:APA91bFuLzoekfyDIbZhawZqDAAqn61I8-lDmrsCglQUh1ewE9OMyJYDrRfbSiVd2wGznz2ypppTU0vdAVrlyt883kye-cTjSHlEXuI0t6M3fo6REm7JcOdvNb7mZHTwVaXGEYEZBIh9';
        $title = "dd";
        $body = "dd";
        sendNotification($title, $body, $token);

        return $chat;
    }

    public function unseenCatGet(Request $request)
    {
        $totalUnseen = 0;
        $meetingTotalUnseen = 0;

        if ($request->is_client) {
            $totalUnseen = DesignerChat::where('seller_id', $request->id)->where('seen_status', 0)->count();
            $meetingTotalUnseen = DesignerChat::where('seller_id', $request->id)->where('seen_status', 0)->where('meeting_id', $request->meeting_id)->count();
        } else {
            $totalUnseen = DesignerChat::where('customer_id', $request->id)->where('seen_status', 0)->count();
            $meetingTotalUnseen = DesignerChat::where('customer_id', $request->id)->where('seen_status', 0)->where('meeting_id', $request->meeting_id)->count();
        }

        $data = [
            'totalUnseen' => $totalUnseen,
            'meetingTotalUnseen' => $meetingTotalUnseen,
        ];
        return response()->json($data);

    }

}
