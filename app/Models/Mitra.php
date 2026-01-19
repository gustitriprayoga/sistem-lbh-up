<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    protected $fillable = [
        'nama_instansi',
        'logo',
        'jenis', // pemerintah, swasta, dll
        'website',
        'aktif',
    ];

    protected $casts = [
        'aktif' => 'boolean',
    ];
}
