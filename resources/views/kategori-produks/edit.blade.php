<!-- resources/views/kategori-produks/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Kategori Produk</h1>

        <form action="{{ route('kategori-produks.update', $kategoriProduk->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama Kategori</label>
                <input type="text" name="nama" id="nama" class="form-control" value="{{ $kategoriProduk->nama }}">
                @error('nama')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
