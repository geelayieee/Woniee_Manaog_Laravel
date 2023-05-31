<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Show the login form.
     */
    public function create()
    {
        return view('login');
    }

    /**
     * Log in the user.
     */
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Add cache-control headers to prevent caching
            $response = redirect('/dashboard')->with('success', 'Login successful!');
            $response->header('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0');

            return $response;
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    /**
     * Log out the user.
     */
    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Add cache-control headers to prevent caching
        $response = redirect('/login')->with('success', 'Logout successful!');
        $response->header('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0');

        return $response;
    }
}
