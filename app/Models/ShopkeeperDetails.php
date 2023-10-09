<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopkeeperDetails extends Model
{
    use HasFactory;
    protected $fillable=[
        	 'user_id',
             'name',
             'portfolio',
             'top_img',
             'profile_img',
    ];
}
