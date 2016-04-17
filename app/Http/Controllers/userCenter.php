<?php
namespace App\Http\Controllers;

class UserCenter extends Controller{

	function __construct(){

	}

	function index(){
		
		return view("userCenter.index");
	}

}