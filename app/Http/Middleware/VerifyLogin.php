<?php
/**
 * 登录验证
 */
namespace App\Http\Middleware;
use Request;
use Closure;
class VerifyLogin
{
    function handle(Request $request,Closure $next){
    	if(!session()->get('is_login')){
    		return redirect("/login.html");
    	}
    	return $next($request);
    }
}
