<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('almacen.order_descriptions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('requested_amount');
            $table->integer('approved_amount');
            $table->integer('delivered_amount');
            $table->string('year', 4);
            $table->text('status')->nullable();
            $table->text('observation')->nullable();
            $table->integer('budget_code_id')->unsigned();
            $table->foreign('budget_code_id')->references('id')->on('almacen.budget_codes');
            $table->integer('property_id')->unsigned();
            $table->foreign('property_id')->references('id')->on('almacen.properties');
            $table->integer('material_order_id')->unsigned();
            $table->foreign('material_order_id')->references('id')->on('almacen.material_orders');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            
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
        Schema::dropIfExists('almacen.order_descriptions');
    }
}
