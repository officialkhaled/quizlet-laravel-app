<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserIsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check() && auth()->user()->usertype == 0) {
            return $next($request);
        }

        return redirect('/dashboard'); // Or wherever you want non-admins to go
    }
}
