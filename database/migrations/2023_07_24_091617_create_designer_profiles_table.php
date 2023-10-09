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
        Schema::create('designer_profiles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('designer_id');
            $table->string('profile_img')->nullable();
            $table->string('designer_img')->nullable();
            $table->string('cover_img')->nullable();
            $table->string('job_title')->nullable();
            $table->text('about_me')->nullable();
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('designer_profiles');
    }
};
