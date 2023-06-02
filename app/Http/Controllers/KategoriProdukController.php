<?php

// app/Http/Controllers/KategoriProdukController.php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;

class KategoriProdukController extends Controller
{
    public function index()
    {
        $kategoriProduks = KategoriProduk::all();
        return view('kategori-produks.index', compact('kategoriProduks'));
    }

    public function create()
    {
        return view('kategori-produks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:3',
        ]);

        $kategoriProduk = KategoriProduk::create([
            'nama' => $request->input('nama'),
        ]);

        return redirect()->route('kategori-produks.index')->with('success', 'Kategori Produk created successfully');
    }

    public function edit(KategoriProduk $kategoriProduk)
    {
        return view('kategori-produks.edit', compact('kategoriProduk'));
    }

    public function update(Request $request, KategoriProduk $kategoriProduk)
    {
        $request->validate([
            'nama' => 'required|min:3',
        ]);

        $kategoriProduk->nama = $request->input('nama');
        $kategoriProduk->save();

        return redirect()->route('kategori-produks.index')->with('success', 'Kategori Produk updated successfully');
    }

    public function destroy(KategoriProduk $kategoriProduk)
    {
        $kategoriProduk->delete();

        return redirect()->route('kategori-produks.index')->with('success', 'Kategori Produk deleted successfully');
    }
}
