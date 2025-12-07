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
        $user = auth()->user();

        if ($user && $user->role == "admin") {
            // Admin user, allow access to the requested route
            return $next($request);
        } elseif ($user && $user->role == "teacher") {
            // Additional logic for teachers
            // You can customize this logic based on your requirements
            return $next($request);
        } elseif ($user && $user->role == "student") {
            // Additional logic for students
            // You can customize this logic based on your requirements
            return $next($request);
        } else {
            // Handle other cases here
            return redirect('/')->with('error', 'Unauthorized access');
        }
    }
    }

