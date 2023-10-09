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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('sector_type')->comment('0=designer 1=shop');
            $table->tinyInteger('payment_for')->comment('0=shop 1=meeting 2=project');
            $table->bigInteger('user_id');
            $table->string('payment_status')->default(0)->comment('1=success');
            $table->bigInteger('designer_id')->nullable();
            $table->bigInteger('shop_order_id')->nullable();
            $table->bigInteger('meeting_id')->nullable();
            $table->bigInteger('project_id')->nullable();
            $table->bigInteger('project_milestone_id')->nullable();
            $table->string('id_no')->nullable();
            $table->decimal('total_amount');
            $table->decimal('trn_charge_amount')->nullable();
            $table->decimal('service_charge_amount')->nullable();
            $table->string('trn_id')->nullable();
            $table->string('payment_id')->nullable();
            $table->string('result')->nullable();
            $table->string('post_date')->nullable();
            $table->string('card_type')->nullable();
            $table->string('ref')->nullable();
            $table->string('track_id')->nullable();
            $table->string('order_id')->nullable();
            $table->string('cust_ref')->nullable();
            $table->string('trn_udf')->nullable();
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
        Schema::dropIfExists('payments');
    }
};
