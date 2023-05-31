<?php

namespace App\Http\Middleware;

use Closure;

class DisableBackButton
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
        $response = $next($request);

        // Prevent caching for all responses
        $response->header('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0');

        // Set a session variable to indicate if the user is logged in
        if (auth()->check()) {
            session(['authenticated' => true]);
        } else {
            session(['authenticated' => false]);
        }

        return $response;
    }
}
