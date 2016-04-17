<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Input;
use Session;
class Uploadimg extends Controller{
    
    private $pic_size = array();
    function __construct(){
        if(!$this->pic_size){
            include config_path()."/picture.php";
            $this->pic_size = $pic_size;
        }
    }
    
    function upload(){

    }

    function getUrl(){

    }
   
}
