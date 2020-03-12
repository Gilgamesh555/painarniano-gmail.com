<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('almacen.program_activities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code_program_activity')->unique;
            $table->string('description');
            $table->string('year', 4);
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('program_structure_id')->unsigned();
            $table->foreign('program_structure_id')->references('id')->on('almacen.program_structures');
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
        Schema::dropIfExists('almacen.program_activities');
    }
}
