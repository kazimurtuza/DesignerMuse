<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectDetailsResource extends JsonResource
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
            'agreement_details'=>$this->agreement_details,
            'agreement_file_name'=>$this->agreement_file_name,
            'designer_project_comment'=>$this->designer_project_comment,
            'agreement_file'=>$this->agreement_file,
            'agreement_accepted'=>$this->agreement_accepted,
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
            'milestone_list'=>$this->milestone,
            'review_rating'=>new DesignerReviewRatingResource($this->rating),
            'file_list'=>$this->fileList,
            'client_info'=>$this->client,
            'designer_info'=>$this->designer,
            'project_file_list'=>$this->fileList,
            'project_milestone_list'=>$this->milestone,
        ];
    }
}
