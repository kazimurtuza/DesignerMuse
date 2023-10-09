<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutOus;
use App\Models\AdminProjectList;
use App\Models\TeamMemberList;
use Illuminate\Http\Request;
use Image;

class AboutOusController extends Controller
{

    public function aboutOus()
    {
        $about = AboutOus::first();
        $project = AdminProjectList::paginate(5);
        $member = TeamMemberList::paginate(5);

        return view('admin.setting.aboutOusSetting')->with(compact('about','project','member'));
    }

    public function createProject(Request $request)
    {
        $project = new AdminProjectList();
        if ($request->image) {
            $project->image = $this->imageStore($request->image, $request->file('image')->getClientOriginalName());
        }
        $project->title_en = $request->title_en;
        $project->title_ar = $request->title_ar;
        $project->about_en = $request->about_en;
        $project->about_ar = $request->about_ar;
        $project->status = 1;
        $project->save();
        return redirect()->back()->with('success', 'Successfully Saved');
    }

    public function createMember(Request $request)
    {
        $member = new TeamMemberList();
        if ($request->image) {
            $member->image = $this->imageStore($request->image, $request->file('image')->getClientOriginalName());
        }
        $member->name_en = $request->name_en;
        $member->name_ar = $request->name_ar;
        $member->face_book = $request->face_book;
        $member->twitter = $request->twitter;
        $member->instagram = $request->instagram;
        $member->about_en = $request->about_en;
        $member->about_ar = $request->about_ar;
        $member->status = 1;
        $member->save();
        return redirect()->back()->with('success', 'Successfully Saved');
    }


    public function aboutOusStore(Request $request)
    {

        $request->validate([
            'about_top_title_en'=>'required',
            'about_top_title_ar'=>'required',
            'about_top_details_en'=>'required',
            'about_top_details_ar'=>'required',
//            'about_top_back_ground_img'=>'required',
//            'about_top_font_img'=>'required',
            'about_title_en'=>'required',
            'about_title_ar'=>'required',
            'about_ous_en'=>'required',
            'about_ous_ar'=>'required',
            'our_approach_head_txt_en'=>'required',
            'our_approach_head_txt_ar'=>'required',



        ]);
        $find = AboutOus::find(1);
        if ($find) {
            $aboutOus = $find;
        } else {
            $aboutOus = new AboutOus();
        }
        $aboutOus->about_top_title_en = $request->about_top_title_en;
        $aboutOus->about_top_title_ar = $request->about_top_title_ar;
        $aboutOus->about_top_details_en = $request->about_top_details_en;
        $aboutOus->about_top_details_ar = $request->about_top_details_ar;
        if ($request->about_top_back_ground_img) {
            $aboutOus->about_top_back_ground_img = $this->imageStore($request->about_top_back_ground_img, $request->file('about_top_back_ground_img')->getClientOriginalName());
        }
        if ($request->about_top_font_img) {
            $aboutOus->about_top_font_img = $this->imageStore($request->about_top_font_img, $request->file('about_top_font_img')->getClientOriginalName());
        }
        $aboutOus->about_title_en = $request->about_title_en;
        $aboutOus->about_title_ar = $request->about_title_ar;
        $aboutOus->about_ous_en = $request->about_ous_en;
        $aboutOus->about_ous_ar = $request->about_ous_ar;
        $aboutOus->our_approach_head_txt_en = $request->our_approach_head_txt_en;
        $aboutOus->our_approach_head_txt_ar = $request->our_approach_head_txt_ar;
        if ($request->our_approach_one_img) {
            $aboutOus->our_approach_one_img = $this->imageStore($request->our_approach_one_img, $request->file('our_approach_one_img')->getClientOriginalName());
        }
        $aboutOus->our_approach_one_title_en = $request->our_approach_one_title_en;
        $aboutOus->our_approach_one_title_ar = $request->our_approach_one_title_ar;
        $aboutOus->our_approach_one_details_en = $request->our_approach_one_details_en;
        $aboutOus->our_approach_one_details_ar = $request->our_approach_one_details_ar;
        $aboutOus->our_approach_left_img = $request->our_approach_left_img;
        if ($request->our_approach_left_img) {
            $aboutOus->our_approach_left_img = $this->imageStore($request->our_approach_left_img, $request->file('our_approach_left_img')->getClientOriginalName());
        }
        if ($request->our_approach_two_img) {
            $aboutOus->our_approach_two_img = $this->imageStore($request->our_approach_two_img, $request->file('our_approach_two_img')->getClientOriginalName());
        }
        $aboutOus->our_approach_tow_title_en = $request->our_approach_tow_title_en;
        $aboutOus->our_approach_tow_title_ar = $request->our_approach_tow_title_ar;
        $aboutOus->our_approach_tow_details_en = $request->our_approach_tow_details_en;
        $aboutOus->our_approach_tow_details_ar = $request->our_approach_tow_details_ar;
        if ($request->our_approach_three_img) {
            $aboutOus->our_approach_three_img = $this->imageStore($request->our_approach_three_img, $request->file('our_approach_three_img')->getClientOriginalName());
        }
        $aboutOus->our_approach_three_title_en = $request->our_approach_three_title_en;
        $aboutOus->our_approach_three_title_ar = $request->our_approach_three_title_ar;
        $aboutOus->our_approach_three_details_en = $request->our_approach_three_details_en;
        $aboutOus->our_approach_three_details_ar = $request->our_approach_three_details_ar;

        if ($request->our_approach_four_img) {
            $aboutOus->our_approach_four_img = $this->imageStore($request->our_approach_four_img, $request->file('our_approach_four_img')->getClientOriginalName());
        }
        $aboutOus->our_approach_four_title_en = $request->our_approach_four_title_en;
        $aboutOus->our_approach_four_title_ar = $request->our_approach_four_title_ar;
        $aboutOus->our_approach_four_details_en = $request->our_approach_four_details_en;
        $aboutOus->our_approach_four_details_ar = $request->our_approach_four_details_ar;

//        if ($request->our_approach_five_img) {
//            $aboutOus->our_approach_five_img = $this->imageStore($request->our_approach_five_img, $request->file('our_approach_five_img')->getClientOriginalName());
//        }
//        $aboutOus->our_approach_five_title_en = $request->our_approach_five_title_en;
//        $aboutOus->our_approach_five_title_ar = $request->our_approach_five_title_ar;
//        $aboutOus->our_approach_five_details_en = $request->our_approach_five_details_en;
//        $aboutOus->our_approach_five_details_ar = $request->our_approach_five_details_ar;
//
        $aboutOus->save();
        return redirect()->back()->with('success', 'Successfully Saved');
    }


    public function imageStore($image, $file)
    {
        if ($image) {
            $extension = $file;
            $ext = pathinfo($extension, PATHINFO_EXTENSION);
            $logo_url = "designer_images-" . time() . rand(1000, 9999) . '.' . $ext;
            $logo_directory = getUploadPath() . '/home_image/';
            $filePath = $logo_directory;
            $logo_path = $filePath . $logo_url;
            $db_media_img_path = 'storage/home_image/' . $logo_url;

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
