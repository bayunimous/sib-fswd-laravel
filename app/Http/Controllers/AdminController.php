<?php

namespace App\Http\Controllers;

use App\Models\User;

class AdminController extends Controller
{
    public function dashboard()
    {
        $users = User::all(); // Mengambil semua data pengguna

        // Logika dan data lainnya untuk halaman dashboard admin
        return view('admin.dashboard', compact('users'));
    }
}
