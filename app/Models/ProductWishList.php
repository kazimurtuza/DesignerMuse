<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductWishList extends Model
{
    use HasFactory;

    public function productInfo(){
        return $this->belongsTo(ShopProduct::class,'product_id','id');
    }
}
