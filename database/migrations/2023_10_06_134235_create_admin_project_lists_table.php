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
        Schema::create('admin_project_lists', function (Blueprint $table) {
            $table->id();
            $table->text('image');
            $table->string('title_en');
            $table->string('title_ar');
            $table->string('about_en');
            $table->string('about_ar');
            $table->string('status')->default(1);
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
        Schema::dropIfExists('admin_project_lists');
    }
};
