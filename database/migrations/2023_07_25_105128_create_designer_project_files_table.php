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
        Schema::create('designer_project_files', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('project_id');
            $table->string('file');
            $table->tinyInteger('is_client_upload')->default(0)->comment(' 1=client 2=designer');
            $table->string('file_name');
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
        Schema::dropIfExists('designer_project_files');
    }
};
