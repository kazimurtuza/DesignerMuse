<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Designer;
use App\Models\DesignerAppointmentList;
use App\Models\DesignerChat;
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
        return view('chat.allChatList')->with(compact('is_sender_client','userId', 'designerId', 'chatList', 'meetingId', 'designerName', 'userName', 'meetingNo', 'meetingList'));


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
        return $chat;
    }

   public function aboutOus(){
       return view('frontend.page.aboutOus');
   }
   public function howWeWork(){
       return view('frontend.page.howItWork');
   }
}
