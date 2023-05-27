<?php

// app/Http/Controllers/PenggunaController.php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class PenggunaController extends Controller
{
    public function index()
    {
        $penggunas = Pengguna::all();
        return view('penggunas.index', compact('penggunas'));
    }

    public function create()
    {
        return view('penggunas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:penggunas',
            'password' => 'required|confirmed',
        ]);

        $nama = $request->input('name');
        // ...



        // Atau Anda dapat menggunakan metode lain untuk membuat pengguna baru
        $pengguna = new Pengguna();
        $pengguna->name = $request->input('name');
        $pengguna->email = $request->input('email');
        $pengguna->password = Hash::make($request->input('password'));
        $pengguna->save();

        return redirect()->route('penggunas.index')
            ->with('success', 'Pengguna berhasil ditambahkan.');
    }

    public function edit(Pengguna $pengguna)
    {
        return view('penggunas.edit', compact('pengguna'));
    }

    public function update(Request $request, Pengguna $pengguna)
    {
        $request->validate([
            'nama' => 'required',
            'grup_pengguna_id' => 'required|exists:grup_penggunas,id',
        ]);

        $pengguna->nama = $request->input('nama');
        $pengguna->grup_pengguna_id = $request->input('grup_pengguna_id');
        $pengguna->save();

        return redirect()->route('penggunas.index')->with('success', 'Pengguna updated successfully');
    }

    public function destroy(Pengguna $pengguna)
    {
        $pengguna->delete();

        return redirect()->route('penggunas.index')->with('success', 'Pengguna deleted successfully');
    }
}
