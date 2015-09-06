<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_booking', function (Blueprint $table) {
           $table->increments('id');
           $table->string('name');
           $table->string('email');
           $table->string('location');
           $table->string('hotelName');
           $table->timestamp('checkIn');
           $table->timestamp('checkOut');
           $table->enum('type',['Standard','Deluxe','Club','Executive']);
           $table->string('RoomNo');
           $table->Integer('adult');
           $table->Integer('children');
           $table->text('message');
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
        Schema::drop('tbl_booking');
    }
}
