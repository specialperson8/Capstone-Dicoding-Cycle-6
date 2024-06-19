<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAuth
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
        // Jika pengguna sudah terautentikasi, lanjutkan request
        if (Auth::check()) {
            return $next($request);
        }

        // Jika pengguna belum terautentikasi, biarkan akses dengan keterbatasan
        // Anda bisa menambahkan logika tambahan di sini jika perlu

        return $next($request);
    }
}
