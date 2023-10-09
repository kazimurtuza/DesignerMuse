<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'shop_id',
        'customer_id',
        'invoice_id',
        'total_price',
        'shipping_price',
        'total_discount',
        'total_payable',
        'pay_by',
        'card',
        'trn_id',
        'card_last_digits',
        'first_name',
        'last_name',
        'address',
        'city',
        'zip_code',
        'payment_status',
        'status',
        'date',
    ];

    function cunstomerInfo()
    {
        return $this->belongsTo(User::class, 'customer_id', 'id');
    }
    function shopOrder(){
        return $this->hasMany(ShopOrder::class, 'order_id', 'id');
    }
    function orderDetails(){
        return $this->hasMany(OrderDetails::class, 'order_id', 'id');
    }

}
