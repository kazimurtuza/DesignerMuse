<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPassword;
use App\Mail\SupportMail;
use App\Models\Support;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class SupportController extends Controller
{
    public function supportMessageSend(Request $request){
       $suppoert=new Support();
       $suppoert->sender_name=$request->sender_name;
       $suppoert->sender_email=$request->sender_email;
       $suppoert->sender_message=$request->sender_message;
       $suppoert->save();


       return redirect()->back()->with('success','Successfully Message send');
    }

    public function supportReply(Request $request){
        $support=new Support();
        $support->sender_name=$request->name;
        $support->sender_email=$request->email;
        $support->sender_message=$request->message;
        $support->support_id=$request->id;
        $support->is_replied=2;
        $support->replied_by=
        $support->save();

        $info=Support::find($request->id);
        $info->is_replied=1;
        $info->save();

        $details = [
            'name' =>$request->name ,
            'email' => $request->email,
            'message' => $request->message,
        ];

        Mail::to($request->email)->send(new SupportMail($details));

        return redirect()->back()->with('success','Successfully Mail send');
    }

    public function supportList(){
        $supportList= Support::orderBy('id','desc')->whereNot('is_replied',2)->get();

        return view('admin.supportList')->with(compact('supportList'));
    }

    public function supportDetails(Request $request){
         $support=Support::find($request->id);
         $replyList=Support::where('support_id',$request->id)->orderBy('id','desc')->get();
        return view('admin.supportDetails')->with(compact('support','replyList'));
    }
}
