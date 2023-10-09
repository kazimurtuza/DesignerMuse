<?php

namespace App\Http\Controllers\GeneralUser;

use App\Http\Controllers\Controller;
use App\Models\DesignerAppointmentList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MeetingController extends Controller
{
    public function meetingList(){
         $userId=  Auth::user()->id;
         $meetingList= DesignerAppointmentList::with('timeInfo')->with('designer')->where('payment_status',1)->where('user_id',$userId)->where('status',0)->orderBy('id','desc')->paginate(10);

        return view('frontend.customer.meeting.myMeetingList')->with(compact('meetingList'));
    }
    public function designerMeetingOutcomeUpdate(Request $request){

        $meetingInfo=  DesignerAppointmentList::find($request->meeting_id);
        $meetingInfo->status=$request->status;
        $meetingInfo->save();
        return redirect()->back()->with('success','successfully updated meeting status');
    }

    public function oldMeetingList(){
        $userId=  Auth::user()->id;
        $meetingList= DesignerAppointmentList::with('timeInfo')->where('payment_status',1)->where('user_id',$userId)->whereNotIn('status',[0])->orderBy('id','desc')->paginate(10);

        return view('frontend.customer.meeting.myOldMeetingList')->with(compact('meetingList'));
    }
}
