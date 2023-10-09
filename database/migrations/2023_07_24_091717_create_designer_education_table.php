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
        Schema::create('designer_education', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('designer_id');
            $table->string('institution_name');
            $table->date('pass_date');
            $table->string('graduation_name');
            $table->string('certificate_file')->nullable();
            $table->string('details')->nullable();
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
        Schema::dropIfExists('designer_education');
    }
};
