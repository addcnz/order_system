<?php

namespace App\Http\Controllers;

use Image;
class Order extends Controller{
    

    function __construct(){
        
    }
    function index(){
        $img = Image::make('D:\xampp\htdocs\order_system\app\Http\Controllers/123.jpg')->resize(200, 200);

    	return $img->response('jpg');
    }
}
