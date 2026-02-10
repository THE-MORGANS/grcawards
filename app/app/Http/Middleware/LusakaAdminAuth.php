<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LusakaAdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Session::has('lusaka_admin_authenticated')) {
            return redirect()->route('lusaka.admin.login')->with('error', 'Please login to continue.');
        }

        return $next($request);
    }
}
