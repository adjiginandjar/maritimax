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
            $table->timestamp('available_start')->nullable();
            $table->timestamp('available_end')->nullable();
            $table->enum('booking_type',['freight','time']);
            $table->enum('booking_status',['available','booked']);
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
