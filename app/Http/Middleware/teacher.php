<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class teacher
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = auth()->user();

        if ($user && $user->role == "teacher") {
              if (!auth()->check()) {
            return redirect('/login');
        }

        if (auth()->user()->role !== 'teacher') {
            return redirect('/')->with('error', 'Unauthorized access');
        }

        return $next($request);
    }
    }
}
