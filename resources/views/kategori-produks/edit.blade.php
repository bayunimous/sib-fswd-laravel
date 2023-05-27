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
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $kategoriProduk->nama }}">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
