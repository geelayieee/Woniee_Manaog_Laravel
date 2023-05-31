<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class DashboardController extends Controller
{
    /**
     * Show the dashboard.
     */
    public function index()
    {
        if (!Auth::check()) {
            return redirect()->route('login.create');
        }

        // Add cache-control headers to prevent caching
        $response = Response::view('dashboard');
        $response->header('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0');

        return $response;
    }

    /**
     * Log out the user.
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Clear the authenticated session
        session()->forget('authenticated');

        return redirect('/login')->with('success', 'Logout successful!');
    }
}

?>