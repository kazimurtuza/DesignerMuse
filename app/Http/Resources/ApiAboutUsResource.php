<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ApiAboutUsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        $language=$request->lang?$request->lang:'ar';

        if ($language == 'en') {
            return [
                'about_top_title' => $this->about_top_title_en,
                'about_top_details' => $this->about_top_details_en,
                'about_top_back_ground_img' => $this->about_top_back_ground_img,
                'about_top_font_img' => $this->about_top_font_img,
                'about_title' => $this->about_title_en,
                'about_ous' => $this->about_ous_en,
                'our_approach_head_txt' => $this->our_approach_head_txt_en,
                'our_approach_one_img' => $this->our_approach_one_img,
                'our_approach_one_title' => $this->our_approach_one_title_en,
                'our_approach_one_details' => $this->our_approach_one_details_en,
                'our_approach_left_img' => $this->our_approach_left_img,
                'our_approach_two_img' => $this->our_approach_two_img,
                'our_approach_two_title' => $this->our_approach_tow_title_en,
                'our_approach_two_details' => $this->our_approach_tow_details_en,
                'our_approach_three_img' => $this->our_approach_three_img,
                'our_approach_three_title' => $this->our_approach_three_title_en,
                'our_approach_three_details' => $this->our_approach_three_details_en,
                'our_approach_four_img' => $this->our_approach_four_img,
                'our_approach_four_title' => $this->our_approach_four_title_en,
                'our_approach_four_details' => $this->our_approach_four_details_en,
            ];
        } else {
            return [
                'about_top_title' => $this->about_top_title_ar,
                'about_top_details' => $this->about_top_details_ar,
                'about_top_back_ground_img' => $this->about_top_back_ground_img,
                'about_top_font_img' => $this->about_top_font_img,
                'about_title' => $this->about_title_ar,
                'about_ous' => $this->about_ous_ar,
                'our_approach_head_txt' => $this->our_approach_head_txt_ar,
                'our_approach_one_img' => $this->our_approach_one_img,
                'our_approach_one_title' => $this->our_approach_one_title_ar,
                'our_approach_one_details' => $this->our_approach_one_details_ar,
                'our_approach_left_img' => $this->our_approach_left_img,
                'our_approach_two_img' => $this->our_approach_two_img,
                'our_approach_two_title' => $this->our_approach_tow_title_ar,
                'our_approach_two_details' => $this->our_approach_tow_details_ar,
                'our_approach_three_img' => $this->our_approach_three_img,
                'our_approach_three_title' => $this->our_approach_three_title_ar,
                'our_approach_three_details' => $this->our_approach_three_details_ar,
                'our_approach_four_img' => $this->our_approach_four_img,
                'our_approach_four_title' => $this->our_approach_four_title_ar,
                'our_approach_four_details' => $this->our_approach_four_details_ar,
            ];

        }
    }
}
