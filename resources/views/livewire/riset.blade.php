<div class="bg-[#0B1F32] text-white min-h-screen selection:bg-red-700 selection:text-white">

    <section class="relative pt-32 pb-20 px-4 overflow-hidden">
        <div
            class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10">
        </div>
        <div class="absolute top-20 right-20 w-72 h-72 bg-amber-600/20 rounded-full blur-3xl -z-10 animate-blob"></div>
        <div
            class="absolute top-40 left-20 w-72 h-72 bg-blue-600/20 rounded-full blur-3xl -z-10 animate-blob animation-delay-2000">
        </div>

        <div class="max-w-4xl mx-auto text-center relative z-10">
            <span class="text-amber-500 font-bold tracking-widest uppercase text-xs mb-4 block">Repository
                Akademik</span>
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Pusat Kajian & <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-emerald-400">Riset
                    Hukum</span></h1>
            <p class="text-gray-300 mb-10 text-lg max-w-2xl mx-auto">
                Kumpulan pemikiran hukum kritis, jurnal ilmiah, dan hasil penelitian civitas akademika PSH Universitas
                Pahlawan untuk menjawab tantangan hukum global.
            </p>

            <div class="bg-white/5 backdrop-blur-md border border-white/10 p-4 rounded-2xl shadow-2xl">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">

                    <div class="md:col-span-2 relative">
                        <input type="text" wire:model.live.debounce.300ms="search"
                            placeholder="Cari judul jurnal atau nama peneliti..."
                            class="w-full bg-[#0f253b] border border-white/10 text-white rounded-xl px-4 py-3 pl-10 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
                        <svg class="w-5 h-5 text-gray-400 absolute left-3 top-3.5" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>

                    <div>
                        <select wire:model.live="kategori"
                            class="w-full bg-[#0f253b] border border-white/10 text-white rounded-xl px-4 py-3 focus:ring-2 focus:ring-blue-500">
                            <option value="semua">Semua Kategori</option>
                            <option value="jurnal_nasional">Jurnal Nasional</option>
                            <option value="jurnal_internasional">Jurnal Internasional</option>
                            <option value="buku">Buku & Monograf</option>
                            <option value="prosiding">Prosiding Seminar</option>
                        </select>
                    </div>

                    <div>
                        <select wire:model.live="tahun"
                            class="w-full bg-[#0f253b] border border-white/10 text-white rounded-xl px-4 py-3 focus:ring-2 focus:ring-blue-500">
                            <option value="semua">Semua Tahun</option>
                            @foreach ($years as $y)
                                <option value="{{ $y }}">{{ $y }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="border-y border-white/5 bg-[#081624]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center divide-x divide-white/10">
                <div>
                    <span class="block text-3xl font-bold text-white mb-1">45+</span>
                    <span class="text-xs text-gray-400 uppercase tracking-wider">Jurnal Nasional</span>
                </div>
                <div>
                    <span class="block text-3xl font-bold text-blue-400 mb-1">12</span>
                    <span class="text-xs text-gray-400 uppercase tracking-wider">Jurnal Internasional</span>
                </div>
                <div>
                    <span class="block text-3xl font-bold text-emerald-400 mb-1">8</span>
                    <span class="text-xs text-gray-400 uppercase tracking-wider">Buku Hukum</span>
                </div>
                <div>
                    <span class="block text-3xl font-bold text-amber-400 mb-1">100%</span>
                    <span class="text-xs text-gray-400 uppercase tracking-wider">Akses Terbuka</span>
                </div>
            </div>
        </div>
    </div>

    <section class="py-16 px-4">
        <div class="max-w-7xl mx-auto">

            <div wire:loading.flex class="justify-center py-12 w-full">
                <div class="flex items-center gap-3 text-blue-400">
                    <svg class="animate-spin h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                            stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor"
                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                        </path>
                    </svg>
                    <span>Memuat Data...</span>
                </div>
            </div>

            <div wire:loading.remove class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                @forelse($publikasis as $item)
                    <div
                        class="group relative bg-[#0f253b] border border-white/5 rounded-2xl overflow-hidden hover:-translate-y-2 hover:shadow-2xl hover:shadow-blue-900/20 transition duration-500">

                        <div
                            class="h-48 bg-gradient-to-br from-gray-800 to-[#0B1F32] relative overflow-hidden p-6 flex items-center justify-center">
                            <div
                                class="absolute inset-0 opacity-20 bg-[url('https://www.transparenttextures.com/patterns/diagmonds-light.png')]">
                            </div>

                            @if ($item->jenis == 'buku')
                                <svg class="w-20 h-20 text-emerald-500/50 group-hover:scale-110 transition duration-500"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M4 6a2 2 0 012-2h12a2 2 0 012 2v14a2 2 0 01-2 2H6a2 2 0 01-2-2V6zm2 0v14h12V6H6zm2 2h8v2H8V8zm0 4h8v2H8v-2z" />
                                </svg>
                            @elseif($item->jenis == 'jurnal_internasional')
                                <svg class="w-20 h-20 text-blue-500/50 group-hover:scale-110 transition duration-500"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2a10 10 0 100 20 10 10 0 000-20zm-1 17.93c-2.83-.48-5-2.93-5-5.93 0-.58.08-1.13.23-1.65l4.77 7.58zm6.77-1.65A7.96 7.96 0 0112 19.93v-7.58l5.77 5.93zM12 4.07c2.83.48 5 2.93 5 5.93 0 .58-.08 1.13-.23 1.65L12 4.07zM5.23 5.72A7.96 7.96 0 0112 4.07v7.58L6.23 5.72z" />
                                </svg>
                            @else
                                <svg class="w-20 h-20 text-gray-500/50 group-hover:scale-110 transition duration-500"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8l-6-6zm-1 2l5 5h-5V4zM6 20V4h5v5h5v11H6z" />
                                </svg>
                            @endif

                            <div
                                class="absolute top-4 right-4 bg-white/10 backdrop-blur-sm px-3 py-1 rounded-full text-xs font-bold text-white">
                                {{ $item->tahun }}
                            </div>
                        </div>

                        <div class="p-6">
                            <span
                                class="text-xs font-bold uppercase tracking-wider mb-2 block
                            {{ $item->jenis == 'jurnal_internasional' ? 'text-blue-400' : ($item->jenis == 'buku' ? 'text-emerald-400' : 'text-gray-400') }}">
                                {{ str_replace('_', ' ', $item->jenis) }}
                            </span>

                            <h3
                                class="text-xl font-bold text-white mb-3 line-clamp-2 group-hover:text-blue-400 transition">
                                <a href="{{ $item->link_url }}" target="_blank">{{ $item->judul }}</a>
                            </h3>

                            <div class="flex items-center gap-2 mb-6">
                                <div
                                    class="w-6 h-6 rounded-full bg-gray-600 flex items-center justify-center text-xs text-white font-bold">
                                    {{ substr($item->penulis, 0, 1) }}
                                </div>
                                <span class="text-sm text-gray-400 truncate">{{ $item->penulis }}</span>
                            </div>

                            <div class="flex items-center justify-between border-t border-white/5 pt-4">
                                <span
                                    class="text-xs text-gray-500">{{ $item->nama_jurnal ?? 'Publikasi Mandiri' }}</span>

                                <a href="{{ $item->link_url }}" target="_blank"
                                    class="inline-flex items-center text-sm font-semibold text-white hover:text-blue-400 transition">
                                    Baca Full Text
                                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-20">
                        <div class="w-20 h-20 bg-gray-800 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-10 h-10 text-gray-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-300">Data Tidak Ditemukan</h3>
                        <p class="text-gray-500">Coba ubah kata kunci pencarian atau filter kategori.</p>
                    </div>
                @endforelse

            </div>

            <div class="mt-12">
                {{ $publikasis->links() }}
            </div>

        </div>
    </section>

    <section class="py-16 bg-[#091829] border-t border-white/5 relative overflow-hidden">
        <div class="absolute right-0 bottom-0 w-64 h-64 bg-red-900/10 rounded-full blur-3xl -z-10"></div>
        <div class="max-w-5xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">Mahasiswa Tingkat Akhir?</h2>
            <p class="text-gray-400 mb-8 max-w-2xl mx-auto">
                PSH UPTT menyediakan akses ke ribuan referensi hukum dan jurnal untuk mendukung penelitian skripsi Anda.
                Kami juga membuka kesempatan magang riset.
            </p>
            <div class="flex justify-center gap-4">
                <a href="#"
                    class="px-6 py-3 rounded-full bg-white/5 border border-white/10 hover:bg-white/10 transition text-sm font-semibold">
                    Lihat Prosedur Riset
                </a>
                <a href="#"
                    class="px-6 py-3 rounded-full bg-blue-600 hover:bg-blue-700 transition text-sm font-semibold text-white shadow-lg shadow-blue-900/50">
                    Hubungi Admin PSH
                </a>
            </div>
        </div>
    </section>

</div>
