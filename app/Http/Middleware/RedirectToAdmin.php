<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectToAdmin
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // If the user is authenticated and has an admin role
        if (auth()->check() && auth()->user()->role === 'admin') {
            return redirect('/admin'); // Redirect to admin page
        }

        return $next($request); // Continue for other users
    }
}
