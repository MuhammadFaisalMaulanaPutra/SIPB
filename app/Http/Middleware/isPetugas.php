<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class isPetugas
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
        if(!auth()->check() || auth()->user()->id_role === 3){
            abort(403);
        }
        return $next($request);
    }
}
