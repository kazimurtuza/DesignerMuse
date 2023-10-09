<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ShopkeeperFinancialReportResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
            'shop_id'=>$this->shop_id,
            'order_id'=>$this->order_id,
            'invoice_id'=>$this->invoice_id,
            'status'=>$this->status,
            'data'=>$this->data,
            'data'=>$this->data,
            'Trn'=>$this->orderInfo->trn_id,
            'total_paid'=>$this->orderItems->sum('total_payable'),
            'service_charge'=>$this->orderItems->sum('service_charge'),
            'receivable_amount'=>$this->orderItems->sum('total_payable')-$this->orderItems->sum('service_charge'),
        ];
    }
}
