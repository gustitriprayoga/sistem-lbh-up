<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads; // Wajib untuk upload file
use App\Models\Pengaduan; // Model yang sudah kita buat
use Illuminate\Support\Str;

class LayananLbh extends Component
{
    use WithFileUploads;

    // Properti Form
    public $nama_pelapor;
    public $nomor_hp;
    public $email_pelapor;
    public $alamat_pelapor;
    public $judul_kasus;
    public $kategori_kasus = 'Pidana'; // Default
    public $kronologi_kejadian;
    public $file_bukti;

    // State untuk UI
    public $isSubmitted = false;
    public $ticketCode = '';

    // Rules Validasi
    protected $rules = [
        'nama_pelapor' => 'required|min:3',
        'nomor_hp' => 'required|numeric',
        'judul_kasus' => 'required|min:5',
        'kategori_kasus' => 'required',
        'kronologi_kejadian' => 'required|min:20',
        'file_bukti' => 'nullable|file|max:2048|mimes:pdf,jpg,jpeg,png', // Max 2MB
    ];

    public function submit()
    {
        $this->validate();

        // Generate Kode Tiket Unik (Format: LBH-TAHUN-ACAK)
        $code = 'LBH-' . date('Y') . '-' . strtoupper(Str::random(5));

        // Upload File jika ada
        $filePath = null;
        if ($this->file_bukti) {
            $filePath = $this->file_bukti->store('bukti-kasus', 'public');
        }

        // Simpan ke Database
        Pengaduan::create([
            'kode_tiket' => $code,
            'nama_pelapor' => $this->nama_pelapor,
            'nomor_hp' => $this->nomor_hp,
            'email_pelapor' => $this->email_pelapor,
            'alamat_pelapor' => $this->alamat_pelapor,
            'judul_kasus' => $this->judul_kasus,
            'kategori_kasus' => $this->kategori_kasus,
            'kronologi_kejadian' => $this->kronologi_kejadian,
            'file_bukti' => $filePath,
            'status' => 'baru', // Default status
            'prioritas' => 'sedang',
        ]);

        // Reset Form & Tampilkan Sukses
        $this->reset(['nama_pelapor', 'nomor_hp', 'email_pelapor', 'judul_kasus', 'kronologi_kejadian', 'file_bukti']);
        $this->ticketCode = $code;
        $this->isSubmitted = true;
    }

    public function render()
    {
        return view('livewire.layanan-lbh')
            ->title('Layanan Bantuan Hukum - PSH UPTT');
    }
}
