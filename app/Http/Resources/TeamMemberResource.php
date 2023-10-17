<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Session;

class TeamMemberResource extends JsonResource
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
                'name' => $this->name_en,
                'face_book' => $this->face_book,
                'twitter' => $this->twitter,
                'instagram' => $this->instagram,
                'about' => $this->about_en,
            ];
        } else {
            return [
                'id' => $this->id,
                'image' => $this->image,
                'name' => $this->name_ar,
                'face_book' => $this->face_book,
                'twitter' => $this->twitter,
                'instagram' => $this->instagram,
                'about' => $this->about_ar,

            ];

        }
    }
}
