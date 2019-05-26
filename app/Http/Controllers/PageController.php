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
use App\Club;
use App\Active_Club;
use App\ImageClub;
use App\Donation;

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

    public function getListProfile() {
        $profile = user::select('id','name', 'email', 'password', 'phone', 'address','status', 'avata')->get()->toArray();
        return view('customer.Page.listProfile',compact('profile'));
    }

    public function getEditProfile($id) {
        $profile = user::select('id')->get()->toArray();
        $profile = user::find($id);
        $profile1_img = user::findOrFail($id)->get()->toArray();
        return view('customer.Page.editProfile',compact('profile','profile1_img'));
    }

    public function postEditProfile($id,Request $request) {
        $profile = user::find($id);
        $profile->name = $request->input('txtname');
        $profile->email = $request->input('txtemail');
        $profile->password = $request->input('txtpassword');
        $profile->phone = $request->input('txtphoneNumber');
        $profile->address = $request->input('txtaddress');
        $profile->status = $request->txtstatus;
        $profile->avata = 'public/img/user/'. $request->input('txtimage');
        if(!empty($request->file('txtimage')))
        {
            $file_name = $request->file('txtimage')->getClientOriginalName();
            $profile->avata = $file_name;
            $request->file('txtimage')->move('public/img/user',$file_name);
        }
        $profile->save();
        return redirect()->route('getListProfile')->with('success','Sửa ten thành công!');
    }
    public function loadCate()
    {
        
    }

    function gettuthien(){
        $club = Club::select('id','username','avata')->get();
        return View('Customer.Page.tuthien',compact('club'));
    }

    function getclb($id){
        $club = Club::select('email','id','username','avata','address','phone','name')->get();
        $clubs = Active_Club::where('id_club','=',$id)->get();
        $a = Active_Club::where('id_club','=',$id)->value('id');
        $img = ImageClub::where('id_activity','=',$a)->get();
        return View('Customer.Page.activityClub',compact('club','clubs','img'));
    }
    //  function getDonte($id){
    //      $user1 = Club::select('name')->get();
    //      $user = Donation::select('id_user')->get();
    //      $donateUser= User::where('id','=',$user)->get();
    //      return View('Customer.Page.activityClub',compact('club','user','donateUser'));
    // }


    function getloai(){
        
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
