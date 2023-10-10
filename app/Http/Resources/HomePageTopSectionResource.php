<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Session;

class HomePageTopSectionResource extends JsonResource
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
                'top_bar_title' => $this->top_bar_title_en,
                'top_bar_body' => $this->top_bar_body_en,
                'learn_more' => $this->learn_more_en,
                'get_it_now' => $this->get_it_now_en,
                'learn_more_link' => $this->learn_more_link,
                'get_it_now_link' => $this->get_it_now_link,
                'img' => $this->img,
                'is_active' => $this->is_active,
            ];
        } else {
            return [
                'id' => $this->id,
                'get_it_now_txt' => $this->get_it_now_txt_en,
                'get_it_now_txt_link' => $this->get_it_now_txt_link,
                'top_bar_title' => $this->top_bar_title_en,
                'top_bar_body' => $this->top_bar_body_en,
                'learn_more' => $this->learn_more_en,
                'get_it_now' => $this->get_it_now_en,
                'learn_more_link' => $this->learn_more_link,
                'get_it_now_link' => $this->get_it_now_link,
                'img' => $this->img,
                'is_active' => $this->is_active,
            ];

        }
    }
}
