<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\sup_Category;
use App\slide;
use App\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\UsersRequest;

class ProfileController extends Controller
{
    function getviewprofile(){
    	return view("customer.Page.profile.viewprofile");
    }
    function gettrangcanhan(){
    	return view("customer.Page.profile.trangcanhan");
    }
    function getbaidang1(){
    	return view("customer.Page.profile.baidang");
    }
    function getsanpham(){
    	return view("customer.Page.profile.sanpham");
    }
}
