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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('country_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('user_type')->default('generalUser');
            $table->bigInteger('id_no');
            $table->text('otp_code')->nullable();
            $table->dateTime('otp_created_at')->nullable();
            $table->string('email')->unique();
            $table->string('is_authentic')->default(0)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->text('android_device_token')->nullable();
            $table->text('ios_device_token')->nullable();
            $table->text('web_device_token')->nullable();
            $table->string('password');
            $table->tinyInteger('is_deleted')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
