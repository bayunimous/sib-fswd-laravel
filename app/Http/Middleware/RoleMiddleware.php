<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle($request, Closure $next, $role)
    {
        // Memeriksa apakah pengguna terotentikasi
        if (Auth::check()) {
            // Mendapatkan ID peran yang diinginkan
            $roleId = null;
            switch ($role) {
                case 'admin':
                    $roleId = 1;
                    break;
                case 'staff':
                    $roleId = 2;
                    break;
                case 'user':
                    $roleId = 3;
                    break;
            }

            // Memeriksa apakah pengguna memiliki peran yang sesuai
            if ($roleId && Auth::user()->role_id == $roleId) {
                return $next($request);
            }
        }

        // Jika peran tidak sesuai, lakukan penanganan sesuai kebutuhan Anda (misalnya, tampilkan halaman akses ditolak atau redirect ke halaman lain)
        return redirect()->route('home')->with('error', 'Access denied.');
    }
}
