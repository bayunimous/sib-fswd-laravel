<?php

// app/Http/Controllers/GrupPenggunaController.php

namespace App\Http\Controllers;

use App\Models\GrupPengguna;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;

class GrupPenggunaController extends Controller
{
    public function index()
    {
        $grupPenggunas = GrupPengguna::all();
        return view('grup-penggunas.index', compact('grupPenggunas'));
    }

    public function create()
    {
        return view('grup-penggunas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:3',
        ]);

        $grupPengguna = GrupPengguna::create([
            'nama' => $request->input('nama'),
        ]);

        return redirect()->route('grup-penggunas.index')->with('success', 'Grup Pengguna created successfully');
    }

    public function edit(GrupPengguna $grupPengguna)
    {
        return view('grup-penggunas.edit', compact('grupPengguna'));
    }

    public function update(Request $request, GrupPengguna $grupPengguna)
    {
        $request->validate([
            'nama' => 'required|min:3',
        ]);

        $grupPengguna->nama = $request->input('nama');
        $grupPengguna->save();

        return redirect()->route('grup-penggunas.index')->with('success', 'Grup Pengguna updated successfully');
    }

    public function destroy(GrupPengguna $grupPengguna)
    {
        $grupPengguna->delete();

        return redirect()->route('grup-penggunas.index')->with('success', 'Grup Pengguna deleted successfully');
    }
}
