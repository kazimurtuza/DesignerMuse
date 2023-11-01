<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
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
            'title'=>$this->title,
            'code'=>$this->meetingInfo->id_no,
            'client_name'=>$this->client->name,
            'designer_name'=>$this->designer->name,
            'agreement_file'=>$this->agreement_file,
            'agreement_file_name'=>$this->agreement_file_name,
            'agreement_accepted'=>$this->agreement_accepted,
            'agreement_details'=>$this->agreement_details,
            'designer_project_comment'=>$this->designer_project_comment,
            'description'=>$this->description,
            'dateline'=>$this->dateline,
            'project_rate'=>$this->project_rate,
            'client_id'=>$this->client_id,
            'is_milestone'=>$this->is_milestone,
            'total_paid'=>$this->total_paid,
            'payment_status'=>$this->payment_status,
            'designer_id'=>$this->designer_id,
            'meeting_id'=>$this->meeting_id,
            'project_status'=>$this->project_status,
        ];
    }
}
