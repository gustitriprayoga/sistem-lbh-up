<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\Profil;
use App\Livewire\BacaBerita;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Jalur untuk halaman publik (Guest) diakses oleh masyarakat umum.
| Admin Panel sudah dihandle otomatis oleh Filament di /admin.
|
*/

Route::name('guest.')->group(function () {
    Route::get('/', Home::class)->name('home');
    Route::get('/profil', Profil::class)->name('profil');
    Route::get('/layanan-lbh', App\Livewire\LayananLbh::class)->name('layanan');
    Route::get('/cek-kasus', App\Livewire\CekKasus::class)->name('cek-kasus');
    Route::get('/riset', App\Livewire\Riset::class)->name('riset');

    // Berita
    Route::get('/berita', App\Livewire\Berita::class)->name('berita');
    Route::get('/berita/{slug}', BacaBerita::class)->name('baca-berita');

    // Konsultasi
    Route::get('/ajukan-konsultasi', App\Livewire\AjukanKonsultasi::class)->name('ajukan');
});
