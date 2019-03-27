<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            switch ($guard) {
                case 'admin':
                    return redirect()->route('admin.dashboard');
                    break;
                case 'teacher':
                    return redirect()->route('teacher.dashboard');
                    break;
                case 'student':
                    return redirect()->route('student.dashboard');
                    break;
                case 'registrar':
                    return redirect()->route('registrar.dashboard');
                    break;
                default:
                    return redirect(route('home.main'));
                    break;
            }
        }

        return $next($request);
    }
}
