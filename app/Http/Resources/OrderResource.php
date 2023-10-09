<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "customer_id" => $this->customer_id,
            "payment_id" => $this->payment_id,
            "total_price" => $this->total_price,
            "shipping_price" => $this->shipping_price,
            "total_discount" => $this->total_discount,
            "total_payable" => $this->total_payable,
            "invoice_id" => $this->invoice_id,
            "pay_by" => $this->pay_by,
            "card" => $this->card,
            "trn_id" => $this->trn_id,
            "card_last_digits" => $this->card_last_digits,
            "first_name" => $this->first_name,
            "last_name" => $this->last_name,
            "address" => $this->address,
            "city" => $this->city,
            "state" => $this->state,
            "zip_code" => $this->zip_code,
            "payment_status" => $this->payment_status,
            "status" => $this->status,
            "oreder_details" =>OrderDetailsResource::collection($this->orderDetails),

        ];
    }
}
