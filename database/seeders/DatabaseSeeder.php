<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,      // Harus pertama
            UserSeeder::class,      // Harus kedua (butuh Role)
            KategoriSeeder::class,
            ArtikelSeeder::class,   // Butuh User & Kategori
            PublikasiSeeder::class,
            MitraSeeder::class,
            PengaduanSeeder::class, // Butuh User (Dosen)
        ]);
    }
}
