<!-- produk/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Produk</div>

                    <div class="card-body">
                        <form action="{{ route('produk.update', $produk->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="nama">Nama Produk</label>
                                <input type="text" name="nama" class="form-control" value="{{ $produk->nama }}" required>
                            </div>

                            <div class="form-group">
                                <label for="kategori">Kategori</label>
                                <select name="kategori" class="form-control" required>
                                    @foreach ($kategoris as $kategori)
                                        <option value="{{ $kategori->id }}" {{ $produk->kategori_id == $kategori->id ? 'selected' : '' }}>
                                            {{ $kategori->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="number" name="harga" class="form-control" value="{{ $produk->harga }}" required>
                            </div>

                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea name="deskripsi" class="form-control" required>{{ $produk->deskripsi }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
