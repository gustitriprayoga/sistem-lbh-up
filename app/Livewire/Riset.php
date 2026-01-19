<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Publikasi;

class Riset extends Component
{
    use WithPagination;

    // Filter State
    public $search = '';
    public $kategori = 'semua'; // nasional, internasional, buku
    public $tahun = 'semua';

    // Reset pagination saat filter berubah
    public function updatedSearch() { $this->resetPage(); }
    public function updatedKategori() { $this->resetPage(); }

    public function render()
    {
        // Query Builder
        $query = Publikasi::query();

        // Filter Pencarian
        if ($this->search) {
            $query->where('judul', 'like', '%' . $this->search . '%')
                  ->orWhere('penulis', 'like', '%' . $this->search . '%');
        }

        // Filter Kategori
        if ($this->kategori !== 'semua') {
            $query->where('jenis', $this->kategori);
        }
        
        // Filter Tahun
        if ($this->tahun !== 'semua') {
            $query->where('tahun', $this->tahun);
        }

        // Ambil Data (Paginate 9 item per halaman)
        $publikasis = $query->latest('tahun')->paginate(9);

        // Ambil list tahun unik untuk dropdown filter
        $years = Publikasi::select('tahun')->distinct()->orderBy('tahun', 'desc')->pluck('tahun');

        return view('livewire.riset', [
            'publikasis' => $publikasis,
            'years' => $years
        ])->title('Riset & Publikasi - PSH UPTT');
    }
}
