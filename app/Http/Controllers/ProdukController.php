<?php

// app/Http/Controllers/ProdukController.php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::all();
        return view('produks.index', compact('produks'));
    }

    public function create()
    {
        $kategoris = Kategori::all();
        return view('produks.create', compact('kategoris'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kategori_id' => 'required|exists:kategori_produks,id',
        ]);

        $produk = Produk::create([
            'nama' => $request->input('nama'),
            'kategori_id' => $request->input('kategori_id'),
        ]);

        return redirect()->route('produks.index')->with('success', 'Produk created successfully');
    }

    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        $kategoris = Kategori::all();
        return view('produks.edit', compact('produk', 'kategoris'));
    }

    public function update(Request $request, Produk $produk)
    {
        $request->validate([
            'nama' => 'required',
            'kategori_id' => 'required|exists:kategori_produks,id',
        ]);

        $produk->nama = $request->input('nama');
        $produk->kategori_id = $request->input('kategori_id');
        $produk->save();

        return redirect()->route('produks.index')->with('success', 'Produk updated successfully');
    }

    public function destroy(Produk $produk)
    {
        $produk->delete();

        return redirect()->route('produks.index')->with('success', 'Produk deleted successfully');
    }
}
