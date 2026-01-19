<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mitra;

class MitraSeeder extends Seeder
{
    public function run(): void
    {
        Mitra::create(['nama_instansi' => 'Polres Kampar', 'jenis' => 'pemerintah', 'aktif' => true]);
        Mitra::create(['nama_instansi' => 'LBH Pekanbaru', 'jenis' => 'ngo', 'aktif' => true]);
        Mitra::create(['nama_instansi' => 'Universitas Riau', 'jenis' => 'kampus', 'aktif' => true]);
    }
}
