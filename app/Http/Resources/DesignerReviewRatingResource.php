<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DesignerReviewRatingResource extends JsonResource
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
            'id' => $this->id,
             "designer_id"=>$this->designer_id,
             "project_name"=>$this->project_name,
             "meeting_name"=>$this->meeting_name,
             "customer_id"=>$this->customer_id,
             "customer_name"=>$this->customerInfo->name,
             "project_id"=>$this->project_id,
             "meeting_id"=>$this->meeting_id,
             "rating"=>	$this->rating,
             "review"=>$this->review,
        ];
    }
}
