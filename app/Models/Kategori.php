<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategoris'; // Nama tabel kategori dalam database

    // Definisikan relasi dengan model Produk
    public function produks()
    {
        return $this->hasMany(Produk::class, 'kategori_id');
    }
}
