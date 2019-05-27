<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// route trang chinh
Route::group(['prefix' => '/'], function () {		
	Route::get('index',[				
		'as'=>'index',			
		'uses'=>'PageController@getindex'			
		]);			
	Route::get('chitiet/{id}',[
		'as'=>'chitiet',
		'uses'=>'PageController@getchitiet'
	]);
	Route::get('baidang',[
		'as'=>'baidang',
		'uses'=>'PageController@getbaidang'
	]);
	Route::get('doido',[
		'as'=>'doido',
		'uses'=>'PageController@getdoido'
	]);
});
//Route trang ca nhan
Route::group(['prefix' => '/'], function () {
	Route::get('viewprofile', [
		'as' 	=> 'viewprofile',
		'uses' 	=> 'ProfileController@getviewprofile'
	]);
	Route::get('trangcanhan/{id}', [
		'as' 	=> 'trangcanhan',
		'uses' 	=> 'ProfileController@gettrangcanhan'
	]);
	Route::get('baidang1', [
		'as' 	=> 'baidang1',
		'uses' 	=> 'ProfileController@getbaidang1'
	]);
	Route::get('sanpham', [
		'as' 	=> 'sanpham',
		'uses' 	=> 'ProfileController@getsanpham'
	]);
});

Route::get('login',[				
	'as'=>'login',			
	'uses'=>'PageController@getlogin'			
]);	

Route::post('login',[				
	'as'=>'login',			
	'uses'=>'PageController@checkLogin'			
]);

Route::get('login1',[				
	'as'=>'login1',			
	'uses'=>'PageController@getlogin1'			
]);				
Route::get('register',[				
	'as'=>'register',			
	'uses'=>'PageController@getregister'			
]);		
Route::get('tuthien',[
	'as'=>'tuthien',
	'uses'=>'PageController@gettuthien'
]);
Route::get('clb/{id}',[
	'as'=>'clb',
	'uses'=>'PageController@getclb'
]);