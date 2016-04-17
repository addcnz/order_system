<?php

namespace App\Http\Middleware;

use Request;
use Closure;
class TestMiddleware
{
    
    public function handle($request, Closure $next)
	{
		if($request->input('age')<18)
			return redirect()->route('refuse');
		return $next($request);
	}
}
