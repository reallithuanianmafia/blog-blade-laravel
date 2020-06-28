<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class wmEntrance
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
        if(Auth::check())
        {
            if(!auth()->user()->hasRole('moderator'))
            {
                return redirect()->route('pm.home');
            }
        }
        return $next($request);
    }
}
