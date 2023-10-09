<?php

namespace App\Http\Controllers\Api\Designer;

use App\Http\Controllers\Controller;
use App\Http\Resources\DesignerMeetingDateResource;
use App\Http\Resources\MeetingResource;
use App\Models\DesignerAppointmentList;
use App\Models\DesignerServiceTime;
use App\Models\TimeSlot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiDesignerMeetingController extends Controller
{
    public function meetingList(){
        $designerId = auth()->user()->id;
        return MeetingResource::collection(DesignerAppointmentList::where('designer_id',$designerId)->orderBy('id','desc')->paginate(10)) ;

    }
    public function meetingDateList(){
         $designerId = auth()->user()->id;
         return  DesignerMeetingDateResource::collection(DesignerServiceTime::with('bookedList')->where('designer_id',$designerId)->orderBy('id','desc')->paginate(10));
    }

    public function meetingTimeEdit(Request $request){
        $scheduleDetail= DesignerServiceTime::find($request->service_time_id);
        $designerId=auth()->user()->id;
        $bookedSlot=DesignerAppointmentList::where('designer_id',$designerId)->where('service_time_id',$request->service_time_id)->pluck('time_slot_id');
        $activeTimeRange= $scheduleDetail->slot_duration;
        $activeSlot=$scheduleDetail->active_slot_id;
        $slotList=TimeSlot::where('duration_minutes',$scheduleDetail->slot_duration)->get();

        $data = [
            'status' => 200,
            'message' => '',
            'all_slot_list' => $slotList,
            'active_slot_id' => json_decode($activeSlot),
            'booked_slot_list' => $bookedSlot,
        ];
        return response()->json($data);

    }

    public function meetingTimeUpdate(Request $request)
    {
        $scheduleUpdate= DesignerServiceTime::find($request->schedule_slot_id);
        $scheduleUpdate->active_slot_id= $request->selected_slot;
        $scheduleUpdate->save();

        $data = [
            'status' => 200,
            'message' => 'Successfully Updated Time slot',
            'data'=>$scheduleUpdate
        ];
        return response()->json($data);
    }

}
