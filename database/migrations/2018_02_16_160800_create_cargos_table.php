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
            $table->text('description')->nullable();
            $table->string('city')->nullable();
            $table->string('location')->nullable();
            $table->integer('price')->nullable();
            $table->integer('length')->nullable();
            $table->integer('width')->nullable();
            $table->integer('height')->nullable();
            $table->integer('curb_weight')->nullable();
            $table->integer('load_capacity');
            $table->integer('available_capacity');
            $table->string('area_of_service')->nullable();
            $table->string('flag')->nullable();
            $table->integer('year_build')->nullable();
            $table->string('dimension')->nullable();
            $table->timestamp('available_start')->nullable();
            $table->timestamp('available_end')->nullable();
            $table->enum('booking_type',['charter','buy']);
            $table->enum('booking_status',['available','booked']);
            $table->enum('publish_status',['publish','unpublish']);
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
