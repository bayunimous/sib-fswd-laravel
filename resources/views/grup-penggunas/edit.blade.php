<!-- resources/views/grup-penggunas/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Grup Pengguna</h1>

        <form action="{{ route('grup-penggunas.update', $grupPengguna->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nama">Nama Grup</label>
                <input type="text" name="nama" id="nama" class="form-control" value="{{ $grupPengguna->nama }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('grup-penggunas.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
