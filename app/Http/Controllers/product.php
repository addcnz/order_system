<?php

namespace App\Http\Controllers;

use Request;
class Product extends Controller{

    function __constuct(){

    }

    function add(){
        $this->pic_size = config_path()."/product.php";
        
    	return view("product.add");
    }

    function doAdd(Request $request){

    }

    function plist(){

    }


}
