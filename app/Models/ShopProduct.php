<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class ShopProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'is_variant',
        'category_id',
        'discount',
        'discount_type',
        'price',
        'cost',
        'avg_rating',
        'max_price',
        'min_price',
        'description',
    ];
    protected $appends = array('is_wish_add', 'is_ar_add');

    public function getIsWishAddAttribute()
    {
        $user = Auth::user();
        if ($user) {
            $userId = $user->id;
            $find = ProductWishList::where('product_id', $this->id)->where('user_id', $userId)->first();
            if ($find) {
                return 1;
            } else {
                return 0;
            }
        } else {
            return 0;
        }
    }

    public function getIsArAddAttribute()
    {
        $user = Auth::user();
        if ($user) {
            $userId = $user->id;
            $find = ArWishList::where('product_id', $this->id)->where('user_id', $userId)->first();
            if ($find) {
                return 1;
            } else {
                return 0;
            }
        } else {
            return 0;
        }
    }


    public function colorVariant()
    {
        return $this->hasMany(ProductColorVariant::class, 'product_id', 'id');
    }

    public function productImage()
    {
        return $this->hasMany(ShopProductImage::class, 'product_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'category_id', 'id');
    }


}
