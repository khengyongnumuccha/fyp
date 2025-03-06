<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class NormalUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //if user is not logged in
        if (!Auth::check()){
            return redirect()->route('login');
        }

        $userRoles = Auth::user()->role;

        //admin
        if ($userRoles == 1){
            return redirect()->route('admin.dashboard');
        }
        //normal user
        elseif ($userRoles == 2){
            return $next($request);
        }
    }
}
