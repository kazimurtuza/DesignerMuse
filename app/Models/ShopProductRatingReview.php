<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopProductRatingReview extends Model
{
    use HasFactory;

    function clientInfo(){
        return $this->belongsTo(User::class,'customer_id','id');
    }

    function productInfo(){
        return $this->belongsTo(ShopProduct::class,'product_id','id');
    }
}
