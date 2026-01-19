<div class="bg-[#0B1F32] text-white min-h-screen selection:bg-red-700 selection:text-white">

    <style>
        .glass-form {
            background: rgba(30, 41, 59, 0.7);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
        }

        .input-glass {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: white;
            transition: all 0.3s ease;
        }

        .input-glass:focus {
            background: rgba(255, 255, 255, 0.08);
            border-color: #ef4444;
            /* Red border on focus */
            outline: none;
            box-shadow: 0 0 0 2px rgba(239, 68, 68, 0.2);
        }
    </style>

    <section class="relative pt-32 pb-12 px-4 overflow-hidden">
        <div class="absolute top-0 right-0 w-96 h-96 bg-red-900/20 rounded-full blur-3xl -z-10 animate-blob"></div>
        <div
            class="absolute bottom-0 left-0 w-64 h-64 bg-blue-900/20 rounded-full blur-3xl -z-10 animate-blob animation-delay-2000">
        </div>

        <div class="max-w-7xl mx-auto text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">
                Layanan <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-amber-500">Bantuan
                    Hukum</span>
            </h1>
            <p class="text-gray-300 max-w-2xl mx-auto text-lg">
                [cite_start]PSH UPTT berkomitmen memberikan akses keadilan bagi masyarakat melalui konsultasi, advokasi,
                dan penyuluhan hukum[cite: 6, 27].
            </p>
        </div>
    </section>

    <section class="py-12 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">

                <div class="lg:col-span-4 space-y-8">

                    <div class="glass-form p-6 rounded-2xl border-l-4 border-red-600">
                        <h3 class="text-xl font-bold mb-4 flex items-center gap-2">
                            <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3">
                                </path>
                            </svg>
                            Ruang Lingkup
                        </h3>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <span class="w-2 h-2 mt-2 bg-amber-500 rounded-full"></span>
                                <div class="text-gray-300 text-sm">
                                    <strong class="text-white block">Litigasi & Non-Litigasi</strong>
                                    Pendampingan di dalam maupun di luar pengadilan.
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-2 h-2 mt-2 bg-amber-500 rounded-full"></span>
                                <div class="text-gray-300 text-sm">
                                    <strong class="text-white block">Konsultasi Hukum</strong>
                                    Analisis kasus Perdata, Pidana, Keluarga, hingga Tata Usaha Negara.
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-2 h-2 mt-2 bg-amber-500 rounded-full"></span>
                                <div class="text-gray-300 text-sm">
                                    <strong class="text-white block">Mediasi</strong>
                                    Penyelesaian sengketa alternatif secara damai.
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="glass-form p-6 rounded-2xl">
                        <h3 class="text-xl font-bold mb-6">Alur Pengaduan</h3>
                        <div class="relative border-l border-gray-700 ml-3 space-y-8">
                            <div class="relative pl-8">
                                <div
                                    class="absolute -left-1.5 mt-1.5 w-3 h-3 bg-red-500 rounded-full border border-[#0B1F32]">
                                </div>
                                <h4 class="font-bold text-white text-sm">1. Isi Formulir</h4>
                                <p class="text-xs text-gray-400 mt-1">Lengkapi data diri & kronologi.</p>
                            </div>
                            <div class="relative pl-8">
                                <div
                                    class="absolute -left-1.5 mt-1.5 w-3 h-3 bg-gray-500 rounded-full border border-[#0B1F32]">
                                </div>
                                <h4 class="font-bold text-white text-sm">2. Verifikasi Tim</h4>
                                <p class="text-xs text-gray-400 mt-1">Admin mengecek kelengkapan.</p>
                            </div>
                            <div class="relative pl-8">
                                <div
                                    class="absolute -left-1.5 mt-1.5 w-3 h-3 bg-gray-500 rounded-full border border-[#0B1F32]">
                                </div>
                                <h4 class="font-bold text-white text-sm">3. Konsultasi/Tindakan</h4>
                                <p class="text-xs text-gray-400 mt-1">Penunjukan pendamping hukum.</p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="glass-form p-6 rounded-2xl bg-gradient-to-br from-red-900/50 to-transparent border border-red-500/20 text-center">
                        <p class="text-sm text-gray-300 mb-2">Butuh Respon Cepat?</p>
                        <a href="https://wa.me/628123456789"
                            class="inline-flex items-center justify-center gap-2 bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-full font-bold transition w-full">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.017-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                            </svg>
                            Chat WhatsApp
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-8">

                    @if ($isSubmitted)
                        <div class="glass-form p-10 rounded-3xl text-center animate-blob" x-data
                            x-init="$el.scrollIntoView({ behavior: 'smooth' })">
                            <div
                                class="w-24 h-24 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg shadow-green-500/50">
                                <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <h2 class="text-3xl font-bold text-white mb-2">Pengaduan Terkirim!</h2>
                            <p class="text-gray-300 mb-6">Laporan Anda telah masuk ke sistem kami.</p>

                            <div class="bg-white/10 p-6 rounded-xl inline-block border border-white/20 mb-8">
                                <span class="block text-sm text-gray-400 mb-1">Kode Tiket Anda:</span>
                                <span
                                    class="text-4xl font-mono font-bold text-amber-400 tracking-wider select-all">{{ $ticketCode }}</span>
                            </div>

                            <p class="text-sm text-gray-400 mb-6">
                                *Simpan kode ini untuk mengecek status kasus Anda di halaman depan.<br>
                                Kami juga akan menghubungi Anda melalui WhatsApp/Email.
                            </p>

                            <button wire:click="$set('isSubmitted', false)"
                                class="text-red-400 hover:text-white underline">Buat Pengaduan Baru</button>
                        </div>
                    @else
                        <div class="glass-form p-8 md:p-10 rounded-3xl relative overflow-hidden">
                            <div class="mb-8 border-b border-gray-700 pb-6">
                                <h2 class="text-2xl font-bold text-white">Formulir Pengaduan Kasus</h2>
                                <p class="text-gray-400 text-sm mt-1">Identitas pelapor akan kami rahasiakan demi
                                    keamanan.</p>
                            </div>

                            <form wire:submit.prevent="submit" class="space-y-6">

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-300 mb-2">Nama Lengkap
                                            *</label>
                                        <input type="text" wire:model="nama_pelapor"
                                            class="w-full px-4 py-3 rounded-xl input-glass" placeholder="Sesuai KTP">
                                        @error('nama_pelapor')
                                            <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-300 mb-2">Nomor WhatsApp
                                            *</label>
                                        <input type="text" wire:model="nomor_hp"
                                            class="w-full px-4 py-3 rounded-xl input-glass" placeholder="0812...">
                                        @error('nomor_hp')
                                            <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-300 mb-2">Email
                                            (Opsional)</label>
                                        <input type="email" wire:model="email_pelapor"
                                            class="w-full px-4 py-3 rounded-xl input-glass"
                                            placeholder="email@contoh.com">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-300 mb-2">Domisili /
                                            Alamat</label>
                                        <input type="text" wire:model="alamat_pelapor"
                                            class="w-full px-4 py-3 rounded-xl input-glass"
                                            placeholder="Kecamatan, Kabupaten">
                                    </div>
                                </div>

                                <div class="pt-4 border-t border-gray-700">
                                    <label
                                        class="block text-sm font-medium text-amber-500 mb-2 uppercase tracking-wide text-xs font-bold">Detail
                                        Perkara</label>

                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                                        <div class="md:col-span-2">
                                            <label class="block text-sm font-medium text-gray-300 mb-2">Judul / Topik
                                                Masalah *</label>
                                            <input type="text" wire:model="judul_kasus"
                                                class="w-full px-4 py-3 rounded-xl input-glass"
                                                placeholder="Contoh: Sengketa Tanah Warisan di Desa X">
                                            @error('judul_kasus')
                                                <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div>
                                            <label
                                                class="block text-sm font-medium text-gray-300 mb-2">Kategori</label>
                                            <select wire:model="kategori_kasus"
                                                class="w-full px-4 py-3 rounded-xl input-glass bg-[#0f253b]">
                                                <option value="Pidana">Pidana</option>
                                                <option value="Perdata">Perdata</option>
                                                <option value="Keluarga">Hukum Keluarga</option>
                                                <option value="Pertanahan">Pertanahan/Agraria</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-6">
                                        <label class="block text-sm font-medium text-gray-300 mb-2">Kronologi Kejadian
                                            *</label>
                                        <textarea wire:model="kronologi_kejadian" rows="6" class="w-full px-4 py-3 rounded-xl input-glass"
                                            placeholder="Ceritakan urutan kejadian secara lengkap, jelas, dan jujur..."></textarea>
                                        <p class="text-xs text-gray-500 mt-1 text-right">Minimal 20 karakter</p>
                                        @error('kronologi_kejadian')
                                            <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-8">
                                        <label class="block text-sm font-medium text-gray-300 mb-2">Upload Bukti Awal
                                            (Opsional)</label>
                                        <div
                                            class="relative border-2 border-dashed border-gray-600 rounded-xl p-6 hover:border-gray-400 transition text-center group">
                                            <input type="file" wire:model="file_bukti"
                                                class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                                            <div class="text-gray-400 group-hover:text-white">
                                                @if ($file_bukti)
                                                    <span
                                                        class="text-green-400 font-bold flex items-center justify-center gap-2">
                                                        <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                            viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>
                                                        File Terpilih
                                                    </span>
                                                @else
                                                    <svg class="mx-auto h-10 w-10 mb-2" stroke="currentColor"
                                                        fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                        <path
                                                            d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                    <p class="text-sm">Klik untuk upload (PDF/JPG, Max 2MB)</p>
                                                @endif
                                            </div>
                                        </div>
                                        @error('file_bukti')
                                            <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="flex justify-end pt-4">
                                    <button type="submit"
                                        class="px-8 py-4 bg-gradient-to-r from-red-600 to-red-800 hover:from-red-500 hover:to-red-700 text-white font-bold rounded-xl shadow-lg transform hover:-translate-y-1 transition duration-300 flex items-center gap-2 disabled:opacity-50 disabled:cursor-not-allowed">
                                        <span wire:loading.remove>Kirim Pengaduan</span>
                                        <span wire:loading class="animate-pulse">Mengirim...</span>
                                        <svg wire:loading.remove class="w-5 h-5" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                        </svg>
                                    </button>
                                </div>

                            </form>
                        </div>
                    @endif

                </div>

            </div>
        </div>
    </section>
</div>
