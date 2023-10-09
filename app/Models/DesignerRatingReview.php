<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesignerRatingReview extends Model
{
    use HasFactory;

    function customerInfo(){
        return $this->belongsTo(User::class,'customer_id','id');
    }
}
