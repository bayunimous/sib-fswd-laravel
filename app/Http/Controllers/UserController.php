<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class UserController extends Controller
{
    public function dashboard()
    {
        $products = Produk::all(); // Mengambil semua data produk
        // Logika dan data lainnya untuk halaman dashboard user
        return view('user.dashboard', compact('products'));
    }
}
