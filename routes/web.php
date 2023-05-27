<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\GrupPenggunaController;
use App\Http\Controllers\PenggunaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [SiswaController::class, 'landing'])->name('landing');

Route::resource('siswa', SiswaController::class);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Rute untuk Slider
Route::resource('sliders', SliderController::class)->name('index', 'sliders.index');

// Rute untuk Kategori Produk
Route::resource('kategori-produks', KategoriProdukController::class)->name('index', 'kategori-produks.index');

// Rute untuk Produk
Route::resource('produks', ProdukController::class)->name('index', 'produks.index');
Route::post('/produk', [ProdukController::class, 'store'])->name('produk.store');
Route::put('/produk/{produk}', 'ProdukController@update')->name('produk.update');

// Rute untuk Grup Pengguna
Route::resource('grup-penggunas', GrupPenggunaController::class)->name('index', 'grup-penggunas.index');;

// Rute untuk Pengguna
Route::resource('penggunas', PenggunaController::class)->name('index', 'penggunas.index');
