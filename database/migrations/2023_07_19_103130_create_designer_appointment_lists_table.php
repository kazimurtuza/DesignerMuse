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
            Schema::create('designer_appointment_lists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->text('id_no')->nullable();
            $table->unsignedBigInteger('designer_id');
            $table->unsignedBigInteger('service_time_id')->nullable();
            $table->date('appointment_date');
            $table->unsignedBigInteger('time_slot_id');
            $table->string('appointment_type');
            $table->tinyInteger('payment_status')->default(0)->comment('0=pending,1=completed');
            $table->unsignedBigInteger('payment_id');
            $table->tinyInteger('status')->default(0)->comment('0=pending,1=Consultation only  2=start project 3=project Completed');
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
        Schema::dropIfExists('designer_appointment_lists');
    }
};
