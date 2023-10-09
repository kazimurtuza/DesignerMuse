<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePageTopBare extends Model
{
    use HasFactory;
    protected $fillable=[
        'top_bar_title_en',
        'top_bar_title_ar',
        'top_bar_body_en',
        'top_bar_body_ar',
        'img',
        'is_active',
    ];
}
