<!-- resources/views/grup-penggunas/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Grup Pengguna</h1>
        <a href="{{ route('grup-penggunas.create') }}" class="btn btn-primary mb-3">Tambah Grup Pengguna</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Grup</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($grupPenggunas as $grupPengguna)
                    <tr>
                        <td>{{ $grupPengguna->id }}</td>
                        <td>{{ $grupPengguna->nama }}</td>
                        <td>
                            <a href="{{ route('grup-penggunas.edit', $grupPengguna->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('grup-penggunas.destroy', $grupPengguna->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus grup pengguna ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
