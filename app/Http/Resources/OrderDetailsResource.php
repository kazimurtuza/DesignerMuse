<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderDetailsResource extends JsonResource
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
        "id" => $this->id,
        "order_id" => $this->order_id,
        "shop_order_id" => $this->shop_order_id,
        "shop_id" => $this->shop_id,
        "product_id" => $this->product_id,
        "unit_price" => $this->unit_price,
        "total_payable" => $this->total_payable,
        "unit_cost" => $this->unit_cost,
        "service_charge" => $this->service_charge,
        "quantity" => $this->quantity,
        "discount" => $this->discount,
        "shipping_price" => $this->shipping_price,
        "color_variant_id" => $this->color_variant_id,
        "status" => $this->status,
        "product_info"=> new ShopProductResource($this->productInfo),
    ];
    }
}
