<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('almacen.material_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('order_number')->unique();
            $table->text('reason');
            $table->integer('funding_source_id')->unsigned();
            $table->foreign('funding_source_id')->references('id')->on('almacen.funding_sources');
            $table->integer('financing_agency_id')->unsigned();
            $table->foreign('financing_agency_id')->references('id')->on('almacen.financing_agencies');
            $table->integer('program_activity_id')->unsigned();
            $table->foreign('program_activity_id')->references('id')->on('almacen.program_activities');
            
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('year', 4);
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
        Schema::dropIfExists('almacen.material_orders');
    }
}
