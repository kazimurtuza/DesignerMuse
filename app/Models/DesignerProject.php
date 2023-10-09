<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesignerProject extends Model
{
    use HasFactory;


    function client(){
        return $this->belongsTo(User::class,'client_id','id');
    }
    function meetingInfo(){
        return $this->belongsTo(DesignerAppointmentList::class,'meeting_id','id');
    }
    function designer(){
        return $this->belongsTo(Designer::class,'designer_id','id');
    }
    function fileList(){
        return $this->hasMany(DesignerProjectFile::class,'project_id','id');
    }
    function  milestone(){
        return $this->hasMany(DesignerProjectMilestonePayment::class,'project_id','id');
    }
    function rating(){
        return $this->hasOne(DesignerRatingReview::class,'project_id','id');
    }

}
