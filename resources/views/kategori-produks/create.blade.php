<!-- resources/views/kategori-produks/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Kategori Produk</h1>

        <form action="{{ route('kategori-produks.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="nama">Nama Kategori</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
