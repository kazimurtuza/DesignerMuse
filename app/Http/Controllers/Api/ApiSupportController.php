<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;

class ApiSupportController extends Controller
{
    public function sendMessage(Request $request){
        $suppoert=new Support();
        $suppoert->sender_name=$request->sender_name;
        $suppoert->sender_email=$request->sender_email;
        $suppoert->sender_message=$request->sender_message;
        $suppoert->save();
        $data = [
            'status' => 200,
            'message' => 'Successfully message send',
        ];
        return response()->json($data);
    }
}
