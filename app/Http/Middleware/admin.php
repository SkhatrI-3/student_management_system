<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user() && auth()->user()->role == "admin") {
            return $next($request); // Admin user, allow access to the requested route
        } 
        else {
            // Handle other cases here
            return redirect('/')->with('error', 'Unauthorized access'); // Redirect unauthorized users
        }
    }
}
