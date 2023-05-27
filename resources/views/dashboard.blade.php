<!-- resources/views/dashboard.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Dashboard</h1>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Slider</div>
                    <div class="card-body">
                        <a href="{{ route('sliders.index') }}" class="btn btn-primary">Lihat Slider</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Kategori Produk</div>
                    <div class="card-body">
                        <a href="{{ route('kategori-produks.index') }}" class="btn btn-primary">Lihat Kategori Produk</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Produk</div>
                    <div class="card-body">
                        <a href="{{ route('produks.index') }}" class="btn btn-primary">Lihat Produk</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Grup Pengguna</div>
                    <div class="card-body">
                        <a href="{{ route('grup-penggunas.index') }}" class="btn btn-primary">Lihat Grup Pengguna</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Pengguna</div>
                    <div class="card-body">
                        <a href="{{ route('penggunas.index') }}" class="btn btn-primary">Lihat Pengguna</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
