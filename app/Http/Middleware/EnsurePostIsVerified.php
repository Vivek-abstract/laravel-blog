<?php

namespace App\Http\Middleware;

use Closure;

class EnsurePostIsVerified
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

        // If post is not verified, only admin can see it
        if (!$request->route('post')->verified) {
            if (auth()->check()) {
                if (!$request->user()->isAdmin()) {
                    abort(404);
                }
            } else {
                abort(404);
            }
        }

        return $next($request);
    }
}
