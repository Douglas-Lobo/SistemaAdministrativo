<?php

namespace App\Http\Middleware;
use Closure;


class authUsers
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        
        if(auth()->user()->role != 'admin'){
            return redirect()->route('admin.home');
        }
        
        return $next($request);
    }
}
