<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesignerProfile extends Model
{
    use HasFactory;
    protected $fillable = [
        'designer_img',
        'designer_id',
        'profile_img',
        'designer_img',
        'cover_img',
        'job_title',
        'about_me',
        'status',
    ];
}
