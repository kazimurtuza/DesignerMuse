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
        Schema::create('shop_products', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('name');
            $table->tinyInteger('is_variant')->comment('0=no variant 1=variant');
            $table->bigInteger('category_id');
            $table->decimal('price',11,2);
            $table->text('ar_img')->nullable();
            $table->text('product_code')->nullable();
            $table->decimal('shipping_cost')->nullable();
            $table->text('measurement')->nullable();
            $table->decimal('avg_rating',11,2)->nullable();
            $table->decimal('max_price',11,2)->nullable();
            $table->decimal('min_price',11,2)->nullable();
            $table->decimal('cost',11,2)->nullable();
            $table->tinyInteger('discount_type')->nullable()->comment("0=fixed,1=prc");
            $table->decimal('discount',11,1)->nullable();
            $table->tinyInteger('status')->default(1)->nullable()->comment('1=active,0=inactive');
            $table->tinyInteger('is_deleted')->default(0)->nullable()->comment('1=active,0=deleted');
            $table->text('description')->nullable();
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
        Schema::dropIfExists('shop_products');
    }
};
