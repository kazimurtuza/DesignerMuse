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
        Schema::create('designer_rating_reviews', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('designer_id');
            $table->bigInteger('customer_id');
            $table->bigInteger('project_id')->nullable();
            $table->bigInteger('meeting_id')->nullable();
            $table->integer('rating');
            $table->text('project_name')->nullable();
            $table->text('meeting_name')->nullable();
            $table->text('review')->nullable();
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
        Schema::dropIfExists('designer_rating_reviews');
    }
};
