<?php
/**
 * 登录验证
 */
namespace App\Http\Middleware;
use Request;
use Closure;
class VerifyRole
{
    function handle(Request $request,Closure $next){
    	if('1' == session()->get('role')){
    		return $next($request);
    	}else{
    		return "只有经销商才能添加产品";
    	}
    }
}
