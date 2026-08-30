<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureJudge
{
    /**
     * Restrict the route to admins with the "judge" (role_id 3) or
     * "super admin" (role_id 1) role.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!in_array(Auth::guard('admin')->user()?->role_id, [1, 3])) {
            abort(403, 'This page is only accessible to judges and admins.');
        }

        return $next($request);
    }
}
