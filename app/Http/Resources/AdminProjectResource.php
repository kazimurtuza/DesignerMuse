<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Session;

class AdminProjectResource extends JsonResource
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
        if($request->lang){
            $language=$request->lang?$request->lang:'ar';
        }
        if ($language == 'en') {
            return [
                'id' => $this->id,
                'image' => $this->image,
                'title' => $this->title_en,
                'about' => $this->about_en,
                'status' => $this->status,
            ];
        } else {
            return [
                'id' => $this->id,
                'image' => $this->image,
                'title' => $this->title_ar,
                'about' => $this->about_ar,
                'status' => $this->status,

            ];
        }
    }
}
