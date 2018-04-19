<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname');
            $table->string('phone_number');
            $table->string('email');
            $table->string('capacity');
            $table->string('destination_form');
            $table->string('destination_to');
            $table->timestamp('date');
            $table->integer('cargo_id')->nullable()->unsigned();
            $table->foreign('cargo_id')->references('id')->on('cargos');
            $table->integer('user_id')->nullable()->unsigned();
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
        Schema::dropIfExists('bookings');
    }
}
