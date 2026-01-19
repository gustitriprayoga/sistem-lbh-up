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
        Schema::create('artikels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('kategori_id')->constrained('kategoris')->cascadeOnDelete();

            $table->string('judul');
            $table->string('slug')->unique();
            $table->string('gambar_sampul')->nullable();
            $table->text('ringkasan')->nullable();
            $table->longText('isi');
            $table->enum('status', ['draf', 'terbit', 'arsip'])->default('draf');
            $table->date('tanggal_terbit')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artikels');
    }
};
