<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesignerAppointmentList extends Model
{
    use HasFactory;

    function timeInfo(){
        return $this->belongsTo(TimeSlot::class,'time_slot_id','id');
    }

    function designer(){
        return $this->belongsTo(Designer::class,'designer_id','id');
    }
    function client(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    function clientUnseenMessage(){
        return $this->hasMany(DesignerChat::class,'meeting_id','id')
                     ->where('is_sender_client',0)
                     ->where('seen_status',0);
    }
    function designerUnseenMessage(){
        return $this->hasMany(DesignerChat::class,'meeting_id','id')
                     ->where('is_sender_client',1)
                     ->where('seen_status',0);
    }




}
