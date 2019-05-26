<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use App\Product;
use App\Post_Product;
use App\Category;
use App\Post;
use App\sup_category;

use App\Http\Requests\UsersRequest;
use App\User;

use File;
use Hash;


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
        $name = Category::select('id','name')->get();
        return view('customer.Page.baidang',compact('name'));
    }

   // public function getLoaiSp($type) {
      //  $sp_theoloai= Product::where('id_type',$type) ->limit(3)->get();
        // $sp_khac= Product::where('id_type','<>',$type)->limit(3)->get();
       // $loai = Category::all();
       // $loai_sp = Category::where('id',$type)->first();
       // return view('Customer.Page.baidang',compact('sp_theoloai','loai','loai_sp'));
   // }

    function gettuthien(){
        return View("Customer.Page.tuthien");
    }
    function getlogin(){
        return View("Login.login");
    }
    function getlogin1(){
        return View("Login.login1");
    }
    function getRegister() {
        return view('Login.register');
    }
    function postCheckRegister(UsersRequest $request){
        $user = new User();
        $user->name = $request->txtname;
        $user->email = $request->txtemail;
        $user->phone = $request->txtphoneNumber;
        $user->user_name = $request->txtuserName;
        $user->password = Hash::make($request->txtpassword);
        $user->address = $request->txtaddress;
        $file_image = $request->file('txtimage')->getClientOriginalName();
        $user->avata=$file_image;
        $user->status = 1;
        $request->file('txtimage')->move('public/img/user/',$file_image);
        $user->save();
        return redirect()->back()->with('success', 'Đăng ký tài khoản thành công!');;
    }

}
