<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
