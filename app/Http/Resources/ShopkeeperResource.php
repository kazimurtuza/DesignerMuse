<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ShopkeeperResource extends JsonResource
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
            "name" => $this->name,
            "email" => $this->email,
            "is_authentic" => $this->is_authentic,
            "is_approved" => $this->is_approved,
            "id_no" => $this->id_no,
            "avg_rating" => $this->avg_rating,
            "is_deleted" => $this->is_deleted,
            'shop_info'=>$this->details,
        ];
    }
}
