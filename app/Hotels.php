<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotels extends Model
{
	   protected $table = 'tbl_hotellist';
     protected $fillable = ['title', 'price', 'description','roomNo','order','type','fullImage','thumbImage','bookedDate','created_at','updated_at'];


     public function add($inputData){
      return Hotels::create($inputData);
     }
     public function getAllHotels(){
     	return Hotels::limit(3)->offset(2)->get();
     }
     public function getHotels(){
     	return Hotels::all();
     }
}
