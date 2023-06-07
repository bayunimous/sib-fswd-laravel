<?php

// app/Http/Controllers/API/ProdukController.php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::all();
        return response()->json([
            'status' => 200,
            'message' => 'Data produk berhasil ditampilkan',
            'data' => $produks,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'kategori_id' => 'required',
        ]);

        $produk = Produk::create($request->all());

        return response()->json($produk, 201);
    }

    public function show($id)
    {
        $produk = Produk::findOrFail($id);
        return response()->json($produk);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'kategori_id' => 'required',
        ]);

        $produk = Produk::findOrFail($id);
        $produk->update($request->all());

        return response()->json($produk, 200);
    }

    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return response()->json(null, 204);
    }
}
