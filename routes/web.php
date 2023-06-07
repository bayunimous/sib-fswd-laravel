<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\GrupPenggunaController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Middleware\RoleMiddleware;
use App\Http\Controllers\ApiProdukController;



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


// Rute untuk login dan logout
Route::get('/login', function () {
    return view('auth.login');
})->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'login'])->name('login.submit')->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// Rute untuk halaman utama
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rute untuk halaman utama
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Rute untuk halaman registrasi
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

Route::middleware('role:admin')->group(function () {
    // Route yang hanya dapat diakses oleh admin
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::resource('pengguna', PenggunaController::class);
});

Route::middleware('role:staff')->group(function () {
    // Route yang hanya dapat diakses oleh staff
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::resource('produk', ProdukController::class)->only(['index', 'show']);
});

Route::middleware('role:user')->group(function () {
    // Route yang hanya dapat diakses oleh user
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::resource('produk', ProdukController::class)->only(['index', 'show']);
});

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index')->middleware('role:admin');
Route::get('/staff', [StaffController::class, 'index'])->name('staff.index')->middleware('role:staff');
Route::get('/user', [UserController::class, 'index'])->name('user.index')->middleware('role:user');
