<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WishArListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $img='';
        if($this->productImg && count($this->productImg)>0 ){
            $img=$this->productImg[0]->image;
        }
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'product_id' => $this->product_id,
            'ar_img' => $this->ar_img,
            'product_details' => $this->productInfo,
            'product_images' =>$img,
        ];
    }
}
