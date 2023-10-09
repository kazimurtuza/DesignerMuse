<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DesignerResource;
use App\Models\Designer;
use App\Models\DesignerAppointmentList;
use App\Models\DesignerPortfolio;
use App\Models\DesignerProfile;
use App\Models\DesignerProject;
use App\Models\DesignerRatingReview;
use App\Models\DesignerServiceRate;
use App\Models\DesignerServiceTime;
use App\Models\TimeSlot;
use Illuminate\Http\Request;

class FrontendDesignerController extends Controller
{
    public function designerList()
    {
        return  DesignerResource::collection(Designer::where('status', 1)->where('is_deleted',0)->orderBy('id', 'DESC')->paginate(10));
    }

    public function designerDetails(Request $request)
    {
         $designer =  Designer::with('profile')->find($request->designer_id);
        return response()->json($designer);
    }

    public  function  designerProject(Request $request){
        $projectList =  DesignerProject::where('designer_id',$request->designer_id)->paginate(10);
        return response()->json($projectList);
    }
    public  function  designerPortfolio(Request $request){
        $projectList =  DesignerPortfolio::where('designer_id',$request->designer_id)->paginate(10);
        return response()->json($projectList);
    }
    public  function  designerRatingList(Request $request){
        $rating =  DesignerRatingReview::where('designer_id',$request->designer_id)->with('customerInfo')->paginate(10);
        return response()->json($rating);

    }





    public function designerServiceRate(Request $request)
    {
        $designer = DesignerServiceRate::find($request->designer_id);
        return response()->json($designer);
    }
    public function designerActiveTimeSchedule(Request $request)
    {
        $designerTime = DesignerServiceTime::where('designer_id', $request->designer_id)->where('date', $request->date)->first();
        $timeSlotList = [];
        $bookedSlotList = [];
        if ($designerTime) {
            $timeSlotList = TimeSlot::where('duration_minutes', $designerTime->slot_duration)->get();
        }
        if (count($timeSlotList) > 0) {
            $bookedSlotList = DesignerAppointmentList::where('service_time_id', $designerTime->id)->where('payment_status',1)->pluck('time_slot_id');
        }
        $data = [
            'status' => 200,
            'message' => '',
            'all_slot_list' => $timeSlotList,
            'active_slot_id' => json_decode($designerTime->active_slot_id),
            'booked_slot_list' => $bookedSlotList,
            'service_time_id' => $designerTime->id,
        ];
        return response()->json($data);
    }
}
