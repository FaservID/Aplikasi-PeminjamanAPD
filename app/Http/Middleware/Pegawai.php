<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Pegawai
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
            return redirect('login')->with('error', "You don't have admin access.");
        }
        if (auth()->user()->level == 'pegawai') {
            return $next($request);
        }
        return redirect('dashboard')->with('error', "You don't have admin access.");
    }
}
