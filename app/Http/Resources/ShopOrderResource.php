<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ShopOrderResource extends JsonResource
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
            'shop_id'=>$this->shop_id,
            'order_id'=>$this->order_id,
            'invoice_id'=>$this->invoice_id,
            'order_details'=>OrderDetailsResource::collection($this->orderItems),
            'order_info'=>$this->orderInfo,
            'status'=>$this->status,
            'data'=>$this->data,
        ];
    }
}
