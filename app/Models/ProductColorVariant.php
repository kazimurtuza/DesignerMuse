<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductColorVariant extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'color_id',
        'price',
    ];

    function colorCode(){
        return $this->belongsTo(ProductColor::class,'color_id','id');
    }
}
