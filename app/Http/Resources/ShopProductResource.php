<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ShopProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        $img=$this->productImage;
        if(count($img)>0){
            $imge=$img[0]->image;
        }else{
            $imge=null;
        }
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'name' => $this->name,
            'product_code' => $this->product_code,
            'is_variant' => $this->is_variant,
            'category_id' => $this->category_id,
            'ar_img' => $this->ar_img,
            'price' => $this->price,
            'shipping_cost' => $this->shipping_cost,
            'cost' => $this->cost,
            'is_wish_add'=>$this->is_wish_add,
            'is_ar_add'=>$this->is_ar_add,
            'avg_rating' => $this->avg_rating,
            'min_price' => $this->min_price,
            'max_price' => $this->max_price,
            'discount_type' => $this->discount_type,
            'discount' => $this->discount,
            'status' => $this->status,
            'product_view_img'=>$imge,
            'description' => $this->description,
            'measurement' => $this->measurement,
            'is_deleted' => $this->is_deleted,
            'product_variant' =>ColorVariantResource::collection($this->colorVariant) ,
            'product_image' => $this->productImage,
            'category_info' => $this->category,
        ];
    }
}
