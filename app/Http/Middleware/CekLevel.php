<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Auth\SessionGuard;

class CekLevel
{
    /**
     * Handle an incoming request.
     * @param \Illuminate\Http\Request $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * return \Illuminate\Http\Response|\Illuminate\Http\Response
     */
    public function handle(Request $request, Closure $next, ...$levels)
    {
        if(in_array($request->users()->role_id, $levels)){
            return $next($request);
        }

        return redirect('/auth.login');
    }
}