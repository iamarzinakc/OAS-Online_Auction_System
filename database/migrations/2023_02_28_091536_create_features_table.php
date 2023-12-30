<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('features', function (Blueprint $table) {
            $table->id();
            $table->string('music');
            $table->string('bluetooth');
            $table->string('audio');
            $table->string('input');
            $table->string('gps');
            $table->string('climate');
            $table->string('control');
            $table->string('gasoline');
            $table->string('electric_charge');
            $table->string('remote_locking');
            $table->string('sunproof');
            $table->string('waterproof');
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
        Schema::dropIfExists('features');
    }
}
