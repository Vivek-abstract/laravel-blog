<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdmin
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
        if (! auth()->check()) {
            return redirect()->home();
        } else if (! auth()->user()->isAdmin()) {
            return redirect()->home();
        }
        return $next($request);
    }
}
