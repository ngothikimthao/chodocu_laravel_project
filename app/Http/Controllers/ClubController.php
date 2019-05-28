<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\club;
use App\Active_club;
use App\ImageClub;
use Illuminate\Support\Facades\DB;

class ClubController extends Controller
{
    function gettuthien(){
        $club = Club::select('id','username','avata')->get();
        return View('Customer.Page.Club.tuthien',compact('club'));
    }

    function getclb($id){
        $club = Club::select('email','id','username','avata','address','phone','name')->get();
        $clubs = Active_Club::where('id_club','=',$id)->get();
        $a = Active_Club::where('id_club','=',$id)->value('id');
        $img = ImageClub::where('id_activity','=',$a)->get();
        $user_donate= DB::table('donation')
        ->join('users', 'users.id', '=', 'donation.id_user')
        ->join('products', 'products.id', '=', 'donation.id_prod')
        ->get(array(
        'donation.id',
        'users.name',
        'products.image',
        'products.description',
        'donation.content'
        ));
        return View('Customer.Page.club.activityClub','Customer.Page.index',compact('club','clubs','img','user_donate'));
    }
}
