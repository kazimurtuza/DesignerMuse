<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    use HasFactory;

    function designerInfo(){
        return $this->belongsTo(Designer::class,'designer_id','id');
    }
    function shopKeeper(){
        return $this->belongsTo(Shopkeeper::class,'shopkeeper_id','id');
    }
}
