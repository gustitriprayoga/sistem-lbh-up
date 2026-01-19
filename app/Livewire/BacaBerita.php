<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Artikel;

class BacaBerita extends Component
{
    public $slug;
    public $artikel;
    public $beritaTerkait;

    public function mount($slug)
    {
        $this->slug = $slug;

        // Cari artikel berdasarkan slug, jika tidak ada tampilkan 404
        $this->artikel = Artikel::with(['author', 'kategori'])
            ->where('slug', $slug)
            ->where('status', 'terbit')
            ->firstOrFail();

        // Ambil 3 berita terbaru lainnya (kecuali berita yang sedang dibuka)
        $this->beritaTerkait = Artikel::where('status', 'terbit')
            ->where('id', '!=', $this->artikel->id)
            ->latest()
            ->take(3)
            ->get();
    }

    public function render()
    {
        return view('livewire.baca-berita')
            ->title($this->artikel->judul . ' - PSH UPTT');
    }
}
