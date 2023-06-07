<?php

//app/Http/Controllers/API/KategoriProdukController.php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\KategoriProduk;
use Illuminate\Http\Request;

class KategoriProdukController extends Controller
{
    public function index()
    {
        $kategoriProduks = KategoriProduk::all();
        return response()->json([
            'status' => 200,
            'message' => 'Data produk berhasil ditampilkan',
            'data' => $kategoriProduks,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        $kategoriProduks = KategoriProduk::create($request->all());

        return response()->json([
            'status' => 200,
            'message' => 'Data produk berhasil ditambahkan',
            'data' => $kategoriProduks,
        ]);
    }

    public function show($id)
    {
        $kategoriProduk = KategoriProduk::findOrFail($id);
        return response()->json($kategoriProduk);
    }

    public function update(Request $request, KategoriProduk $kategoriProduk)
    {
        $request->validate([
            'nama' => 'required|min:3',
        ]);

        $kategoriProduk->nama = $request->input('nama');
        $kategoriProduk->save();

        return response()->json([
            'status' => 200,
            'message' => 'Data produk berhasil diupdate',
            'data' => $kategoriProduk,
        ]);
    }

    public function destroy(KategoriProduk $kategoriProduk)
    {
        $kategoriProduk->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Data produk berhasil dihapus',
            'data' => $kategoriProduk,
        ]);
    }
}
