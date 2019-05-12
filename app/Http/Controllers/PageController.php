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
}
