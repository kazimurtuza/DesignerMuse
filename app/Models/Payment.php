<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'sector_type',
        'payment_for',
        'user_id',
        'designer_id',
        'shopkeeper_id',
        'shop_id',
        'meeting_id',
        'project_id',
        'project_milestone_id',
        'id_no',
        'total_amount',
        'trn_charge_amount',
        'service_charge_amount',
        'trn_id',
        'card_type',
        'date',
    ];

    function sednerInfo(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    function designerInfo(){
        return $this->belongsTo(DesignerProject::class,'designer_id','id');
    }
    function shopKeeperInfo(){
        return $this->belongsTo(Shopkeeper::class,'shopkeeper_id','id');
    }
}
