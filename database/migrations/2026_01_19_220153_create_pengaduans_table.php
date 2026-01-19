<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id();
            $table->string('kode_tiket')->unique();

            // Data Pelapor (Masyarakat)
            $table->string('nama_pelapor');
            $table->string('nomor_hp');
            $table->string('email_pelapor')->nullable();
            $table->text('alamat_pelapor')->nullable();

            // Detail Masalah
            $table->string('judul_kasus');
            $table->string('kategori_kasus');
            $table->text('kronologi_kejadian');
            $table->string('file_bukti')->nullable();
            $table->enum('status', ['baru', 'diverifikasi', 'diproses', 'selesai', 'ditolak'])->default('baru');
            $table->enum('prioritas', ['rendah', 'sedang', 'tinggi'])->default('sedang');

            // Relasi ke User (Dosen/Tim yang menangani)
            $table->foreignId('ditangani_oleh')->nullable()->constrained('users');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduans');
    }
};
