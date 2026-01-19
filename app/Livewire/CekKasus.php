<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Pengaduan;
use Livewire\Attributes\Url; // Agar kode tiket bisa dibaca dari URL

class CekKasus extends Component
{
    #[Url] // Memungkinkan akses via link: domain.com/cek-kasus?ticket=LBH-2024-XXX
    public $ticket = '';

    public $searchResult = null;
    public $isSearched = false;

    public function mount()
    {
        // Jika ada parameter di URL, langsung cari
        if ($this->ticket) {
            $this->cariTiket();
        }
    }

    public function cariTiket()
    {
        $this->validate([
            'ticket' => 'required|string|min:5'
        ]);

        // Cari Pengaduan berdasarkan Kode Tiket
        // Pastikan load relasi 'perkembanganKasus' dan 'penanggungJawab'
        $this->searchResult = Pengaduan::with(['perkembanganKasus', 'penanggungJawab'])
            ->where('kode_tiket', $this->ticket)
            ->first();

        $this->isSearched = true;
    }

    public function render()
    {
        return view('livewire.cek-kasus')
            ->title('Cek Status Kasus - PSH UPTT');
    }
}
