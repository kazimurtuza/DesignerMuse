<?php

namespace App\Http\Controllers\Designer;

use App\Http\Controllers\Controller;
use App\Models\DesignerAppointmentList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DesignerMeetingController extends Controller
{
    public function meetingList(){
        $userId= $designer= Auth::guard('designer')->user()->id;
        $meetingList= DesignerAppointmentList::with('timeInfo')->where('designer_id',$userId)->where('payment_status',1)->orderBy('id','desc')->paginate(10);
        return view('designer.meeting.designerMeetingList')->with(compact('meetingList'));
    }
}
