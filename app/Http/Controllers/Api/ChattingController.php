<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DesignerChat;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ChattingController extends Controller
{
    public function chatMessageStore(Request $request)
    {
        $chat = new DesignerChat();
        $chat->customer_id = $request->customer_id;
        $chat->seller_id = $request->designer_id;
        $chat->meeting_id = $request->meeting_id;
        $chat->message = $request->message;
        $chat->is_sender_client = $request->is_sender_client;
        $chat->date_time = Carbon::now();
        $chat->date = Carbon::now();
        $chat->created_at = Carbon::now();
        $chat->save();
        return $chat;
    }
    public function getChatData(Request $request){
       return DesignerChat::where('meeting_id',$request->meeting_id)->get();

    }
}
