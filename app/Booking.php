<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
     protected $table = 'tbl_booking';
     protected $fillable = ['name', 'email', 'location','hotelName','checkIn','checkOut','type','RoomNo','adult','children','message','created_at','updated_at'];


     public function add($inputData){
      return Booking::create($inputData);
     }
     public function getAllDetails(){
     	return Booking::all();
     }
}
