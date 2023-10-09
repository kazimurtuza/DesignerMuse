<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DesignerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
           'id'=>$this->id,
           'id_no'=>$this->id_no,
           'name'=>$this->name,
           'rating'=>$this->rating,
           'email'=>$this->email,
           'status'=>$this->status,
           'is_deleted'=>$this->is_deleted,
           'is_authentic'=>$this->is_authentic,
           'profile'=>$this->profile,
        ];
    }
}
