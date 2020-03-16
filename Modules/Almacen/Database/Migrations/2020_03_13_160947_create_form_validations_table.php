<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormValidationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('almacen.form_validations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('status')->nullable();
            $table->text('observation')->nullable();
            $table->date('date');
            $table->string('type');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('material_order_id')->unsigned();
            $table->foreign('material_order_id')->references('id')->on('almacen.material_orders');
            
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
        Schema::dropIfExists('almacen.form_validations');
    }
}
