<?php

namespace App\Http\Controllers\Api\Designer;

use App\Http\Controllers\Controller;
use App\Models\Designer;
use App\Models\DesignerPortfolio;
use App\Models\DesignerProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;

class ApiDesignerController extends Controller
{
    public function designerDetails()
    {
        $designerId = auth()->user()->id;

        $designer = Designer::with('portfolioList')->with('profile')->with('ratingList')->find($designerId);
        return response()->json($designer);
    }

    public function profileDataStore(Request $request)
    {
        $userId = auth()->user()->id;
        $designer=DesignerProfile::where('designer_id',$userId)->first();
        $profile = new DesignerProfile();
        if ($designer) {
            $profile=$designer;
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
        $data = [
            'status' => 200,
            'message' => 'Successfully Updated',
            'data' => $profile,
        ];
        return response()->json($data);
    }


    public function profileProjectAdd(Request $request)
    {
        $userId = auth()->user()->id;
        $project = new DesignerPortfolio();
        $project->designer_id = $userId;
        if ($request->project_img) {
            $project->img = $this->imageSave($request->project_img);
        }
        $project->title = $request->title;
        $project->description = $request->details;
        $project->save();
        $data = [
            'status' => 200,
            'message' => 'Successfully Added portfolio',
            'data' => $project,
        ];
        return response()->json($data);
    }


    public function projectItemEdit(Request $request)
    {

//        img

        $designer = DesignerPortfolio::find($request->project_id);
        $designer->title = $request->title;
        if ($request->project_img) {
            $designer->img = $this->imageSave($request->project_img);
        }
        $designer->description = $request->details;
        $designer->save();
        $data = [
            'status' => 200,
            'message' => 'Successfully Added portfolio',
            'data' => $designer,
        ];
        return response()->json($data);
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
}
