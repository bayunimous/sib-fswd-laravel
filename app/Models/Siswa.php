<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa'; // Nama tabel di database

    protected $fillable = ['nama', 'email', 'umur', 'role']; // Kolom yang dapat diisi

    protected $dates = ['created_at', 'updated_at']; // Kolom tipe tanggal

    // Definisikan relasi atau hubungan antara model Siswa dengan model lain di sini
}
