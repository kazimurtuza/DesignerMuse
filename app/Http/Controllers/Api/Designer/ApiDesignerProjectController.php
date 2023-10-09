<?php

namespace App\Http\Controllers\Api\Designer;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectDetailsResource;
use App\Models\DesignerAppointmentList;
use App\Models\DesignerProject;
use App\Models\DesignerProjectFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpMyAdmin\Config\Validator;

class ApiDesignerProjectController extends Controller
{
    public function projectList()
    {
        $designerId = auth()->user()->id;
        $project = DesignerProject::where('designer_id', $designerId)->orderBy('id', 'desc')->paginate();
        return response()->json($project);
    }

    public function designerProjectDetails(Request $request)
    {
        $designerId = auth()->user()->id;
        $project = new ProjectDetailsResource(DesignerProject::where('designer_id', $designerId)->where('id', $request->project_id)->first());
        return response()->json($project);


    }
    public function userProjectDetails(Request $request)
    {
        $generalUser = auth()->user()->id;
        return new ProjectDetailsResource(DesignerProject::where('client_id', $generalUser)->where('id', $request->project_id)->first());

    }


    public function addProjectFile(Request $request){

        $request->validate([
            'project_file' => ['required'],
        ]);

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
                $fileData->is_client_upload = $request->user_type;
            }
            $fileData->save();

            $data = [
                'status' => 200,
                'message' => 'Successfully Added portfolio',
                'data' => $fileData,
            ];
            return response()->json($data);
        }


    }

    function projectUpdateStatus(Request $request)
    {
           $designerId = auth()->user()->id;
        if ($request->status == 1 || $request->status == 3) {
             $project = DesignerProject::find($request->project_id);
             if($project->designer_id!=$designerId){
                 $data = [
                     'status' => 400,
                     'message' => 'This is not your project',
                 ];
                 return response()->json($data);
             }

            $project->project_status =$request->status;
            $project->save();

            $data = [
                'status' => 200,
                'message' => 'Successfully Project Status Updated',
            ];
            return response()->json($data);
        }else{
            $data = [
                'status' => 400,
                'message' => 'you have no access',
            ];
            return response()->json($data);

        }


    }



}
