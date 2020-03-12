<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('almacen.properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code_property')->unique();
            $table->string('name');
            $table->string('year', 4);
            $table->text('status')->nullable();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('sorter_id')->unsigned();
            $table->foreign('sorter_id')->references('id')->on('almacen.sorters');
            $table->integer('unity_id')->unsigned();
            $table->foreign('unity_id')->references('id')->on('almacen.unities');

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
        Schema::dropIfExists('almacen.properties');
    }
}
