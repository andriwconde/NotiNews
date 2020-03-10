<?php

namespace App\Http\Middleware;

use Closure;

class checkauthor
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
      if(Auth::check() && Auth::user()->id === $articulo->user_id){

        return $next($request);
      }
    }
}
