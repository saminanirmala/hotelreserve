<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_hotellist', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('price');
            $table->text('description');
            $table->string('roomNo');
            $table->Integer('order');
            $table->string('fullImage');
            $table->string('thumbImage');
            $table->enum('type',['Standard','Deluxe','Club','Executive']);
            $table->timestamp('bookedDate');
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
        Schema::drop('tbl_hotellist');
    }
}
