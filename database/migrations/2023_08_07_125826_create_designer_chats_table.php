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
        Schema::create('designer_chats', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('customer_id');
            $table->bigInteger('seller_id');
            $table->bigInteger('meeting_id');
            $table->string('message');
            $table->tinyInteger('seen_status')->default(0);
            $table->tinyInteger('is_sender_client')->comment("0=yes,1=yes");
            $table->tinyInteger('type')->default(0)->comment("0=>message,1=file");
            $table->tinyInteger('deliver_status')->default(1)->comment("0=>not delivered  ,1=delivered");
            $table->time('date_time');
            $table->date('date');
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
        Schema::dropIfExists('designer_chats');
    }
};
