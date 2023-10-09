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
        Schema::create('designer_project_milestone_payments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('project_id');
            $table->string('title');
            $table->decimal('amount',);
            $table->date('paid_date')->nullable();
            $table->date('payable_date')->nullable();
            $table->bigInteger('payment_id')->nullable();
            $table->tinyInteger('payment_status')->default(0)->comment('1=>payment done');
            $table->tinyInteger('status')->default(0)->comment('0=>uncompleted 1=>completed');
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
        Schema::dropIfExists('designer_project_milestone_payments');
    }
};
