<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next, $role)
    {
        // if user has the right role
        if ($request->user() && $request->user()->role == $role) {
            return $next($request);
        }
        // Jika tidak memiliki role yang sesuai, redirect atau berikan pesan error
        return redirect('/'); // Ganti dengan route atau respons yang sesuai
    }
}
