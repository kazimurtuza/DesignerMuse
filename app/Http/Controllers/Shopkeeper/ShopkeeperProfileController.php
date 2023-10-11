<?php

namespace App\Http\Controllers\Shopkeeper;

use App\Http\Controllers\Controller;
use App\Models\ShopkeeperDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\Array_;
use Image;

class ShopkeeperProfileController extends Controller
{
    public function profileSetting(){
        $common_data = new Array_();
        $common_data->title =languageGet()=='en'?'Profile Info':'معلومات الشخصي';

        $user_id=Auth::guard('shopkeeper')->user()->id;
        $shopDetails=ShopkeeperDetails::where('user_id',$user_id)->first();

        return view('shopkeeper.user.user_profile')->with(compact('shopDetails','common_data'));
    }

    public function profileStore(Request $request){
        $user_id=Auth::guard('shopkeeper')->user()->id;
        $findUser=ShopkeeperDetails::where('user_id',$user_id)->first();
        if($findUser){
            $userUpdate=$findUser;
            $userUpdate->name=$request->name;
            $userUpdate->portfolio=$request->description;
            if($request->topbar_img){
                $userUpdate->top_img=$this->coverPhoto($request->topbar_img);
            }
            if($request->profile_img){
                $userUpdate->profile_img=$this->imageSave($request->profile_img);
            }
            $userUpdate->save();
        }
        else{
            $profile=new ShopkeeperDetails();
            $profile->user_id=Auth::guard('shopkeeper')->user()->id;
            $profile->name=$request->name;
            $profile->portfolio=$request->description;
            if($request->topbar_img){
                $profile->top_img=$this->coverPhoto($request->topbar_img);
            }
            if($request->profile_img){
                $profile->profile_img=$this->imageSave($request->profile_img);
            }
            $profile->save();
        }
        $msg = languageGet() == 'en' ? 'Successfully profile updated' : 'تم تحديث الملف الشخصي بنجاح';
        return redirect()->back()->with('success',$msg);
    }


    public function imageSave($image)
    {
        if (isset($image) && ($image != '') && ($image != null)) {
            $ext = explode('/', mime_content_type($image))[1];
            $logo_url = "profile_images-" . time() . rand(1000, 9999) . '.' . $ext;
            $logo_directory = getUploadPath() . '/profile_images/';
            $filePath = $logo_directory;
            $logo_path = $filePath . $logo_url;
            $db_media_img_path = 'storage/profile_images/' . $logo_url;

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


    public function coverPhoto($image)
    {
        if (isset($image) && ($image != '') && ($image != null)) {
            $ext = explode('/', mime_content_type($image))[1];
            $logo_url = "profile_images-" . time() . rand(1000, 9999) . '.' . $ext;
            $logo_directory = getUploadPath() . '/profile_images/';
            $filePath = $logo_directory;
            $logo_path = $filePath . $logo_url;
            $db_media_img_path = 'storage/profile_images/' . $logo_url;

            if (!file_exists($filePath)) {
                mkdir($filePath, 666, true);
            }
            $logo_image = Image::make(file_get_contents($image))->resize(700, 200);
            $logo_image->brightness(8);
            $logo_image->contrast(11);
            $logo_image->sharpen(5);
            $logo_image->encode('webp', 70);
            $logo_image->save($logo_path);

            return $db_media_img_path;

        }

    }
}
