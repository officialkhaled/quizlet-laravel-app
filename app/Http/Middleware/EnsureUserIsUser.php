<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureUserIsUser
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check() && auth()->user()->usertype == 1) {
            return $next($request);
        }

        return redirect('/admin/dashboard');
    }
}
