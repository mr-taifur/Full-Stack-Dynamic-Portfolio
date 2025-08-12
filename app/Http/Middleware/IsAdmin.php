<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
{
    if (!auth()->check()) {
        abort(403, 'User not authenticated');
    }

    // Debug:
    // dd(auth()->user()->role);

    if (auth()->user()->role !== 'admin') {
        abort(403, 'User role is not admin. Role found: ' . auth()->user()->role);
    }
    return $next($request);
}

}


