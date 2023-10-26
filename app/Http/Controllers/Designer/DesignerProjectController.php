<?php

namespace App\Http\Controllers\Designer;

use App\Http\Controllers\Controller;
use App\Models\DesignerProject;
use App\Models\DesignerProjectFile;
use App\Models\DesignerProjectMilestonePayment;
use App\Models\Notification;
use App\Models\NotificationDeviceToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DesignerProjectController extends Controller
{
    function myProjectList(Request $request)
    {
        $userId = $designer = Auth::guard('designer')->user()->id;
        $projectList = DesignerProject::where('designer_id', $userId)->orderBy('id','desc')->paginate(10);
        return view('designer.project.designerProjectList')->with(compact('projectList'));
    }

    public function projectAgreementSet(Request $request){
        $projectInfo= DesignerProject::find($request->id);
        $projectFile=DesignerProjectFile::where('project_id',$request->id)->first();

        return view('designer.project.projectAgreementSet')->with(compact('projectInfo','projectFile'));

    }

    function projectDetails(Request $request)
    {
        $projectinfo = DesignerProject::find($request->project_id);
        $totalPayed = DesignerProjectMilestonePayment::where('project_id', $request->project_id)->where('status', 1)->sum('amount');

        return view('designer.project.designerProjectDetails')->with(compact('projectinfo', 'totalPayed'));
    }

    function projectUpdateStatus(Request $request)
    {
        if ($request->status == 1 || $request->status == 3) {
            $project = DesignerProject::find($request->project_id);
            $project->project_status = $request->status;
            $project->save();
        }
        return redirect()->back()->with('success','successfully status updated');
    }

    public function addProjectFile(Request $request){

        if(!empty($request->project_file)){
            $fileData=new DesignerProjectFile();
            $fileData->project_id=$request->project_id;
            if (!empty($request->project_file)) {
                $file = $request->file('project_file');
                $extension = $file->getClientOriginalExtension();
                $realFilename=$file->getClientOriginalName();
                $filename = time() . '.' . $extension;
                $file->move(public_path('uploads/project'), $filename);
                $fileData->file = 'public/uploads/project/' . $filename;
                $fileData->file_name = $realFilename;
                $fileData->is_client_upload = 1;
            }
            $fileData->save();
        }
        return redirect()->back()->with('success','Successfully file Added');

    }

    public function projectAgreementStore(Request $request){
        $request->validate([
            'agreement_file'=>'required',
            'project_id'=>'required',
            'project_price'=>'required',
        ]);
        if(!empty($request->agreement_file)){
           $info= $fileData=DesignerProject::find($request->project_id);
            $fileData->agreement_accepted=2;
            $fileData->designer_project_comment=$request->designer_project_comment;
            $fileData->project_rate=$request->project_price;
            if (!empty($request->agreement_file)) {
                $file = $request->file('agreement_file');
                $extension = $file->getClientOriginalExtension();
                $realFilename=$file->getClientOriginalName();
                $filename = time() . '.' . $extension;
                $file->move(public_path('uploads/project'), $filename);
                $fileData->agreement_file = 'public/uploads/project/' . $filename;
                $fileData->agreement_file_name = $realFilename;
            }
            $fileData->save();
        }

        $token = NotificationDeviceToken::where('user_type','generalUser')->where('user_id', $info->client_id)->pluck('token');
        $title ="Designer Muse Project Agreement Created".' ID:#'.$info->meetingInfo->id_no;
        $body = $info->title." Agreement Created";

        sendNotification($title, $body, $token);

        Notification::create(['user_type' => 2, 'user_id' => $info->client_id, 'title' => $title, 'body' => $body]);


        return redirect()->intended('designer/project/list')->with('success','Successfully Project Agreement Saved');


    }
}
