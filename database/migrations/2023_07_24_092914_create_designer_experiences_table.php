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
        Schema::create('designer_experiences', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('designer_id');
            $table->string('title');
            $table->string('company_name');
            $table->date('start_date');
            $table->date('end_date');
            $table->text('responsibility');
            $table->tinyInteger('is_continue')->default(0);
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
        Schema::dropIfExists('designer_experiences');
    }
};
