<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminSetting;
use App\Models\Designer;
use App\Models\HomePage;
use App\Models\HomePageTopBare;
use App\Models\HowItWork;
use App\Models\PrivacyAndTerm;
use App\Models\Shopkeeper;
use Illuminate\Http\Request;
use Image;

class SettingController extends Controller
{
    public function chargeRateSetting()
    {
        $settingInfo = AdminSetting::first();
        return view('admin.setting.chargeRateSetting')->with(compact('settingInfo'));
    }

    public function chargeRateStore(Request $request)
    {
        $info = AdminSetting::first();
        if ($info) {
            $setting = $info;
        } else {
            $setting = new AdminSetting();
        }
        $setting->project_charge_rate = $request->project_charge;
        $setting->meeting_charge_rate = $request->meeting_charge;
        $setting->product_charge_rate = $request->product_sell_charge;
        $setting->save();
        return redirect()->back()->with('success', 'successfully global charge rate saved');
    }

    public function homeSetting()
    {
        $settings = HomePage::first();
        $topBarList = HomePageTopBare::orderBy('id', 'desc')->paginate(3);
        return view('admin.setting.homeSetting')->with(compact('settings', 'topBarList'));
    }

    public function homeSettingTopBarStore(Request $request)
    {

        $image = $request->image;
        $page = new HomePageTopBare();
        $page->top_bar_title_en = $request->top_bar_title_en;
        $page->top_bar_body_en = $request->top_bar_body_en;
        $page->top_bar_title_ar = $request->top_bar_title_ar;
        $page->top_bar_body_ar = $request->top_bar_body_ar;


        $page->learn_more_en = $request->learn_more_en;
        $page->learn_more_ar = $request->learn_more_ar;
        $page->learn_more_link = $request->learn_more_link;
        $page->get_it_now_en = $request->get_it_now_en;
        $page->get_it_now_ar = $request->get_it_now_ar;
        $page->get_it_now_link = $request->get_it_now_link;

        $page->is_active = 1;
        if ($image) {
            $extension = $file = $request->file('image')->getClientOriginalName();
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
            $page->img = $db_media_img_path;
        }
        $page->save();
        return redirect()->back()->with('success', 'successfully  saved data');

    }

    public function homeSettingStore(Request $request)
    {
        $isdata = HomePage::first();
        if ($isdata) {
            $home = $isdata;
        } else {
            $home = new HomePage();
        }
        $home->get_it_now_txt_en = $request->get_it_now_txt_en;
        $home->get_it_now_txt_ar = $request->get_it_now_txt_ar;
        $home->get_it_now_txt_link = $request->get_it_now_txt_link;

        $home->how_work_step_one_en = $request->how_work_step_one_en;
        $home->how_work_step_one_ar = $request->how_work_step_one_ar;
        $home->how_work_step_two_en = $request->how_work_step_two_en;
        $home->how_work_step_two_ar = $request->how_work_step_two_ar;
        $home->how_work_step_three_en = $request->how_work_step_three_en;
        $home->how_work_step_three_ar = $request->how_work_step_three_ar;
        $home->save();
        return redirect()->back()->with('success', 'successfully Saved');
    }

    public function featureSetting(Request $request)
    {
        $isdata = HomePage::first();
        if ($isdata) {
            $home = $isdata;
        } else {
            $home = new HomePage();
        }
        $home->features_details_en = $request->features_details_en;
        $home->features_details_ar = $request->features_details_ar;
        $home->feature_one_title_en = $request->feature_one_title_en;
        $home->feature_one_title_ar = $request->feature_one_title_ar;
        $home->feature_one_details_en = $request->feature_one_details_en;
        $home->feature_one_details_ar = $request->feature_one_details_ar;
        $home->feature_two_title_en = $request->feature_two_title_en;
        $home->feature_two_title_ar = $request->feature_two_title_ar;
        $home->feature_two_details_en = $request->feature_two_details_en;
        $home->feature_two_details_ar = $request->feature_two_details_ar;
        $home->feature_three_title_en = $request->feature_three_title_en;
        $home->feature_three_title_ar = $request->feature_three_title_ar;
        $home->feature_three_details_en = $request->feature_three_details_en;
        $home->feature_three_details_ar = $request->feature_three_details_ar;
        $home->save();
        return redirect()->back()->with('success', 'successfully Saved');

    }

    public function aboutPhoneWeb(Request $request)
    {
        $isdata = HomePage::first();
        if ($isdata) {
            $home = $isdata;
        } else {
            $home = new HomePage();
        }
        $home->headline_phone_tab_en = $request->headline_phone_tab_en;
        $home->headline_phone_tab_ar = $request->headline_phone_tab_ar;
        $home->phone_tab_details_en = $request->phone_tab_details_en;
        $home->phone_tab_details_ar = $request->phone_tab_details_ar;
        $home->web_tab_details_en = $request->web_tab_details_en;
        $home->web_tab_details_ar = $request->web_tab_details_ar;
        $home->headline_web_tab_en = $request->headline_web_tab_en;
        $home->headline_web_tab_ar = $request->headline_web_tab_ar;
        $home->save();
        return redirect()->back()->with('success', 'successfully Saved');
    }

    public function lookingFor(Request $request)
    {
        $isdata = HomePage::first();
        if ($isdata) {
            $home = $isdata;
        } else {
            $home = new HomePage();
        }
        $home->looking_for_en = $request->looking_for_en;
        $home->looking_for_ar = $request->looking_for_ar;
        $home->designer_card_title_en = $request->designer_card_title_en;
        $home->designer_card_title_ar = $request->designer_card_title_ar;
        if ($request->designer_card_img) {
            $home->designer_card_img = $this->imageStore($request->designer_card_img, $request->file('designer_card_img')->getClientOriginalName());
        }
        $home->shop_card_title_en = $request->shop_card_title_en;
        $home->shop_card_title_ar = $request->shop_card_title_ar;
        if ($request->shop_card_img) {
            $home->shop_card_img = $this->imageStore($request->shop_card_img, $request->file('shop_card_img')->getClientOriginalName());
        }
        $home->explaining_video_title_en = $request->explaining_video_title_en;
        $home->explaining_video_title_ar = $request->explaining_video_title_ar;
        if ($request->explaining_video_cover_img) {
            $home->explaining_video_cover_img = $this->imageStore($request->explaining_video_cover_img, $request->file('explaining_video_cover_img')->getClientOriginalName());
        }
        $home->explaining_video_link = $request->explaining_video_link;
        $home->save();
        return redirect()->back()->with('success', 'successfully Saved');

    }




    public function howWork(Request $request)
    {
        $howWork=HowItWork::where('type',$request->type)->first();
        return view('admin.setting.howWeWorks')->with(compact('howWork'));
    }

    public function privacyCondition()
    {
        $info = PrivacyAndTerm::first();
        return view('admin.setting.privacyCondition')->with(compact('info'));
    }

    public function privacyConditionStore(Request $request)
    {
        $info = PrivacyAndTerm::first();
        if ($info) {
            $info = $info;
        } else {
            $info = new PrivacyAndTerm();
        }
        $info->privacy_en = $request->privacy_en;
        $info->privacy_ar = $request->privacy_ar;
        $info->condition_en = $request->condition_en;
        $info->condition_ar = $request->condition_ar;
        $info->save();
        return redirect()->back()->with('success', 'Successfully Saved');
    }

    public function howWorkStore(Request $request)
    {
        $request->validate([
            'how_it_work_head_title_en' => 'required',
            'how_it_work_head_title_ar' => 'required',
            'how_it_work_short_description_en' => 'required',
            'how_it_work_short_description_ar' => 'required',
            'work_process_one_img' =>'mimes:jpeg,png,jpg,gif,svg|max:1048',
            'work_process_two_img' => 'mimes:jpeg,png,jpg,gif,svg|max:1048',
            'work_process_three_img' => 'mimes:jpeg,png,jpg,gif,svg|max:1048',
            'work_process_four_img' => 'mimes:jpeg,png,jpg,gif,svg|max:1048',
            'work_process_five_img' => 'mimes:jpeg,png,jpg,gif,svg|max:1048',
            'work_process_six_img' => 'mimes:jpeg,png,jpg,gif,svg|max:1048',
        ]);
        $isStored=HowItWork::where('type',$request->type)->first();
        if($isStored){
            $howHork=$isStored;
        }else{
            $howHork = new HowItWork();
        }
        $howHork->type = $request->type;
        $howHork->how_it_work_head_title_en = $request->how_it_work_head_title_en;
        $howHork->how_it_work_head_title_ar = $request->how_it_work_head_title_ar;
        $howHork->how_it_work_short_description_en = $request->how_it_work_short_description_en;
        $howHork->how_it_work_short_description_ar = $request->how_it_work_short_description_ar;
        if ($request->work_process_one_img) {
            $howHork->work_process_one_img = $this->imageStore($request->work_process_one_img, $request->file('work_process_one_img')->getClientOriginalName());
        }
        $howHork->work_process_one_title_en = $request->work_process_one_title_en;
        $howHork->work_process_one_title_ar = $request->work_process_one_title_ar;
        $howHork->work_process_one_details_en = $request->work_process_one_details_en;
        $howHork->work_process_one_details_ar = $request->work_process_one_details_ar;
        if ($request->work_process_two_img) {
            $howHork->work_process_two_img = $this->imageStore($request->work_process_two_img, $request->file('work_process_two_img')->getClientOriginalName());
        }
        $howHork->work_process_two_title_en = $request->work_process_two_title_en;
        $howHork->work_process_two_title_ar = $request->work_process_two_title_ar;
        $howHork->work_process_two_details_en = $request->work_process_two_details_en;
        $howHork->work_process_two_details_ar = $request->work_process_two_details_ar;
        if ($request->work_process_three_img) {
            $howHork->work_process_three_img = $this->imageStore($request->work_process_three_img, $request->file('work_process_three_img')->getClientOriginalName());
        }
        $howHork->work_process_three_title_en = $request->work_process_three_title_en;
        $howHork->work_process_three_title_ar = $request->work_process_three_title_ar;
        $howHork->work_process_three_details_en = $request->work_process_three_details_en;
        $howHork->work_process_three_details_ar = $request->work_process_three_details_ar;
        if ($request->work_process_four_img) {
            $howHork->work_process_four_img = $this->imageStore($request->work_process_four_img, $request->file('work_process_four_img')->getClientOriginalName());
        }
        $howHork->work_process_four_title_en = $request->work_process_four_title_en;
        $howHork->work_process_four_title_ar = $request->work_process_four_title_ar;
        $howHork->work_process_four_details_en = $request->work_process_four_details_en;
        $howHork->work_process_four_details_ar = $request->work_process_four_details_ar;
        if ($request->work_process_five_img) {
            $howHork->work_process_five_img = $this->imageStore($request->designer_card_img, $request->file('designer_card_img')->getClientOriginalName());
        }
        $howHork->work_process_five_title_en = $request->work_process_five_title_en;
        $howHork->work_process_five_title_ar = $request->work_process_five_title_ar;
        $howHork->work_process_five_details_en = $request->work_process_five_details_en;
        $howHork->work_process_five_details_ar = $request->work_process_five_details_ar;
        if ($request->work_process_six_img) {
            $howHork->work_process_six_img = $this->imageStore($request->work_process_six_img, $request->file('work_process_six_img')->getClientOriginalName());
        }
        $howHork->work_process_six_title_en = $request->work_process_six_title_en;
        $howHork->work_process_six_title_ar = $request->work_process_six_title_ar;
        $howHork->work_process_six_details_en = $request->work_process_six_details_en;
        $howHork->work_process_six_details_ar = $request->work_process_six_details_ar;
        if ($request->work_process_seven_img) {
            $howHork->work_process_seven_img = $this->imageStore($request->work_process_seven_img, $request->file('work_process_seven_img')->getClientOriginalName());
        }
        $howHork->work_process_seven_title_en = $request->work_process_seven_title_en;
        $howHork->work_process_seven_title_ar = $request->work_process_seven_title_ar;
        $howHork->work_process_seven_details_en = $request->work_process_seven_details_en;
        $howHork->work_process_seven_details_ar = $request->work_process_seven_details_ar;
        if ($request->payment_left_img) {
            $howHork->payment_left_img = $this->imageStore($request->payment_left_img, $request->file('payment_left_img')->getClientOriginalName());
        }
        $howHork->how_payment_work_one_en = $request->how_payment_work_one_en;
        $howHork->how_payment_work_one_ar = $request->how_payment_work_one_ar;
        $howHork->how_payment_work_two_en = $request->how_payment_work_two_en;
        $howHork->how_payment_work_two_ar = $request->how_payment_work_two_ar;
        $howHork->how_payment_work_three_en = $request->how_payment_work_three_en;
        $howHork->how_payment_work_three_ar = $request->how_payment_work_three_ar;
        $howHork->how_payment_work_four_en = $request->how_payment_work_four_en;
        $howHork->how_payment_work_four_ar = $request->how_payment_work_four_ar;
        $howHork->how_payment_work_five_en = $request->how_payment_work_five_en;
        $howHork->how_payment_work_five_ar = $request->how_payment_work_five_ar;
        $howHork->faq_short_description_en = $request->faq_short_description_en;
        $howHork->faq_short_description_ar = $request->faq_short_description_ar;
        $howHork->save();

        return redirect()->back()->with('success','Successfully Saved');
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
