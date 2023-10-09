<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Shopkeeper extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guard = 'shopkeeper';

    protected $fillable=[
        'name',
        'email',
        'is_authentic',
        'avg_rating',
        'is_approved',
        'approved_data',
        'password',
    ];

    public function details(){
        return $this->hasOne(ShopkeeperDetails::class,'user_id','id');
    }



    protected $hidden = [
        'password',
        'remember_token',
    ];


}


