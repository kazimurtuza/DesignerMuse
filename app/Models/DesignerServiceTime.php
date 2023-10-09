<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesignerServiceTime extends Model
{
    use HasFactory;

    function bookedList(){
        return $this->hasMany(DesignerAppointmentList::class,'service_time_id','id');
    }
}
