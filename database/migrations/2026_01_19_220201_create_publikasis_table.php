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
        Schema::create('publikasis', function (Blueprint $table) {
        $table->id();
        $table->string('judul');
        $table->string('penulis');
        $table->string('nama_jurnal')->nullable();

        // Jenis publikasi
        $table->enum('jenis', ['jurnal_nasional', 'jurnal_internasional', 'buku', 'prosiding']);

        $table->year('tahun');
        $table->string('link_url')->nullable(); // Link ke website jurnal
        $table->string('file_pdf')->nullable(); // Upload PDF lokal
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publikasis');
    }
};
