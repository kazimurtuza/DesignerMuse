<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HowItWork extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'how_it_work_head_title_en',
        'how_it_work_head_title_ar',
        'how_it_work_short_description_en',
        'how_it_work_short_description_ar',
        'work_process_one_img',
        'work_process_one_title_en',
        'work_process_one_title_ar',
        'work_process_one_details_en',
        'work_process_one_details_ar',
        'work_process_two_img',
        'work_process_two_title_en',
        'work_process_two_title_ar',
        'work_process_two_details_en',
        'work_process_two_details_ar',
        'work_process_three_img',
        'work_process_three_title_en',
        'work_process_three_title_ar',
        'work_process_three_details_en',
        'work_process_three_details_ar',
        'work_process_four_img',
        'work_process_four_title_en',
        'work_process_four_title_ar',
        'work_process_four_details_en',
        'work_process_four_details_ar',
        'work_process_five_img',
        'work_process_five_title_en',
        'work_process_five_title_ar',
        'work_process_five_details_en',
        'work_process_five_details_ar',
        'work_process_six_img',
        'work_process_six_title_en',
        'work_process_six_title_ar',
        'work_process_six_details_en',
        'work_process_six_details_ar',
        'work_process_seven_img',
        'work_process_seven_title_en',
        'work_process_seven_title_ar',
        'work_process_seven_details_en',
        'work_process_seven_details_ar',
        'payment_left_img',
        'how_payment_work_one_en',
        'how_payment_work_one_ar',
        'how_payment_work_two_en',
        'how_payment_work_two_ar',
        'how_payment_work_three_en',
        'how_payment_work_three_ar',
        'how_payment_work_four_en',
        'how_payment_work_four_ar',
        'how_payment_work_five_en',
        'how_payment_work_five_ar',
        'faq_short_description_en',
        'faq_short_description_ar',
    ];
}
