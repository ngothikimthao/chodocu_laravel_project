<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BargainController extends Controller
{
    public function postBargain()
   {
   	$bargain = new Bargain();
   	$bargain->id_user = Session::get('user.id');
   	$bargain->price = Input::get('tragia');
   	$bargain->id_prod = 1;
   	$bargain->id_post = 1;
   	$bargain->save();
   }
}
