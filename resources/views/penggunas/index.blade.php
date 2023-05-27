<!-- resources/views/penggunas/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Pengguna</h1>
        <a href="{{ route('penggunas.create') }}" class="btn btn-primary mb-3">Tambah Pengguna</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($penggunas as $pengguna)
                    <tr>
                        <td>{{ $pengguna->id }}</td>
                        <td>{{ $pengguna->name }}</td>
                        <td>{{ $pengguna->email }}</td>
                        <td>
                            <a href="{{ route('penggunas.edit', $pengguna->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('penggunas.destroy', $pengguna->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
