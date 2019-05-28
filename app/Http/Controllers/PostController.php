<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Input;
use Session;
use DB;
use View;
use Response;
use App\Product;
use App\Category;
use App\sup_category;
use App\Post;


class PostController extends Controller
{
      public function addProduct()
    {
        //insert data into table product
        
        $product = new Product();
        $sub = sup_category::find(Input::get('subcategory'));
        $product->name = $sub->name;
        $product->id_subcat = Input::get('subcategory');
        $product->price = Input::get('price');
        $product->image =  Input::get('image');
        $product->description = Input::get('description');
        $product->status = 1;

        //insert data into table posts
        $product->save();
        $id = DB::getPdo()->lastInsertId();;
        $post = new Post();
        $post->id_prod = $id;
        $post->id_user = Session::get('user.id');
        $post->contact = Input::get('contact');
        $post->save();

          //return redirect()->back();
    }


    public function getCate()
    {
        $category = Category::all();
        return View::make('Customer.Page.baidang')->with('category',$category);
    }
}
