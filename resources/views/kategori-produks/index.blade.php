<!-- resources/views/kategori-produks/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Kategori Produk List</h1>
        <a href="{{ route('kategori-produks.create') }}" class="btn btn-primary">Add Kategori Produk</a>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kategoriProduks as $kategoriProduk)
                <tr>
                    <td>{{ $kategoriProduk->id }}</td>
                    <td>{{ $kategoriProduk->nama }}</td>
                    <td>
                        <a href="{{ route('kategori-produks.edit', $kategoriProduk->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('kategori-produks.destroy', $kategoriProduk->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this kategori produk?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
