<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Student
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
        if (Auth::check()) {
            if (Auth::user()->isStudent()) {
                return $next($request);
            } else if (Auth::user()->isSupervisor()) {
                return redirect()->route('staff.dashboard')->with('error', 'Please login as a student to access that page.');
            } else if (Auth::user()->isAdmin()) {
                return redirect()->route('admin.dashboard')->with('error', 'Please login as a student to access that page.');
            }
        }

        return redirect('/')->with('error', 'Access Denied');
    }
}
