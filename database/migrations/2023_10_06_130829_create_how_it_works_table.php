<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('how_it_works', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('type')->comment('1=shop,2=designer,3=admin');
            $table->text('how_it_work_head_title_en');
            $table->text('how_it_work_head_title_ar');
            $table->text('how_it_work_short_description_en');
            $table->text('how_it_work_short_description_ar');
            $table->text('work_process_one_img')->nullable();
            $table->text('work_process_one_title_en')->nullable();
            $table->text('work_process_one_title_ar')->nullable();
            $table->text('work_process_one_details_en')->nullable();
            $table->text('work_process_one_details_ar')->nullable();
            $table->text('work_process_two_img')->nullable();
            $table->text('work_process_two_title_en')->nullable();
            $table->text('work_process_two_title_ar')->nullable();
            $table->text('work_process_two_details_en')->nullable();
            $table->text('work_process_two_details_ar')->nullable();
            $table->text('work_process_three_img')->nullable();
            $table->text('work_process_three_title_en')->nullable();
            $table->text('work_process_three_title_ar')->nullable();
            $table->text('work_process_three_details_en')->nullable();
            $table->text('work_process_three_details_ar')->nullable();
            $table->text('work_process_four_img')->nullable();
            $table->text('work_process_four_title_en')->nullable();
            $table->text('work_process_four_title_ar')->nullable();
            $table->text('work_process_four_details_en')->nullable();
            $table->text('work_process_four_details_ar')->nullable();
            $table->text('work_process_five_img')->nullable();
            $table->text('work_process_five_title_en')->nullable();
            $table->text('work_process_five_title_ar')->nullable();
            $table->text('work_process_five_details_en')->nullable();
            $table->text('work_process_five_details_ar')->nullable();
            $table->text('work_process_six_img')->nullable();
            $table->text('work_process_six_title_en')->nullable();
            $table->text('work_process_six_title_ar')->nullable();
            $table->text('work_process_six_details_en')->nullable();
            $table->text('work_process_six_details_ar')->nullable();
            $table->text('work_process_seven_img')->nullable();
            $table->text('work_process_seven_title_en')->nullable();
            $table->text('work_process_seven_title_ar')->nullable();
            $table->text('work_process_seven_details_en')->nullable();
            $table->text('work_process_seven_details_ar')->nullable();
            $table->text('payment_left_img')->nullable();
            $table->text('how_payment_work_one_en')->nullable();
            $table->text('how_payment_work_one_ar')->nullable();
            $table->text('how_payment_work_two_en')->nullable();
            $table->text('how_payment_work_two_ar')->nullable();
            $table->text('how_payment_work_three_en')->nullable();
            $table->text('how_payment_work_three_ar')->nullable();
            $table->text('how_payment_work_four_en')->nullable();
            $table->text('how_payment_work_four_ar')->nullable();
            $table->text('how_payment_work_five_en')->nullable();
            $table->text('how_payment_work_five_ar')->nullable();
            $table->text('faq_short_description_en')->nullable();
            $table->text('faq_short_description_ar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('how_it_works');
    }
};
