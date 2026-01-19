<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Artikel;
use App\Models\Kategori;

class Berita extends Component
{
    use WithPagination;

    // Filter State
    public $search = '';
    public $kategoriSlug = 'semua';

    // Reset pagination saat filter berubah
    public function updatedSearch() { $this->resetPage(); }
    public function updatedKategoriSlug() { $this->resetPage(); }

    public function render()
    {
        // Query Dasar: Hanya yang statusnya 'terbit'
        $query = Artikel::with(['author', 'kategori'])
            ->where('status', 'terbit');

        // Filter Pencarian
        if ($this->search) {
            $query->where('judul', 'like', '%' . $this->search . '%');
        }

        // Filter Kategori
        if ($this->kategoriSlug !== 'semua') {
            $query->whereHas('kategori', function ($q) {
                $q->where('slug', $this->kategoriSlug);
            });
        }

        // Ambil Data
        // Kita ambil 1 untuk Headline, sisanya untuk Grid
        // (Logic ini bisa disesuaikan, disini kita pakai pagination biasa untuk simplisitas)
        $artikels = $query->latest('tanggal_terbit')->paginate(9);

        // Ambil semua kategori untuk dropdown
        $kategoris = Kategori::where('aktif', true)->get();

        return view('livewire.berita', [
            'artikels' => $artikels,
            'kategoris' => $kategoris
        ])->title('Berita & Opini - PSH UPTT');
    }
}
