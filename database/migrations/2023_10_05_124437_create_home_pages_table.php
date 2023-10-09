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
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();
            $table->text('get_it_now_txt_en')->nullable();
            $table->text('get_it_now_txt_ar')->nullable();
            $table->text('get_it_now_txt_link')->nullable();

            $table->text('how_work_step_one_en')->nullable();
            $table->text('how_work_step_one_ar')->nullable();
            $table->text('how_work_step_two_en')->nullable();
            $table->text('how_work_step_two_ar')->nullable();
            $table->text('how_work_step_three_en')->nullable();
            $table->text('how_work_step_three_ar')->nullable();

            $table->text('headline_phone_tab_en')->nullable();
            $table->text('headline_phone_tab_ar')->nullable();
            $table->text('phone_tab_details_en')->nullable();
            $table->text('phone_tab_details_ar')->nullable();
            $table->text('web_tab_details_en')->nullable();
            $table->text('web_tab_details_ar')->nullable();
            $table->text('headline_web_tab_en')->nullable();
            $table->text('headline_web_tab_ar')->nullable();
            $table->text('features_en')->nullable();
            $table->text('features_ar')->nullable();
            $table->text('features_details_en')->nullable();
            $table->text('features_details_ar')->nullable();
            $table->string('feature_one_title_en')->nullable();
            $table->string('feature_one_title_ar')->nullable();
            $table->text('feature_one_details_en')->nullable();
            $table->text('feature_one_details_ar')->nullable();
            $table->string('feature_two_title_en')->nullable();
            $table->string('feature_two_title_ar')->nullable();
            $table->text('feature_two_details_en')->nullable();
            $table->text('feature_two_details_ar')->nullable();
            $table->string('feature_three_title_en')->nullable();
            $table->string('feature_three_title_ar')->nullable();
            $table->text('feature_three_details_en')->nullable();
            $table->text('feature_three_details_ar')->nullable();
            $table->string('looking_for_en')->nullable();
            $table->string('looking_for_ar')->nullable();
            $table->string('designer_card_title_en')->nullable();
            $table->string('designer_card_title_ar')->nullable();
            $table->string('designer_card_img')->nullable();
            $table->text('shop_card_title_en')->nullable();
            $table->text('shop_card_title_ar')->nullable();
            $table->string('shop_card_img')->nullable();
            $table->string('explaining_video_title_en')->nullable();
            $table->string('explaining_video_title_ar')->nullable();
            $table->string('explaining_video_cover_img')->nullable();
            $table->string('explaining_video_link')->nullable();
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
        Schema::dropIfExists('home_pages');
    }
};
