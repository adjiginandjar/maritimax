<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->string('city');
            $table->string('location');
            $table->integer('price');
            $table->integer('length');
            $table->integer('width');
            $table->integer('height');
            $table->integer('curb_weight');
            $table->integer('load_capacity');
            $table->integer('available_capacity');
            $table->string('area_of_service');
            $table->string('flag');
            $table->integer('year_build');
            $table->string('dimension');
            $table->timestamp('available_start')->nullable();
            $table->timestamp('available_end')->nullable();
            $table->enum('booking_type',['charter','buy']);
            $table->enum('booking_status',['available','booked']);
            $table->integer('cargo_model_id')->nullable()->unsigned();
            $table->foreign('cargo_model_id')->references('id')->on('cargo_models');
            $table->integer('charter_type_id')->nullable()->unsigned();
            $table->foreign('charter_type_id')->references('id')->on('charter_types');
            $table->integer('category_cargo_id')->nullable()->unsigned();
            $table->foreign('category_cargo_id')->references('id')->on('category_cargos');
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
        Schema::dropIfExists('cargos');
    }
}
