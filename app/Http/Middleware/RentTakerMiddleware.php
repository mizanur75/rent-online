<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class RentTakerMiddleware
{
    public function handle($request, Closure $next)
    {
        if(Auth::check() && Auth::user()->role->id == 3){
            return $next($request);
        }else{
            return redirect()->route('login');
        }
    }
}
