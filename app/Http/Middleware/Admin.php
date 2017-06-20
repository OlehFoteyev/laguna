<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class Admin
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
        // проверяем принадлежность пользователя
        if ( Auth::check() && Auth::user()->isAdmin()==true )
        {
            return $next($request);
        }
        return redirect('/');
    }
}
