<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\User as User_Medol;
use Validator;
use Hash;
use Input;
use Session;
class User extends Controller{
    
    function __construct(User_Medol $user){
        $this->user = $user;
    }
    
    function loginHtml(){
        return view("user.login");
    }
    
    function doLogin(Request $request){
        $user_data['email'] = $request->input('email');
        $ret = $this->user->where($user_data)->get();
        if($ret[0]['id']){
            if(Hash::check($request->input('password'),$ret[0]['password'])){

                $this->setSession($ret[0]);
                echo '{"status":"1","msg":"ok"}';
            }else{
                echo '{"status":"0","msg":"密码错误！"}';exit;
            }
        }else{
            echo '{"status":"0","msg":"请先注册！"}';exit;
        }
    }
    
    function register(){
        return view("user.register");
    }
    
    function signUp(Request $request){
        $reg_post_info = $request->input();//var_dump($reg_info);die;
        $validator = Validator::make($reg_post_info['user'],  User_Medol::$reg_rules);
        $reg_info = $reg_post_info['user'];
        if($validator->passes()){
            if($reg_info['password'] != $reg_info['password_confirmation']){
                return false;
            }
            $this->user->email = $reg_info['email'];
            $this->user->password = Hash::make($reg_info['password']);
            $this->user->real_name = $reg_info['real_name'];
            $this->user->phone = $reg_info['phone'];
            $this->user->qq = $reg_info['qq'];
            $this->user->weixin = $reg_info['weixin'];
            $this->user->regtime = time();
            $this->user->save();
            $reg_info['id'] = $this->user->id;
            $this->setSession($reg_info);
            return redirect("userCenter/index");
        }else{
            echo "failed".$validator->errors();
        }
    }
    /**
     * 保存session
     * @param array 用户信息
     */
    function setSession($userInfo = array()){
        $show_name = isset($userInfo['real_name']) ? $userInfo['real_name'] : $userInfo['email'];   
        $sess_data = ['real_name'=>$show_name,'user_id'=>$userInfo['id'],"is_login"=>1,'role'=>$userInfo['role']];
        session($sess_data);
    }
    //忘记密码
    function forgetPwd(){
        return view('userCenter.forgetpwd');
    }

    function getPassword(Rrequest $request){

    }

    function logout(){
        session()->forget("real_name");
        session()->forget("user_id");
        session()->forget("is_login");
        return redirect("/login.html");
    }
}
