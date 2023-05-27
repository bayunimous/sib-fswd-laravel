<!-- resources/views/produks/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Produk List</h1>
        <a href="{{ route('produks.create') }}" class="btn btn-primary">Add Produk</a>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Kategori</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($produks as $produk)
                <tr>
                    <td>{{ $produk->id }}</td>
                    <td>{{ $produk->nama }}</td>
                    <td>{{ $produk->harga }}</td>
                    <td>{{ $produk->kategori->nama }}</td>
                    <td>
                        <a href="{{ route('produks.edit', $produk->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('produks.destroy', $produk->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this produk?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
