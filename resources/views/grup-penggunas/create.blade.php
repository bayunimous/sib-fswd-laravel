<!-- resources/views/grup-penggunas/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Grup Pengguna</h1>

        <form action="{{ route('grup-penggunas.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="nama">Nama Grup</label>
                <input type="text" name="nama" id="nama" class="form-control" required>
                @error('nama')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('grup-penggunas.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
