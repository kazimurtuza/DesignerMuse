<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PopularProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return  new ShopProductResource($this->productInfo);
//        return [
//            "product_info"=> new ShopProductResource($this->productInfo),
//            'total_sell'=>$this->total_sell,
//        ];
    }
}
