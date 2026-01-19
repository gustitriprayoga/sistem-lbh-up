<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Artikel;
use App\Models\User;
use App\Models\Kategori;

class ArtikelSeeder extends Seeder
{
    public function run(): void
    {
        // Ambil User dan Kategori
        $penulis = User::where('email', 'admin@psh-uptt.ac.id')->first();
        $kategoriBerita = Kategori::where('slug', 'berita-kegiatan')->first();
        $kategoriEdukasi = Kategori::where('slug', 'edukasi-masyarakat')->first();

        if ($penulis && $kategoriBerita) {
            Artikel::create([
                'user_id' => $penulis->id,
                'kategori_id' => $kategoriBerita->id,
                'judul' => 'Peresmian Website Baru PSH UPTT',
                'slug' => 'peresmian-website-baru-psh-uptt',
                'ringkasan' => 'PSH Universitas Pahlawan meluncurkan website layanan hukum digital.',
                'isi' => '<p>Pusat Studi Hukum (PSH) Universitas Pahlawan Tuanku Tambusai resmi meluncurkan...</p>', // [cite: 1, 2]
                'status' => 'terbit',
                'tanggal_terbit' => now(),
            ]);
        }

        if ($penulis && $kategoriEdukasi) {
            Artikel::create([
                'user_id' => $penulis->id,
                'kategori_id' => $kategoriEdukasi->id,
                'judul' => 'Cara Mengurus Sertifikat Tanah Warisan',
                'slug' => 'cara-mengurus-sertifikat-tanah-warisan',
                'ringkasan' => 'Panduan singkat bagi masyarakat Kampar mengurus tanah waris.',
                'isi' => '<p>Berikut adalah langkah-langkah hukum...</p>',
                'status' => 'terbit',
                'tanggal_terbit' => now(),
            ]);
        }
    }
}
