<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DesignerMeetingDateResource extends JsonResource
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
            "designer_id" => $this->designer_id,
            "date" => $this->date,
            "slot_duration" => $this->slot_duration,
            "active_slot_id" =>$this->active_slot_id,
            "total_booked"=>$this->bookedList->count(),
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
            "booked_list" => $this->booked_list,
        ];
    }
}
