<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publikasi extends Model
{
    protected $fillable = [
        'judul',
        'penulis',
        'nama_jurnal',
        'jenis', // jurnal_nasional, jurnal_internasional, buku
        'tahun',
        'link_url',
        'file_pdf',
    ];

    protected $casts = [
        'tahun' => 'integer',
    ];
}
