<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next )
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->role == 'admin') {
            return redirect()->route('dashboard');
        }

        if (Auth::user()->role == 'user') {
            return redirect()->route('userhome');
        }

        if (Auth::user()->role == 'super_admin') {
            return redirect()->route('dashboard');
        }

        
        //return $next($request);
    }
}
