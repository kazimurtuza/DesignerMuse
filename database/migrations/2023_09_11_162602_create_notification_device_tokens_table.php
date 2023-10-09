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
        Schema::create('notification_device_tokens', function (Blueprint $table) {
            $table->id();
            $table->text('user_type')->comment('generalUser,designer,shopKeeper,admin');
            $table->tinyInteger('device_type')->comment('android=1,ios=2,web=3');
            $table->bigInteger('user_id');
            $table->text('token')->nullable();
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
        Schema::dropIfExists('notification_device_tokens');
    }
};
