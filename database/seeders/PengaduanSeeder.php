<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pengaduan;
use App\Models\User;
use Illuminate\Support\Str;

class PengaduanSeeder extends Seeder
{
    public function run(): void
    {
        $dosen = User::where('email', 'dosen@psh-uptt.ac.id')->first();

        // Kasus 1: Baru
        Pengaduan::create([
            'kode_tiket' => 'LBH-2024-001',
            'nama_pelapor' => 'Pak Asep Suhendar',
            'nomor_hp' => '081234567890',
            'alamat_pelapor' => 'Desa Kualu, Kampar',
            'judul_kasus' => 'Penyerobotan Lahan Kebun Sawit',
            'kategori_kasus' => 'Perdata',
            'kronologi_kejadian' => 'Tanah saya dipasang patok oleh perusahaan...',
            'status' => 'baru',
            'prioritas' => 'sedang',
        ]);

        // Kasus 2: Diproses
        if ($dosen) {
            Pengaduan::create([
                'kode_tiket' => 'LBH-2024-002',
                'nama_pelapor' => 'Ibu Siti Aminah',
                'nomor_hp' => '08987654321',
                'alamat_pelapor' => 'Bangkinang Kota',
                'judul_kasus' => 'KDRT dan Hak Asuh Anak',
                'kategori_kasus' => 'Pidana',
                'kronologi_kejadian' => 'Suami melakukan kekerasan fisik...',
                'status' => 'diproses',
                'prioritas' => 'tinggi',
                'ditangani_oleh' => $dosen->id,
            ]);
        }
    }
}
