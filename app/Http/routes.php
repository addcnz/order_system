<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get("/","Auth\AuthController@index");
//Route::get("/","Order@index");

Route::get("/login.html","User@loginHtml");

Route::get("/register.html","User@register");

Route::post("user/signup","User@signUp");

Route::post("user/login","User@doLogin");

Route::group(['middleware'=>"loginverify"],function(){
	//会员中心
	Route::get("userCenter/index","userCenter@index");
	Route::get("user/logout","User@logout");
	//刊登产品
	Route::group(['middleware'=>"roleverify"],function(){
		Route::get("product/add","product@add");
	});
});

Route::resource("post","post");


