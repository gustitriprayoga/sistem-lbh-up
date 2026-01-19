<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PerkembanganKasus extends Model
{
    // Karena nama tabel jamak tidak standar (bukan akhiran s biasa),
    // kadang perlu didefinisikan manual jika Laravel bingung.
    protected $table = 'perkembangan_kasuses';

    protected $fillable = [
        'pengaduan_id',
        'user_id', // Siapa yang input update ini
        'judul_aktivitas',
        'keterangan',
        'file_lampiran',
        'tanggal',
    ];

    protected $casts = [
        'tanggal' => 'date',
    ];

    // Relasi kembali ke Pengaduan induk
    public function pengaduan(): BelongsTo
    {
        return $this->belongsTo(Pengaduan::class);
    }

    // Relasi ke User yang mengupdate
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
