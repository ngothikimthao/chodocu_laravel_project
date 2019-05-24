<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Product;
use App\Post_Product;
use App\Category;
use App\Post;
use App\sup_category;
use App\Club;
use App\Active_Club;
use App\ImageClub;

class PageController extends Controller
{
    function getmaster(){
        return View("Customer.Layout.master");
    }
    function getindex(){
        return View("Customer.Page.index");
    }

    function getdoido(){
        return view("customer.Page.doido");
    }

    function getprofile(){
        return view("customer.Page.profile");
    }

    function getchitiet(){
        return view("customer.Page.chitiet");
    }

    function getbaidang(){
        return view("customer.Page.baidang");
    }

    public function checkLogin(Request $request){
        $results = DB::select('select * from users where id = :id', ['id' => 1]);
        foreach ($users as $user) {
        echo $user->username;
        }
    }

    public function insertProduct(){
        $product = new Product;
        $product->name = Input::get('name');
        $product->id = Input::get(2);
        $product->price = Input::get('price');
        $product->description = Input::get('description');
        $product->image =  Input::get('image');
        $product->status =  Input::get(1);
        $product->save();

        return Redirect::back();
    }

    public function insertPost(){
        $product = new Post;
        $product->id_user = Input::get('name');
        $product->price = Input::get('price');
        $product->description = Input::get('description');
        $product->image =  Input::get('image');
        $product->status =  Input::get(1);
        $product->save();

        return Redirect::back();
    }



    public function loadCate()
    {
        
    }

    function gettuthien(){
        $club = Club::select('id','username','avata')->get();
        return View('Customer.Page.tuthien',compact('club'));
    }

    function getclb($id){
        $club = Club::select('id','username','avata')->get();
        $clubs = Active_Club::where('id_club','=',$id)->get();
        $a = Active_Club::where('id_club','=',$id)->value('id');
        $img = ImageClub::where('id_activity','=',$a)->get();

        return View('Customer.Page.activityClub',compact('club','clubs','img'));
    }

    function getloai(){
        
    }
    function getlogin(){
        return View("Login.login");
    }
    function getlogin1(){
        return View("Login.login1");
    }
    function getregister(){
        return View("Login.register");
    }
    
}
