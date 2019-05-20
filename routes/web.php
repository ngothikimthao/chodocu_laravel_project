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
			
Route::get('index',[				
	'as'=>'index',			
	'uses'=>'PageController@getindex'			
	]);			
Route::get('profile',[
	'as'=>'profile',
	'uses'=>'PageController@getprofile'
]);

Route::get('chitiet',[
	'as'=>'chitiet',
	'uses'=>'PageController@getchitiet'
]);

Route::get('baidang',[
	'as'=>'baidang',
	'uses'=>'PageController@loadCate'
]);

Route::get('baidang',[
	'as'=>'baidang',
	'uses'=>'PageController@insertProduct'
]);

Route::get('doido',[
	'as'=>'doido',
	'uses'=>'PageController@getdoido'
]);

Route::get('tuthien',[				
	'as'=>'tuthien',			
	'uses'=>'PageController@gettuthien'			
	]);	
Route::get('login',[				
	'as'=>'login',			
	'uses'=>'PageController@getlogin'			
]);	
Route::get('login1',[				
	'as'=>'login1',			
	'uses'=>'PageController@getlogin1'			
]);				
Route::get('register',[				
	'as'=>'register',			
	'uses'=>'PageController@getregister'			
]);		