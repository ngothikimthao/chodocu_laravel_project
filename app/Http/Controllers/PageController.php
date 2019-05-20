<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Post_Product;
use App\Category;
use App\Post;
use App\sup_category;

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

    public function getLoaiSp($type) {
        $sp_theoloai= Product::where('id_type',$type) ->limit(3)->get();
        // $sp_khac= Product::where('id_type','<>',$type)->limit(3)->get();
        $loai = Category::all();
        $loai_sp = Category::where('id',$type)->first();
        return view('Customer.Page.baidang',compact('sp_theoloai','loai','loai_sp'));
    

    function gettuthien(){
        return View("Customer.Page.tuthien");
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
