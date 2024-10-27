<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsTeacher
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
        if ($request->session()->get('user_type') !== 'teacher') {
            return redirect('/login#teacher')->withErrors(['message' => 'Silakan login untuk melanjutkan.']);
        }

        return $next($request);
    }
}
