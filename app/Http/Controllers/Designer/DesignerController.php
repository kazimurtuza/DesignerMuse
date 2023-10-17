<?php

namespace App\Http\Controllers\Designer;

use App\Http\Controllers\Controller;
use App\Models\DesignerEducation;
use App\Models\DesignerExperience;
use App\Models\DesignerPortfolio;
use App\Models\DesignerProfile;
use App\Models\DesignerRatingReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;

class DesignerController extends Controller
{
    public function designerDashboard()
    {
        return view('designer.index');
    }

    public function profileSetting()
    {

        $userId = $designer = Auth::guard('designer')->user()->id;
        $profile = DesignerProfile::where('designer_id', $userId)->first();
        $projects = DesignerPortfolio::where('designer_id', $userId)->paginate(6);
        $rateReview = DesignerRatingReview::where('designer_id', $userId)->orderBy('id','desc')->paginate(7);
        return view('designer.profile.profileSetting')->with(compact('profile', 'projects', 'rateReview'));
    }
    public function profileDataStore(Request $request)
    {
        $userId = $designer = Auth::guard('designer')->user()->id;
        $profile = new DesignerProfile();
        if ($request->designer_id) {
            $profile = DesignerProfile::find($request->designer_id);
        }
        $profile->designer_id = $userId;
        if ($request->designer_img) {
            $profile->designer_img = $this->imageSave($request->designer_img);
        }
        if ($request->profile64_img) {
            $profile->profile_img = $this->imageSave($request->profile64_img);
        }
        if ($request->cover64_img) {
            $profile->cover_img = $this->coverImg($request->cover64_img);
        }
        $profile->job_title = $request->job_title;
        $profile->about_me = $request->about_profile;
        $profile->education_exprience = $request->education_experience;
        $profile->save();
        return redirect()->back()->with('success', 'successfully profile create');
    }

    public function experienceStore(Request $request)
    {
        $userId = $designer = Auth::guard('designer')->user()->id;
        $designer = new DesignerExperience();
        $designer->designer_id = $userId;
        $designer->title = $request->job_title;
        $designer->company_name = $request->company_name;
        $designer->start_date = $request->start_date;
        $designer->end_date = $request->end_date;
        $designer->responsibility = $request->responsibility;
        $designer->is_continue = 0;
        $designer->save();
        return redirect()->back()->with('success', 'successfully experience Added');
    }

    public function educationStore(Request $request)
    {
        $userId = Auth::guard('designer')->user()->id;
        $education = new DesignerEducation();
        $education->designer_id = $userId;
        $education->pass_date = $request->pass_date;
        $education->institution_name = $request->institution;
        $education->graduation_name = $request->degree;
        $education->details = $request->description;
        $education->save();

        return redirect()->back()->with('success', 'successfully Education info Added');
    }


    public function profileProject(Request $request)
    {
        $userId = Auth::guard('designer')->user()->id;
        $project = new DesignerPortfolio();
        $project->designer_id = $userId;
        if ($request->project_img) {
            $project->img = $this->imageSave($request->project_img);
        }
        $project->title = $request->title;
        $project->description = $request->details;
        $project->save();
        return redirect()->back()->with('success', 'successfully Project  Added');
    }


    public function imageSave($image)
    {
        if (isset($image) && ($image != '') && ($image != null)) {
            $ext = explode('/', mime_content_type($image))[1];

            $logo_url = "designer_images-" . time() . rand(1000, 9999) . '.' . $ext;
            $logo_directory = getUploadPath() . '/designer_images/';
            $filePath = $logo_directory;
            $logo_path = $filePath . $logo_url;
            $db_media_img_path = 'storage/designer_images/' . $logo_url;

            if (!file_exists($filePath)) {
                mkdir($filePath, 666, true);
            }


            $logo_image = Image::make(file_get_contents($image))->resize(400, 400);
            $logo_image->brightness(8);
            $logo_image->contrast(11);
            $logo_image->sharpen(5);
            $logo_image->encode('webp', 70);
            $logo_image->save($logo_path);

            return $db_media_img_path;
        }

    }


    public function coverImg($image)
    {
        if (isset($image) && ($image != '') && ($image != null)) {
            $ext = explode('/', mime_content_type($image))[1];

            $logo_url = "designer_images-" . time() . rand(1000, 9999) . '.' . $ext;
            $logo_directory = getUploadPath() . '/designer_images/';
            $filePath = $logo_directory;
            $logo_path = $filePath . $logo_url;
            $db_media_img_path = 'storage/designer_images/' . $logo_url;

            if (!file_exists($filePath)) {
                mkdir($filePath, 666, true);
            }


            $logo_image = Image::make(file_get_contents($image));
            $logo_image->brightness(8);
            $logo_image->contrast(11);
            $logo_image->sharpen(5);
            $logo_image->encode('webp', 70);
            $logo_image->save($logo_path);

            return $db_media_img_path;
        }

    }

    public function getProjectInfo(Request $request)
    {
        $info = DesignerPortfolio::find($request->id);

        return view('designer.profile._edit_project')->with(compact('info'))->render();
    }

    public function getExperienceInfo(Request $request)
    {
        $info = DesignerExperience::find($request->id);
        return view('designer.profile._experience')->with(compact('info'))->render();
    }

    public function getEducationInfo(Request $request)
    {
        $info = DesignerEducation::find($request->id);
        return view('designer.profile._edit_education')->with(compact('info'))->render();
    }


    public function projectItemEdit(Request $request)
    {
//        img
        $designer = DesignerPortfolio::find($request->project_id);
        $designer->title = $request->title;
        $designer->description = $request->details;
        $designer->save();
        return redirect()->back()->with('success', 'successfully updated project');
    }

    public function experienceInfoEdit(Request $request)
    {
        $designer = DesignerExperience::find($request->id);
        $designer->title = $request->job_title;
        $designer->company_name = $request->company_name;
        $designer->start_date = $request->start_date;
        $designer->end_date = $request->end_date;
        $designer->responsibility = $request->responsibility;
        $designer->save();
        return redirect()->back()->with('success', 'successfully experience Added');
    }

    public function educationUpdate(Request $request)
    {
        $education = DesignerEducation::find($request->id);
        $education->pass_date = $request->pass_date;
        $education->institution_name = $request->institution;
        $education->graduation_name = $request->degree;
        $education->details = $request->description;
        $education->save();
        return redirect()->back()->with('success', 'successfully Education Info Updated');
    }


}
