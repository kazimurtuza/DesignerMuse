<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminSetting;
use App\Models\Designer;
use App\Models\DesignerAppointmentList;
use App\Models\DesignerProject;
use App\Models\Shopkeeper;
use Illuminate\Http\Request;

class AdminDesignerController extends Controller
{
  function designerList(){
      $designerList=Designer::where('is_deleted',0)->get();
      $settingInfo=AdminSetting::first();
      $projectRate=$settingInfo?$settingInfo->project_charge_rate:'';
      $meetingRate=$settingInfo?$settingInfo->meeting_charge_rate:'';
      return view('admin.designer.designerList')->with(compact('designerList','projectRate','meetingRate'));

  }
  function designerMeetingList(){
      $meetingList= DesignerAppointmentList::with('timeInfo')->where('payment_status',1)->orderBy('id','desc')->where('status',0)->get();

      return view('admin.designer.designerMeetingList')->with(compact('meetingList'));
  }
  function designerProjectList(){

      $projectList = DesignerProject::orderBy('id','desc')->where('project_status',0)->get();
      return view('admin.designer.designerProjectList')->with(compact('projectList'));
  }
  function designerOldMeetingList(){
      $meetingList= DesignerAppointmentList::with('timeInfo')->where('payment_status',1)->orderBy('id','desc')->where('status','!=',0)->get();

      return view('admin.designer.oldMeetingList')->with(compact('meetingList'));
  }
  function designerOldProjectList(){

      $projectList = DesignerProject::where('project_status','!=',0)->get();
      return view('admin.designer.oldProjectList')->with(compact('projectList'));
  }

    public function designerServiceUpdate(Request $request)
    {

        $designer = Designer::find($request->designer_id);
        if($request->meeting_rate){
            $designer->meeting_charge_rate = $request->meeting_rate;
        }
        if($request->project_rate){
            $designer->project_charge_rate = $request->project_rate;
        }

        $designer->save();
        return redirect()->back()->with('success', 'Successfully service rate updated');
    }
}
