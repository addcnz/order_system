<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model{
    public $table = "user";
    public $timestamps = false;
    
    public static $reg_rules = [
        'email' => "required|unique:user",
        'phone' => "digits:11|unique:user",
        'password' => "required|alpha_num|between:6,12",
        'password_confirmation' => "required|alpha_num|between:6,12",
    ];
    
        
   	 
}

