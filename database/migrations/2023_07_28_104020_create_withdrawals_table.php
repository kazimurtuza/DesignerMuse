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
        Schema::create('withdrawals', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('sector_type')->comment('1=designer 2=shop');
            $table->string('id_no')->nullable();
            $table->bigInteger('designer_id')->nullable();



            $table->string('bank_id')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('acc_name')->nullable();
            $table->string('acc_number')->nullable();
            $table->string('routing_number')->nullable();


            $table->bigInteger('shopkeeper_id')->nullable();
            $table->bigInteger('status')->default(0)->comment('0=withdrawal request,1=balance transfer completed ');
            $table->date('withdrawal_request_date')->nullable();
            $table->date('withdrawal_accept_date')->nullable();
            $table->bigInteger('withdrawal_accept_by')->nullable();
            $table->decimal('withdrawal_amount',11,2);
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
        Schema::dropIfExists('withdrawals');
    }
};
