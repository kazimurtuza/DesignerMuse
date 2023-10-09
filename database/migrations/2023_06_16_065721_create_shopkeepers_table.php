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
        Schema::create('shopkeepers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('user_type')->default('shopKeeper');
            $table->string('email');
            $table->decimal('avg_rating',11,2)->nullable();
            $table->tinyInteger('is_authentic')->default(0)->nullable();
            $table->tinyInteger('is_approved')->default(0)->nullable();
            $table->text('otp_code')->nullable();
            $table->dateTime('otp_created_at')->nullable();

            $table->decimal('project_charge_rate',11,2)->nullable();
            $table->decimal('meeting_charge_rate',11,2)->nullable();
            $table->decimal('product_charge_rate',11,2)->nullable();

            $table->text('android_device_token')->nullable();
            $table->text('ios_device_token')->nullable();
            $table->text('web_device_token')->nullable();


            $table->string('id_no')->nullable();
            $table->tinyInteger('status')->default(1)->comment('1=active');
            $table->tinyInteger('is_deleted')->default(0)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('approved_data')->nullable();
            $table->string('password');
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
        Schema::dropIfExists('shopkeepers');
    }
};
