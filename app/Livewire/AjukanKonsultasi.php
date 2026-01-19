<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Pengaduan;
use Illuminate\Support\Str;

class AjukanKonsultasi extends Component
{
    use WithFileUploads;

    // Data Pelapor
    public $nama_pelapor;
    public $nomor_hp;
    public $email_pelapor;
    public $alamat_pelapor;

    // Data Kasus
    public $judul_kasus;
    public $kategori_kasus = 'Pidana'; // Default
    public $kronologi_kejadian;
    public $file_bukti;

    // UI State
    public $step = 1; // 1: Identitas, 2: Detail Kasus, 3: Selesai
    public $ticketCode = '';

    protected $rules = [
        'nama_pelapor' => 'required|min:3',
        'nomor_hp' => 'required|numeric|min:10',
        'judul_kasus' => 'required|min:5',
        'kategori_kasus' => 'required',
        'kronologi_kejadian' => 'required|min:50', // Minimal 50 karakter agar jelas
        'file_bukti' => 'nullable|file|max:5120|mimes:pdf,jpg,jpeg,png', // Max 5MB
    ];

    // Validasi Real-time
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $this->validate();

        // 1. Upload File (Jika ada)
        $path = null;
        if ($this->file_bukti) {
            $path = $this->file_bukti->store('bukti-kasus', 'public');
        }

        // 2. Generate Kode Tiket
        $code = 'LBH-' . date('y') . '-' . strtoupper(Str::random(6));

        // 3. Simpan ke Database
        Pengaduan::create([
            'kode_tiket' => $code,
            'nama_pelapor' => $this->nama_pelapor,
            'nomor_hp' => $this->nomor_hp,
            'email_pelapor' => $this->email_pelapor,
            'alamat_pelapor' => $this->alamat_pelapor,
            'judul_kasus' => $this->judul_kasus,
            'kategori_kasus' => $this->kategori_kasus,
            'kronologi_kejadian' => $this->kronologi_kejadian,
            'file_bukti' => $path,
            'status' => 'baru',
            'prioritas' => 'sedang',
        ]);

        // 4. Update State ke Sukses
        $this->ticketCode = $code;
        $this->step = 3; // Pindah ke halaman sukses
    }

    public function render()
    {
        return view('livewire.ajukan-konsultasi')
            ->title('Formulir Konsultasi Hukum - PSH UPTT');
    }
}
