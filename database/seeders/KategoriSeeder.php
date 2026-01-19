<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        Kategori::create(['nama' => 'Berita Kegiatan', 'slug' => 'berita-kegiatan', 'aktif' => true]);
        Kategori::create(['nama' => 'Opini Hukum', 'slug' => 'opini-hukum', 'aktif' => true]);
        Kategori::create(['nama' => 'Edukasi Masyarakat', 'slug' => 'edukasi-masyarakat', 'aktif' => true]);
    }
}
