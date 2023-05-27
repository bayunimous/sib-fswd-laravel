<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $fillable = ['nama', 'kategori_id'];

    public function kategori()
    {
        return $this->belongsTo(KategoriProduk::class, 'kategori_id');
    }
}
