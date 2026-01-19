<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // [cite_start]// 1. Ketua PSH (Super Admin) - Data dari Dokumen [cite: 3]
        $ketua = User::create([
            'name' => 'Dr. Maya Intan Pratiwi, S.H., M.H',
            'email' => 'admin@psh-uptt.ac.id',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
        ]);
        $ketua->assignRole('super_admin');

        // 2. Dosen Peneliti / Tim Hukum (Tim Ahli)
        $dosen = User::create([
            'name' => 'Budi Santoso, S.H., M.H.',
            'email' => 'dosen@psh-uptt.ac.id',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
        ]);
        $dosen->assignRole('tim_ahli');

        // 3. Staff Admin (Staff)
        $staff = User::create([
            'name' => 'Admin Staff',
            'email' => 'staff@psh-uptt.ac.id',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
        ]);
        $staff->assignRole('staff');
    }
}
