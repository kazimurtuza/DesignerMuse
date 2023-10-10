<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Session;

class HomePageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $language = Session::get('language');
        if ($language == 'en') {
            return [
                'id' => $this->id,
                'get_it_now_txt' => $this->get_it_now_txt_en,
                'get_it_now_txt_link' => $this->get_it_now_txt_link,
                'how_work_step_one' => $this->how_work_step_one_en,
                'how_work_step_two' => $this->how_work_step_two_en,
                'how_work_step_three' => $this->how_work_step_three_en,
                'headline_phone_tab' => $this->headline_phone_tab_en,
                'phone_tab_details' => $this->phone_tab_details_en,
                'web_tab_details' => $this->web_tab_details_en,
                'headline_web_tab' => $this->headline_web_tab_en,
                'features' => $this->features_en,
                'features_details' => $this->features_details_en,
                'feature_one_title' => $this->feature_one_title_en,
                'feature_one_details' => $this->feature_one_details_en,
                'feature_two_title' => $this->feature_two_title_en,
                'feature_two_details' => $this->feature_two_details_en,
                'feature_three_title' => $this->feature_three_title_en,
                'feature_three_details' => $this->feature_three_details_en,
                'looking_for' => $this->looking_for_en,
                'designer_card_title' => $this->designer_card_title_en,
                'designer_card_img' => $this->designer_card_img,
                'shop_card_title' => $this->shop_card_title_en,
                'shop_card_img' => $this->shop_card_img,
                'explaining_video_title' => $this->explaining_video_title_en,
                'explaining_video_cover_img' => $this->explaining_video_cover_img,
                'explaining_video_link' => $this->explaining_video_link,
            ];
        } else {
            return [
                'id' => $this->id,
                'get_it_now_txt' => $this->get_it_now_txt_ar,
                'get_it_now_txt_link' => $this->get_it_now_txt_link,
                'how_work_step_one' => $this->how_work_step_one_ar,
                'how_work_step_two' => $this->how_work_step_two_ar,
                'how_work_step_three' => $this->how_work_step_three_ar,
                'headline_phone_tab' => $this->headline_phone_tab_ar,
                'phone_tab_details' => $this->phone_tab_details_ar,
                'web_tab_details' => $this->web_tab_details_en,
                'headline_web_tab' => $this->headline_web_tab_ar,
                'features' => $this->features_ar,
                'features_details' => $this->features_details_ar,
                'feature_one_title' => $this->feature_one_title_ar,
                'feature_one_details' => $this->feature_one_details_ar,
                'feature_two_title' => $this->feature_two_title_ar,
                'feature_two_details' => $this->feature_two_details_ar,
                'feature_three_title' => $this->feature_three_title_ar,
                'feature_three_details' => $this->feature_three_details_ar,
                'looking_for' => $this->looking_for_ar,
                'designer_card_title' => $this->designer_card_title_ar,
                'designer_card_img' => $this->designer_card_img,
                'shop_card_title' => $this->shop_card_title_ar,
                'shop_card_img' => $this->shop_card_img,
                'explaining_video_title' => $this->explaining_video_title_ar,
                'explaining_video_cover_img' => $this->explaining_video_cover_img,
                'explaining_video_link' => $this->explaining_video_link,
            ];

        }
    }
}
