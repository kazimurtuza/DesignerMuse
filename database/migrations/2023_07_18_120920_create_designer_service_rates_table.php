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
        Schema::create('designer_service_rates', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('designer_id');
            $table->decimal('call_rate',11,2)->default(0);
            $table->decimal('video_rate',11,2)->default(0);
            $table->decimal('online_rate',11,2)->default(0);
            $table->string('active_time_schedule')->default(15);
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
        Schema::dropIfExists('designer_service_rates');
    }
};
