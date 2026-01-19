<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pengaduan extends Model
{
    protected $fillable = [
        'kode_tiket',
        'nama_pelapor',
        'nomor_hp',
        'email_pelapor',
        'alamat_pelapor',
        'judul_kasus',
        'kategori_kasus', // Pidana, Perdata, dll
        'kronologi_kejadian',
        'file_bukti',
        'status', // baru, diproses, selesai, dll
        'prioritas', // rendah, sedang, tinggi
        'ditangani_oleh', // ID User (Dosen/Advokat)
    ];

    // Relasi: Pengaduan ditangani oleh satu User (Dosen/Tim)
    public function penanggungJawab(): BelongsTo
    {
        return $this->belongsTo(User::class, 'ditangani_oleh');
    }

    // Relasi: Pengaduan punya banyak riwayat perkembangan
    public function perkembanganKasus(): HasMany
    {
        return $this->hasMany(PerkembanganKasus::class);
    }

    // Opsional: Generate Kode Tiket Otomatis saat dibuat
    protected static function booted()
    {
        static::creating(function ($pengaduan) {
            // Contoh hasil: LBH-2024-RANDOM
            $pengaduan->kode_tiket = 'LBH-' . date('Y') . '-' . strtoupper(uniqid());
        });
    }
}
