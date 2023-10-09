<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'shop_id',
        'order_id',
        'invoice_id',
        'status',
        'data',
    ];

    public function orderInfo(){
        return $this->belongsTo(Order::class,'order_id','id');
      }
      public function orderItems(){
        return $this->hasMany(OrderDetails::class,'shop_order_id','id');
      }

      public function shopInfo(){
          return $this->belongsTo(Shopkeeper::class,'shop_id','id');
      }
}
