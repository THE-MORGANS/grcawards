<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureJudge
{
    /**
     * Restrict the route to admins with the "judge" role (role_id 3).
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::guard('admin')->user()?->role_id != 3) {
            abort(403, 'This page is only accessible to judges.');
        }

        return $next($request);
    }
}
