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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('customer_id');
            $table->bigInteger('payment_id')->nullable();
            $table->decimal('total_price',11,2);
            $table->string('invoice_id')->nullable();
            $table->decimal('shipping_price',11,2)->default(0)->nullable();
            $table->decimal('total_discount',11,2)->default(0)->nullable();
            $table->decimal('total_payable',11,2);
            $table->string('pay_by')->nullable();
            $table->string('card')->nullable();
            $table->string('trn_id')->nullable();
            $table->string('card_last_digits')->nullable();
            $table->string('address');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');
            $table->tinyInteger('payment_status')->default(0)->comment("0=>uncompleted,1=>completed");
            $table->tinyInteger('status')->default(0)->nullable()->comment("0=pending,1=processing-2=completed");
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
        Schema::dropIfExists('orders');
    }
};
