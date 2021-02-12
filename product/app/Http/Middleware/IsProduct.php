<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

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
        if (Auth::check() && Auth::user()->roleid == 1) {
            return redirect()->route('product/admin');
        }
        elseif (Auth::check() && Auth::user()->roleid == 2) {
            return redirect()->route('product/manager');
        }
        elseif (Auth::check() && Auth::user()->roleid == 3) {
            return redirect()->route('product/customer');
        }
        
    }
}
