<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banners extends Model
{
   	   protected $table = 'tbl_banners';
     protected $fillable = ['bannerImage', 'description','created_at','updated_at'];


     public function add($inputData){
      return Banners::create($inputData);
     }
     public function getAllBanners(){
     	return Banners::all();
     }
}
