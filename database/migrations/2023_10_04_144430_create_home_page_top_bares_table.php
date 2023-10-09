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
        Schema::create('home_page_top_bares', function (Blueprint $table) {
            $table->id();
            $table->string('top_bar_title_en');
            $table->string('top_bar_title_ar');
            $table->text('top_bar_body_en');
            $table->text('top_bar_body_ar');
            $table->text('top_bar_body_ar');
            $table->string('learn_more_en');
            $table->string('learn_more_ar');
            $table->string('learn_more_link');
            $table->string('get_it_now_en');
            $table->string('get_it_now_ar');
            $table->string('get_it_now_link');
            $table->string('is_active')->default(1);
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
        Schema::dropIfExists('home_page_top_bares');
    }
};
