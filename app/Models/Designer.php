<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Designer extends Authenticatable
{
    use HasFactory,HasApiTokens;
    protected $guard = 'designer';

    protected $fillable=[
        'name',
        'email',
        'is_authentic',
        'password',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function profile(){
        return $this->hasOne(DesignerProfile::class,'designer_id','id');
    }

   public function portfolioList(){
        return $this->hasMany(DesignerPortfolio::class,'designer_id','id');
    }

    public function ratingList(){
        return $this->hasMany(DesignerRatingReview::class,'designer_id','id');
    }

}
