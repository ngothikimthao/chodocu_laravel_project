<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bargains extends Model
{
    protected $table ='Bargains';
    protected $filable=['id_user','id_post','id_prod','price'];
   public $timestamps=true;
   //Du dung 2 truong created and updated 
   public function Products(){
      return $this->hasMany('App\Product');
   }
   public function Post(){
       return $this->belongsto('App\Post');
    }
}
