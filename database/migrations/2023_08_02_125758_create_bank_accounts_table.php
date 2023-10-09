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
        Schema::create('bank_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('sector')->comment('1=designer,2=shopkeeper');
            $table->bigInteger('user_id');
            $table->string('bank_name');
            $table->string('acc_name');
            $table->string('acc_number');
            $table->string('routing_number')->nullable();
            $table->tinyInteger('is_active')->default(0)->comment('0=not active,1=active');
            $table->tinyInteger('is_delete')->default(0);
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
        Schema::dropIfExists('bank_accounts');
    }
};
