<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Session;

class ApiHowItWorkResource extends JsonResource
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
        if ($language=='en') {
            return [
                'type' => $this->type,
                'how_it_work_head_title' => $this->how_it_work_head_title_en,
                'how_it_work_short_description' => $this->how_it_work_short_description_en,
                'work_process_one_img' => $this->work_process_one_img,
                'work_process_one_title' => $this->work_process_one_title_en,
                'work_process_one_details' => $this->work_process_one_details_en,
                'work_process_two_img' => $this->work_process_two_img,
                'work_process_two_title' => $this->work_process_two_title_en,
                'work_process_two_details' => $this->work_process_two_details_en,
                'work_process_three_img' => $this->work_process_three_img,
                'work_process_three_title' => $this->work_process_three_title_en,
                'work_process_three_details' => $this->work_process_three_details_en,
                'work_process_four_img' => $this->work_process_four_img,
                'work_process_four_title' => $this->work_process_four_title_en,
                'work_process_four_details' => $this->work_process_four_details_en,
                'work_process_five_img' => $this->work_process_five_img,
                'work_process_five_title' => $this->work_process_five_title_en,
                'work_process_five_details' => $this->work_process_five_details_en,
                'work_process_six_img' => $this->work_process_six_img,
                'work_process_six_title' => $this->work_process_six_title_en,
                'work_process_six_details' => $this->work_process_six_details_en,
                'work_process_seven_img' => $this->work_process_seven_img,
                'work_process_seven_title' => $this->work_process_seven_title_en,
                'work_process_seven_details' => $this->work_process_seven_details_en,
                'payment_left_img' => $this->payment_left_img,
                'how_payment_work_one' => $this->how_payment_work_one_en,
                'how_payment_work_two' => $this->how_payment_work_two_en,
                'how_payment_work_three' => $this->how_payment_work_three_en,
                'how_payment_work_four' => $this->how_payment_work_four_en,
                'how_payment_work_five' => $this->how_payment_work_five_en,
                'faq_short_description' => $this->faq_short_description_en,
            ];
        } else {
            return [
                'type' => $this->type,
                'how_it_work_head_title' => $this->how_it_work_head_title_ar,
                'how_it_work_short_description' => $this->how_it_work_short_description_ar,
                'work_process_one_img' => $this->work_process_one_img,
                'work_process_one_title' => $this->work_process_one_title_ar,
                'work_process_one_details' => $this->work_process_one_details_ar,
                'work_process_two_img' => $this->work_process_two_img,
                'work_process_two_title' => $this->work_process_two_title_ar,
                'work_process_two_details' => $this->work_process_two_details_ar,
                'work_process_three_img' => $this->work_process_three_img,
                'work_process_three_title' => $this->work_process_three_title_ar,
                'work_process_three_details' => $this->work_process_three_details_ar,
                'work_process_four_img' => $this->work_process_four_img,
                'work_process_four_title' => $this->work_process_four_title_ar,
                'work_process_four_details' => $this->work_process_four_details_ar,
                'work_process_five_img' => $this->work_process_five_img,
                'work_process_five_title' => $this->work_process_five_title_ar,
                'work_process_five_details' => $this->work_process_five_details_ar,
                'work_process_six_img' => $this->work_process_six_img,
                'work_process_six_title' => $this->work_process_six_title_ar,
                'work_process_six_details' => $this->work_process_six_details_ar,
                'work_process_seven_img' => $this->work_process_seven_img,
                'work_process_seven_title' => $this->work_process_seven_title_ar,
                'work_process_seven_details' => $this->work_process_seven_details_ar,
                'payment_left_img' => $this->payment_left_img,
                'how_payment_work_one' => $this->how_payment_work_one_ar,
                'how_payment_work_two' => $this->how_payment_work_two_ar,
                'how_payment_work_three' => $this->how_payment_work_three_ar,
                'how_payment_work_four' => $this->how_payment_work_four_ar,
                'how_payment_work_five' => $this->how_payment_work_five_ar,
                'faq_short_description' => $this->faq_short_description_ar,
            ];

        }
    }
}
