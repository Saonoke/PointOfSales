<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->session()->exists("userData")) {
            if (session('userData.role') == 'admin') {
                return redirect("/adminDashboard");
            } else {
                return redirect("/cashierDashboard");
            };
        } else {
            return $next($request);
        }    }
}
