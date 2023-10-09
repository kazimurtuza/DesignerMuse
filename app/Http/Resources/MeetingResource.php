<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MeetingResource extends JsonResource
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
            "id_no" => $this->id_no,
            "service_time_id" => $this->service_time_id,
            "time_details" => $this->timeInfo,
            "designer_info" => $this->designer,
            "client" => $this->client,
            "designer_id" => $this->designer_id,
            "appointment_date" => $this->appointment_date,
            "time_slot_id" => $this->time_slot_id,
            "appointment_type" => $this->appointment_type,
            "payment_status" => $this->payment_status,
            "payment_id" => $this->payment_id,
            "status" => $this->status,
            "created_at" => $this->created_at,
        ];
    }
}
