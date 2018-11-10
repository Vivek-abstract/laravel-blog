<?php

namespace App\Http\Middleware;

use Closure;

class EnsureUserCreatedPost
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
        // Check if user created that post or if user is admin
        $user_id = auth()->id();
        $post = $request->route('post');
        if ($post->user->id === $user_id || auth()->user()->isAdmin()) {
            return $next($request);
        } else {
            abort(404);
        }
    }
}
