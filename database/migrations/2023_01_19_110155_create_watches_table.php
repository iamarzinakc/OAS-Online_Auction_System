<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('watches', function (Blueprint $table) {
            $table->id();
            $table->integer('type_id');
            $table->string('front_image')->nullable();
            $table->string('left_image')->nullable();
            $table->string('right_image')->nullable();
            $table->string('back_image')->nullable();
            $table->string('name');
            $table->string('model_no');
            $table->string('condition');
            $table->string('color');
            $table->integer('brand_id');
            $table->string('bettry_life');
            $table->string('warranty');
            $table->string('adjusted_bracelet');
            $table->string('inlet_size');
            $table->string('case_thickness');
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
        Schema::dropIfExists('watches');
    }
}
