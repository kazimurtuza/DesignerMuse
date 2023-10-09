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
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order_id');
            $table->bigInteger('shop_order_id');
            $table->bigInteger('shop_id');
            $table->bigInteger('product_id');
            $table->decimal('unit_price',11,2);
            $table->decimal('unit_cost',11,2);
            $table->decimal('quantity',11,2);
            $table->decimal('total_payable',11,2);
            $table->decimal('service_charge',11,2)->nullable();
            $table->decimal('discount',11,2);
            $table->decimal('shipping_price',11,2);
            $table->bigInteger('color_variant_id')->nullable();
            $table->tinyInteger('payment_status')->default(0)->comment('1=payment done');
            $table->tinyInteger('status')->nullable();
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
        Schema::dropIfExists('order_details');
    }
};
