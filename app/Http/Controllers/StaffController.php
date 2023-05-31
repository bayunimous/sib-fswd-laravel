<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class StaffController extends Controller
{
    public function dashboard()
    {
        $users = User::all(); // Mengambil semua data pengguna

        // Logika dan data lainnya untuk halaman dashboard staff
        return view('staff.dashboard', compact('users'));
    }


    // Tambahkan method lain sesuai kebutuhan
}
