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
        Schema::create('designer_projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->date('dateline');
            $table->text('agreement_details')->nullable();
            $table->text('agreement_file')->nullable();
            $table->text('designer_project_comment')->nullable();
            $table->text('agreement_file_name')->nullable();
            $table->tinyInteger('agreement_accepted')->default(0)->comment('1=accept,2=agreement create');
            $table->decimal('project_rate',11,2)->nullable();
            $table->bigInteger('client_id');
            $table->bigInteger('is_milestone')->default(0);
            $table->decimal('total_paid')->default(0);
            $table->tinyInteger('payment_status')->default(0)->comment('0=>pending,1=>partial,2=>completed');
            $table->bigInteger('designer_id');
            $table->bigInteger('meeting_id');
            $table->tinyInteger('project_status')->default(0)->comment('0=pending,1=accept,2=completed,3=>reject');
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
        Schema::dropIfExists('designer_projects');
    }
};
