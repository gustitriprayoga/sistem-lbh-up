<div
    class="bg-[#0B1F32] text-white min-h-screen selection:bg-red-700 selection:text-white flex items-center justify-center py-20 px-4">

    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div
            class="absolute top-0 left-0 w-full h-full bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-5">
        </div>
        <div class="absolute top-10 left-10 w-96 h-96 bg-red-600/10 rounded-full blur-3xl animate-blob"></div>
        <div
            class="absolute bottom-10 right-10 w-96 h-96 bg-blue-600/10 rounded-full blur-3xl animate-blob animation-delay-2000">
        </div>
    </div>

    <div class="w-full max-w-3xl relative z-10">

        <div class="text-center mb-10">
            <a href="{{ route('guest.home') }}"
                class="inline-flex items-center text-sm text-gray-400 hover:text-white mb-6 transition">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Kembali ke Beranda
            </a>
            <h1 class="text-3xl md:text-4xl font-bold mb-3">Ajukan <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-amber-500">Permohonan</span>
            </h1>
            <p class="text-gray-400">Isi formulir di bawah ini dengan data yang sebenar-benarnya.</p>
        </div>

        <div
            class="glass-card bg-[#0f253b]/80 border border-white/10 rounded-3xl p-8 md:p-12 shadow-2xl relative overflow-hidden">

            @if ($step === 3)
                <div class="text-center py-10 animate-fade-in-up">
                    <div
                        class="w-24 h-24 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg shadow-green-500/50 animate-bounce">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>
                    </div>
                    <h2 class="text-3xl font-bold text-white mb-2">Permohonan Diterima!</h2>
                    <p class="text-gray-300 mb-8 max-w-md mx-auto">Tim PSH UPTT akan segera memverifikasi laporan Anda.
                        Silakan simpan Kode Tiket di bawah ini.</p>

                    <div class="bg-black/30 p-6 rounded-2xl border border-white/10 inline-block mb-8 relative group cursor-pointer"
                        onclick="navigator.clipboard.writeText('{{ $ticketCode }}'); alert('Kode disalin!');">
                        <span class="block text-xs text-gray-500 uppercase tracking-widest mb-1">Kode Tiket Anda</span>
                        <span
                            class="text-4xl font-mono font-bold text-amber-400 tracking-wider">{{ $ticketCode }}</span>
                        <div
                            class="absolute inset-0 flex items-center justify-center bg-black/60 opacity-0 group-hover:opacity-100 transition rounded-2xl">
                            <span class="text-white text-xs font-bold flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3">
                                    </path>
                                </svg>
                                Klik untuk Salin
                            </span>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <a href="{{ route('guest.cek-kasus') }}?ticket={{ $ticketCode }}"
                            class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-xl transition">
                            Lacak Status
                        </a>
                        <a href="{{ route('guest.home') }}"
                            class="px-6 py-3 border border-white/20 hover:bg-white/10 text-white font-bold rounded-xl transition">
                            Kembali ke Depan
                        </a>
                    </div>
                </div>
            @else
                <form wire:submit.prevent="submit">

                    <div class="mb-8">
                        <h3
                            class="text-lg font-bold text-white mb-4 flex items-center gap-2 border-b border-white/10 pb-2">
                            <span class="bg-red-600 text-xs w-6 h-6 rounded flex items-center justify-center">1</span>
                            Identitas Pelapor
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-300 mb-2">Nama Lengkap *</label>
                                <input type="text" wire:model="nama_pelapor"
                                    class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white focus:border-red-500 focus:ring-1 focus:ring-red-500 transition"
                                    placeholder="Nama sesuai KTP">
                                @error('nama_pelapor')
                                    <span class="text-red-400 text-xs mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-300 mb-2">Nomor WhatsApp *</label>
                                <input type="text" wire:model="nomor_hp"
                                    class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white focus:border-red-500 focus:ring-1 focus:ring-red-500 transition"
                                    placeholder="0812xxxx">
                                @error('nomor_hp')
                                    <span class="text-red-400 text-xs mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium text-gray-300 mb-2">Alamat Domisili</label>
                                <input type="text" wire:model="alamat_pelapor"
                                    class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white focus:border-red-500 focus:ring-1 focus:ring-red-500 transition"
                                    placeholder="Alamat lengkap saat ini">
                            </div>
                        </div>
                    </div>

                    <div class="mb-8">
                        <h3
                            class="text-lg font-bold text-white mb-4 flex items-center gap-2 border-b border-white/10 pb-2">
                            <span
                                class="bg-amber-500 text-xs w-6 h-6 rounded flex items-center justify-center text-black">2</span>
                            Detail Perkara
                        </h3>

                        <div class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div class="md:col-span-2">
                                    <label class="block text-sm font-medium text-gray-300 mb-2">Judul Kasus *</label>
                                    <input type="text" wire:model="judul_kasus"
                                        class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition"
                                        placeholder="Contoh: Sengketa Batas Tanah">
                                    @error('judul_kasus')
                                        <span class="text-red-400 text-xs mt-1">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-300 mb-2">Kategori</label>
                                    <select wire:model="kategori_kasus"
                                        class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition cursor-pointer">
                                        <option value="Pidana" class="bg-gray-800">Pidana</option>
                                        <option value="Perdata" class="bg-gray-800">Perdata</option>
                                        <option value="Keluarga" class="bg-gray-800">Keluarga</option>
                                        <option value="Pertanahan" class="bg-gray-800">Pertanahan</option>
                                        <option value="Lainnya" class="bg-gray-800">Lainnya</option>
                                    </select>
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-300 mb-2">Kronologi Kejadian *</label>
                                <textarea wire:model="kronologi_kejadian" rows="6"
                                    class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition"
                                    placeholder="Ceritakan kronologi kejadian secara runtut, jelas, dan jujur..."></textarea>
                                <div class="flex justify-between mt-1">
                                    @error('kronologi_kejadian')
                                        <span class="text-red-400 text-xs">{{ $message }}</span>
                                    @else
                                        <span></span>
                                    @enderror
                                    <span class="text-xs text-gray-500">Minimal 50 karakter</span>
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-300 mb-2">Upload Bukti Pendukung
                                    (Opsional)</label>
                                <div
                                    class="relative border-2 border-dashed border-gray-600 rounded-xl p-6 hover:border-amber-500 hover:bg-white/5 transition text-center cursor-pointer group">
                                    <input type="file" wire:model="file_bukti"
                                        class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                                    <div class="flex flex-col items-center justify-center">
                                        @if ($file_bukti)
                                            <div class="text-green-400 font-bold flex items-center gap-2 mb-1">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                                File Siap Upload
                                            </div>
                                            <span
                                                class="text-xs text-gray-400">{{ $file_bukti->getClientOriginalName() }}</span>
                                        @else
                                            <svg class="w-8 h-8 text-gray-500 group-hover:text-white mb-2 transition"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                                </path>
                                            </svg>
                                            <p class="text-sm text-gray-400 group-hover:text-white transition">Klik
                                                untuk upload file (PDF/JPG, Max 5MB)</p>
                                        @endif
                                    </div>
                                </div>
                                @error('file_bukti')
                                    <span class="text-red-400 text-xs mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-between pt-6 border-t border-white/10">
                        <p class="text-xs text-gray-500">
                            *Dengan mengirim formulir ini, Anda menyetujui kebijakan privasi PSH UPTT.
                        </p>
                        <button type="submit"
                            class="bg-gradient-to-r from-red-600 to-red-800 hover:from-red-500 hover:to-red-700 text-white font-bold py-4 px-8 rounded-xl shadow-lg transform hover:-translate-y-1 transition duration-300 flex items-center gap-2 disabled:opacity-50 disabled:cursor-not-allowed">
                            <span wire:loading.remove>Kirim Permohonan</span>
                            <span wire:loading class="flex items-center gap-2">
                                <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10"
                                        stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor"
                                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                    </path>
                                </svg>
                                Memproses...
                            </span>
                        </button>
                    </div>

                </form>
            @endif

        </div>
    </div>
</div>
