<div class="bg-[#0B1F32] text-white min-h-screen selection:bg-red-700 selection:text-white">

    <section class="relative pt-32 pb-16 px-4">
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-red-900/20 rounded-full blur-3xl -z-10 animate-blob"></div>
        <div
            class="absolute bottom-0 right-1/4 w-96 h-96 bg-blue-900/20 rounded-full blur-3xl -z-10 animate-blob animation-delay-2000">
        </div>

        <div class="max-w-3xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Lacak <span class="text-gradient-gold">Perkembangan
                    Kasus</span></h1>
            <p class="text-gray-300 mb-8">Masukkan Kode Tiket yang Anda terima saat pendaftaran untuk melihat sejauh mana
                kasus Anda ditangani.</p>

            <form wire:submit.prevent="cariTiket" class="relative group">
                <div
                    class="absolute -inset-1 bg-gradient-to-r from-red-600 to-amber-500 rounded-xl blur opacity-25 group-hover:opacity-75 transition duration-500">
                </div>
                <div class="relative flex items-center bg-[#0f253b] border border-white/10 rounded-xl p-2 shadow-2xl">
                    <input type="text" wire:model="ticket" placeholder="Masukkan Kode Tiket (Contoh: LBH-2026-X8J2K)"
                        class="w-full bg-transparent border-none text-white placeholder-gray-500 focus:ring-0 px-6 py-4 text-lg font-mono tracking-wider">
                    <button type="submit"
                        class="bg-red-600 hover:bg-red-700 text-white px-8 py-4 rounded-lg font-bold shadow-lg transition transform hover:scale-105">
                        <span wire:loading.remove>Cari</span>
                        <span wire:loading class="animate-pulse">...</span>
                    </button>
                </div>
            </form>
            @error('ticket')
                <span class="text-red-400 text-sm mt-2 block">{{ $message }}</span>
            @enderror
        </div>
    </section>

    <section class="pb-24 px-4">
        <div class="max-w-5xl mx-auto">

            <div wire:loading wire:target="cariTiket" class="w-full text-center py-12">
                <div
                    class="w-16 h-16 border-4 border-red-500 border-t-transparent rounded-full animate-spin mx-auto mb-4">
                </div>
                <p class="text-gray-400 animate-pulse">Sedang mencari data kasus...</p>
            </div>

            @if ($isSearched && $searchResult)
                <div class="animate-fade-in-up">

                    <div class="glass-card p-8 rounded-3xl border border-white/10 mb-8 relative overflow-hidden">
                        <div class="absolute top-0 right-0 p-4">
                            @php
                                $statusColor = match ($searchResult->status) {
                                    'baru' => 'bg-gray-500',
                                    'diverifikasi' => 'bg-blue-500',
                                    'diproses' => 'bg-amber-500',
                                    'selesai' => 'bg-green-500',
                                    'ditolak' => 'bg-red-500',
                                    default => 'bg-gray-500',
                                };
                                $statusLabel = match ($searchResult->status) {
                                    'baru' => 'Menunggu Verifikasi',
                                    'diverifikasi' => 'Terverifikasi',
                                    'diproses' => 'Sedang Ditangani',
                                    'selesai' => 'Selesai',
                                    'ditolak' => 'Ditolak',
                                    default => 'Unknown',
                                };
                            @endphp
                            <span
                                class="{{ $statusColor }} text-white text-xs font-bold px-4 py-2 rounded-full shadow-lg uppercase tracking-wider">
                                {{ $statusLabel }}
                            </span>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                            <div class="md:col-span-2">
                                <span class="text-gray-400 text-sm uppercase tracking-widest block mb-1">Judul
                                    Kasus</span>
                                <h2 class="text-2xl font-bold text-white mb-4">{{ $searchResult->judul_kasus }}</h2>

                                <div class="grid grid-cols-2 gap-4 text-sm">
                                    <div>
                                        <span class="text-gray-500 block">Kategori</span>
                                        <span
                                            class="text-gray-300 font-medium">{{ $searchResult->kategori_kasus }}</span>
                                    </div>
                                    <div>
                                        <span class="text-gray-500 block">Tanggal Masuk</span>
                                        <span
                                            class="text-gray-300 font-medium">{{ $searchResult->created_at->format('d M Y') }}</span>
                                    </div>
                                    <div>
                                        <span class="text-gray-500 block">Pelapor</span>
                                        <span class="text-gray-300 font-medium">{{ $searchResult->nama_pelapor }}</span>
                                    </div>
                                    <div>
                                        <span class="text-gray-500 block">Prioritas</span>
                                        <span
                                            class="text-gray-300 font-medium capitalize">{{ $searchResult->prioritas }}</span>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="bg-white/5 rounded-2xl p-6 border border-white/5 flex flex-col items-center text-center justify-center">
                                <span class="text-gray-500 text-xs uppercase mb-2">Ditangani Oleh</span>
                                @if ($searchResult->penanggungJawab)
                                    <div
                                        class="w-16 h-16 rounded-full bg-blue-900 flex items-center justify-center text-xl font-bold text-blue-200 mb-2 border-2 border-blue-500">
                                        {{ substr($searchResult->penanggungJawab->name, 0, 1) }}
                                    </div>
                                    <h3 class="font-bold text-white text-sm">{{ $searchResult->penanggungJawab->name }}
                                    </h3>
                                    <p class="text-xs text-blue-400">Tim Hukum PSH</p>
                                @else
                                    <div
                                        class="w-16 h-16 rounded-full bg-gray-700 flex items-center justify-center mb-2">
                                        <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                            </path>
                                        </svg>
                                    </div>
                                    <p class="text-xs text-gray-400">Belum ditentukan</p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="mt-12">
                        <h3 class="text-xl font-bold text-white mb-8 pl-4 border-l-4 border-amber-500">Riwayat
                            Penanganan</h3>

                        <div class="relative border-l-2 border-gray-700 ml-6 space-y-10">
                            @forelse($searchResult->perkembanganKasus as $log)
                                <div class="relative pl-10 group">
                                    <div
                                        class="absolute -left-[9px] top-1 w-5 h-5 bg-[#0B1F32] border-4 border-amber-500 rounded-full group-hover:border-red-500 transition">
                                    </div>

                                    <div
                                        class="bg-white/5 border border-white/10 p-6 rounded-2xl hover:bg-white/10 transition">
                                        <div class="flex flex-col md:flex-row md:items-center justify-between mb-2">
                                            <h4 class="text-lg font-bold text-amber-400">{{ $log->judul_aktivitas }}
                                            </h4>
                                            <span class="text-xs text-gray-400 flex items-center gap-1">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                                {{ \Carbon\Carbon::parse($log->tanggal)->format('d M Y') }}
                                            </span>
                                        </div>
                                        <p class="text-gray-300 text-sm leading-relaxed mb-4">
                                            {{ $log->keterangan }}
                                        </p>

                                        @if ($log->file_lampiran)
                                            <a href="#"
                                                class="inline-flex items-center text-xs text-blue-400 hover:text-blue-300 border border-blue-500/30 px-3 py-1.5 rounded-lg bg-blue-500/10">
                                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13">
                                                    </path>
                                                </svg>
                                                Lihat Dokumen Lampiran
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            @empty
                                <div class="relative pl-10">
                                    <div
                                        class="absolute -left-[9px] top-1 w-5 h-5 bg-[#0B1F32] border-4 border-gray-600 rounded-full">
                                    </div>
                                    <p class="text-gray-500 italic">Belum ada update perkembangan kasus.</p>
                                </div>
                            @endforelse

                            <div class="relative pl-10">
                                <div
                                    class="absolute -left-[9px] top-1 w-5 h-5 bg-[#0B1F32] border-4 border-green-600 rounded-full">
                                </div>
                                <div class="text-gray-400 text-sm">
                                    <span class="font-bold text-green-500">Laporan Diterima</span> -
                                    {{ $searchResult->created_at->format('d M Y, H:i') }}
                                    <p class="text-xs mt-1">Laporan berhasil masuk ke sistem database PSH UPTT.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            @elseif($isSearched && !$searchResult)
                <div class="text-center py-12 animate-fade-in-up">
                    <div class="w-24 h-24 bg-red-500/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-12 h-12 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-2">Tiket Tidak Ditemukan</h3>
                    <p class="text-gray-400 max-w-md mx-auto">
                        Kode tiket <strong>"{{ $ticket }}"</strong> tidak terdaftar di sistem kami. Mohon periksa
                        kembali penulisan huruf besar/kecil atau hubungi admin.
                    </p>
                </div>
            @endif

        </div>
    </section>

</div>
