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
            // Teacher user, allow access to the requested route
            // Retrieve the students related to the teacher
            $students = $user->students; // Assuming a relationship exists in the User model

            // You can now use $students to access the data of all students related to this teacher

            return $next($request);
        } else {
            // Handle other cases here
            return redirect('/')->with('error', 'Unauthorized access');
        }
    }
}
