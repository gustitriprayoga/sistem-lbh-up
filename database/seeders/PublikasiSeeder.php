<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Publikasi;

class PublikasiSeeder extends Seeder
{
    public function run(): void
    {
        Publikasi::create([
            'judul' => 'Analisis Hukum Adat Kampar dalam Penyelesaian Sengketa Tanah',
            'penulis' => 'Dr. Maya Intan Pratiwi, S.H., M.H', // [cite: 3]
            'nama_jurnal' => 'Jurnal Hukum Riau',
            'jenis' => 'jurnal_nasional',
            'tahun' => 2024,
            'link_url' => 'https://journal.univpahlawan.ac.id',
        ]);

        Publikasi::create([
            'judul' => 'Perlindungan Hukum Terhadap Korban KDRT',
            'penulis' => 'Tim PSH UPTT',
            'nama_jurnal' => 'International Journal of Law',
            'jenis' => 'jurnal_internasional',
            'tahun' => 2023,
        ]);
    }
}
