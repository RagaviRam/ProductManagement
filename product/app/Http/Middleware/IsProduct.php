<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsProduct
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->roleid == config('product.role.admin')){
            return $next($request);
        }
        elseif(auth()->user()->roleid == config('product.role.manager')){
            return $next($request);
        }
        elseif(auth()->user()->roleid == config('product.role.customer')){
            return $next($request);
        }
        
    }
}
