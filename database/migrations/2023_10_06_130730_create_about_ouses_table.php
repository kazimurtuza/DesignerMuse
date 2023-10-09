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
        Schema::create('about_ouses', function (Blueprint $table) {
            $table->id();
            $table->text('about_top_title_en');
            $table->text('about_top_title_ar');
            $table->text('about_top_details_en');
            $table->text('about_top_details_ar');
            $table->text('about_top_back_ground_img');
            $table->text('about_top_font_img');
            $table->text('about_title_en');
            $table->text('about_title_ar');
            $table->text('about_ous_en');
            $table->text('about_ous_ar');
            $table->text('our_approach_head_txt_en');
            $table->text('our_approach_head_txt_ar');

            $table->text('our_approach_one_img')->nullable();
            $table->text('our_approach_one_title_en')->nullable();
            $table->text('our_approach_one_title_ar')->nullable();
            $table->text('our_approach_one_details_en')->nullable();
            $table->text('our_approach_one_details_ar')->nullable();
            $table->text('our_approach_left_img')->nullable();
            $table->text('our_approach_two_img')->nullable();
            $table->text('our_approach_tow_title_en')->nullable();
            $table->text('our_approach_tow_title_ar')->nullable();
            $table->text('our_approach_tow_details_en')->nullable();
            $table->text('our_approach_tow_details_ar')->nullable();
            $table->text('our_approach_three_img')->nullable();
            $table->text('our_approach_three_title_en')->nullable();
            $table->text('our_approach_three_title_ar')->nullable();
            $table->text('our_approach_three_details_en')->nullable();
            $table->text('our_approach_three_details_ar')->nullable();
            $table->text('our_approach_four_img')->nullable();
            $table->text('our_approach_four_title_en')->nullable();
            $table->text('our_approach_four_title_ar')->nullable();
            $table->text('our_approach_four_details_en')->nullable();
            $table->text('our_approach_four_details_ar')->nullable();

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
        Schema::dropIfExists('about_ouses');
    }
};
