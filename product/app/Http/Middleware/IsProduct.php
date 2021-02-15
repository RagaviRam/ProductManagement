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
        if (Auth::check() && Auth::user()->roleid == config('product.role.admin')) {
            //return redirect()->route('admin/list');
            return $next($request);
        }
        elseif (Auth::check() && Auth::user()->roleid ==  config('product.role.manager')) {
            return $next($request);
        }
        elseif (Auth::check() && Auth::user()->roleid ==  config('product.role.customer')) {
            return $next($request);
        }
        //return redirect('home')->with('error', "You have no proper authentication to access the area!");
        //abort(403);
    }
}
