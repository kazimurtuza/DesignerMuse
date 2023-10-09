<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArWishList extends Model
{
    use HasFactory;
    public function productInfo(){
        return $this->belongsTo(ShopProduct::class,'product_id','id');
    }
    public function productImg(){
        return $this->hasMany(ShopProductImage::class,'product_id','product_id');
    }
}
