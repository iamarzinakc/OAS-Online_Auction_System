<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('type_id');
            $table->integer('brand_id');
            $table->integer('feature_id');
            $table->integer('category_id');
            $table->string('front_image')->nullable;
            $table->string('left_image')->nullable;
            $table->string('right_image')->nullable;
            $table->string('back_image')->nullable;
            $table->string('name');
            $table->string('color');
            $table->string('condition')->nullable;
            $table->string('model_no')->nullable;
            $table->string('buy_year')->nullable;
            $table->string('description')->nullable();
            $table->string('time');
            $table->string('price');
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
        Schema::dropIfExists('products');
    }
}
