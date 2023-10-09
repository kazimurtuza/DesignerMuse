<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'shop_order_id',
        'shop_id',
        'product_id',
        'unit_price',
        'unit_cost',
        'quantity',
        'discount',
        'color_variant_id',
        'total_payable',
    ];

    function productInfo(){
        return $this->belongsTo(ShopProduct::class,'product_id','id');
    }
}
