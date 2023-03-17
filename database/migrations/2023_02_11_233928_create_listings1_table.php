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
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->string('Type');
            $table->string('title');
            $table->string('tags');
            $table->string('model');
            $table->string('make');
            $table->integer('car_model_id');
            $table->integer('brand_id');
            $table->year('year');
            $table->string('engine');
            $table->string('fuelType');
            $table->string('color');
            $table->string('transmition');
            $table->string('wheelDrive');
            $table->string('defects');
            $table->string('wheelLocation');
            $table->string('numberOfDoors');
            $table->string('numberOfSeats');
            $table->string('VIN');
            $table->double('price');
            $table->string('city');
            $table->string('country');
            $table->string('TPass');
            $table->string('traits');
            $table->string('body');
            $table->longText('description');
            $table->string('sellerNumber');
            $table->string('photo', 300);
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
        Schema::dropIfExists('listings');
    }
};
