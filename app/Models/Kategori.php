<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kategori extends Model
{
    // Mengizinkan kolom ini diisi massal
    protected $fillable = [
        'nama',
        'slug',
        'aktif',
    ];

    // Casting tipe data
    protected $casts = [
        'aktif' => 'boolean',
    ];

    // Relasi: Satu kategori punya banyak artikel
    public function artikels(): HasMany
    {
        return $this->hasMany(Artikel::class);
    }
}
