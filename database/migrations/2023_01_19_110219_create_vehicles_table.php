<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->integer('type_id');
            $table->string('front_image')->nullable();
            $table->string('left_image')->nullable();
            $table->string('right_image')->nullable();
            $table->string('back_image')->nullable();
            $table->string('name');
            $table->integer('brand_id');
            $table->string('model_no');
            $table->string('condition');
            $table->string('buy_year');
            $table->string('color');
            $table->string('mileage');
            $table->string('fuel_type');
            $table->string('engine');
            $table->string('doors');
            $table->string('description');
            $table->string('price');
            $table->string('time');
            $table->string('status');
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
        Schema::dropIfExists('vehicles');
    }
}
