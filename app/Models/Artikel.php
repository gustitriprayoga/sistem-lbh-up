<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Artikel extends Model
{
    protected $fillable = [
        'user_id',
        'kategori_id',
        'judul',
        'slug',
        'gambar_sampul',
        'ringkasan',
        'isi',
        'status', // draf, terbit, arsip
        'tanggal_terbit',
    ];

    protected $casts = [
        'tanggal_terbit' => 'date',
    ];

    // Relasi: Artikel dimiliki oleh satu Penulis (User)
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relasi: Artikel masuk ke satu Kategori
    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class);
    }
}
