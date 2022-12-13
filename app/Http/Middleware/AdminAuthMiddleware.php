<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){
            if(Auth::user()->role=='1'){
                return $next($request);  
            }else{
                return redirect('/login')->with('Authenticate','Access denied, you are not authorized to visit this route');
            }
        }else{
            return redirect('/login')->with('Authenticate','Access denied, you are not authorized to visit this route'); 
        }

        return $next($request);
    }
}
