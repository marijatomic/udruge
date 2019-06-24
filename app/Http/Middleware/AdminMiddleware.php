<?php

namespace App\Http\Middleware;

use Closure;
use App\Article;
use Illuminate\Contracts\Auth\Guard;

class AdminMiddleware
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
        if (auth()->user()->type !== "admin") {
            abort(403, 'Unauthorized action.');

        }else{
            return $next($request);
        }

    }
}
