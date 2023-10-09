<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductRatingReviewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'product_id'=>$this->product_id,
            'rating'=>$this->rating,
            'review'=>$this->review,
            'date'=>date('d-m-y',strtotime($this->created_at)),
            'client_name'=>$this->clientInfo->name,
            'product_name'=>$this->productInfo->name,

        ];
    }
}
