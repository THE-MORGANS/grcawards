<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LusakaAdminController extends Controller
{
    // Simple hardcoded credentials - change these as needed
    private const ADMIN_USERNAME = 'lusaka_admin';
    private const ADMIN_PASSWORD = 'LusakaSummit2026!';

    public function showLoginForm()
    {
        // If already logged in, redirect to dashboard
        if (Session::has('lusaka_admin_authenticated')) {
            return redirect()->route('lusaka.admin.dashboard');
        }
        
        return view('auth.lusaka_admin_login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $username = $request->input('username');
        $password = $request->input('password');

        if ($username === self::ADMIN_USERNAME && $password === self::ADMIN_PASSWORD) {
            Session::put('lusaka_admin_authenticated', true);
            Session::put('lusaka_admin_username', $username);
            
            return redirect()->route('lusaka.admin.dashboard')->with('success', 'Welcome back!');
        }

        return back()->withErrors([
            'credentials' => 'Invalid username or password.',
        ])->withInput($request->only('username'));
    }

    public function logout()
    {
        Session::forget('lusaka_admin_authenticated');
        Session::forget('lusaka_admin_username');
        
        return redirect()->route('lusaka.admin.login')->with('success', 'Logged out successfully.');
    }
}
