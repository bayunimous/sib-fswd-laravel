<!-- resources/views/kategori-produks/create.blade.php -->

@extends('layouts.app')

@section('content')
    <!-- create.blade.php -->
    <form action="{{ route('kategori-produks.store') }}" method="POST">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="nama">Nama Kategori</label>
            <input type="text" name="nama" id="nama" class="form-control">
            @error('nama')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
