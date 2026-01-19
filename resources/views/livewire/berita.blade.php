<div class="bg-[#0B1F32] text-white min-h-screen selection:bg-red-700 selection:text-white">

    <section class="relative pt-32 pb-16 px-4 overflow-hidden">
        <div class="absolute top-0 right-0 w-96 h-96 bg-red-900/20 rounded-full blur-3xl -z-10 animate-blob"></div>

        <div class="max-w-7xl mx-auto text-center relative z-10">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Kabar & <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-amber-500">Opini Hukum</span>
            </h1>
            <p class="text-gray-300 mb-10 text-lg max-w-2xl mx-auto">
                Update kegiatan, edukasi hukum, dan pemikiran kritis dari civitas akademika PSH Universitas Pahlawan.
            </p>

            <div
                class="max-w-3xl mx-auto bg-white/5 backdrop-blur-md border border-white/10 p-2 rounded-2xl flex flex-col md:flex-row gap-2">
                <div class="relative flex-grow">
                    <input type="text" wire:model.live.debounce.300ms="search" placeholder="Cari berita..."
                        class="w-full bg-[#0f253b] border border-white/10 text-white rounded-xl px-4 py-3 pl-10 focus:ring-2 focus:ring-red-500 transition">
                    <svg class="w-5 h-5 text-gray-400 absolute left-3 top-3.5" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>

                <select wire:model.live="kategoriSlug"
                    class="bg-[#0f253b] border border-white/10 text-white rounded-xl px-6 py-3 focus:ring-2 focus:ring-red-500 md:w-48 cursor-pointer">
                    <option value="semua">Semua Topik</option>
                    @foreach ($kategoris as $cat)
                        <option value="{{ $cat->slug }}">{{ $cat->nama }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </section>

    <section class="py-12 px-4">
        <div class="max-w-7xl mx-auto">

            <div wire:loading.flex class="justify-center py-12 w-full">
                <div class="flex items-center gap-3 text-red-400">
                    <svg class="animate-spin h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                            stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor"
                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                        </path>
                    </svg>
                    <span>Memuat Artikel...</span>
                </div>
            </div>

            <div wire:loading.remove class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                @forelse($artikels as $index => $item)
                    <article
                        class="group relative bg-[#0f253b] rounded-2xl overflow-hidden border border-white/5 hover:-translate-y-2 hover:shadow-2xl hover:shadow-red-900/20 transition duration-500 flex flex-col h-full">

                        <div class="h-56 overflow-hidden relative">
                            <a href="#" class="block w-full h-full">
                                @if ($item->thumbnail)
                                    <img src="{{ asset('storage/' . $item->thumbnail) }}" alt="{{ $item->judul }}"
                                        class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                                @else
                                    <img src="https://picsum.photos/seed/news{{ $item->id }}/800/600"
                                        alt="Cover"
                                        class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                                @endif
                            </a>

                            <div class="absolute top-4 left-4">
                                <span
                                    class="bg-red-600/90 backdrop-blur-sm text-white text-xs font-bold px-3 py-1.5 rounded-lg shadow-lg uppercase tracking-wider">
                                    {{ $item->kategori->nama }}
                                </span>
                            </div>
                        </div>

                        <div class="p-6 flex flex-col flex-grow">
                            <div class="flex items-center gap-4 text-xs text-gray-400 mb-3">
                                <span class="flex items-center gap-1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                    {{ $item->tanggal_terbit ? $item->tanggal_terbit->format('d M Y') : $item->created_at->format('d M Y') }}
                                </span>
                                <span class="flex items-center gap-1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                        </path>
                                    </svg>
                                    {{ $item->author->name ?? 'Admin' }}
                                </span>
                            </div>

                            <h2
                                class="text-xl font-bold text-white mb-3 leading-snug group-hover:text-red-400 transition">
                                <a href="#">{{ $item->judul }}</a>
                            </h2>

                            <p class="text-gray-400 text-sm line-clamp-3 mb-4 flex-grow">
                                {{ $item->excerpt ?? Str::limit(strip_tags($item->content), 120) }}
                            </p>

                            <div class="border-t border-white/5 pt-4 mt-auto">
                                <a href="{{ route('guest.baca-berita', $item->slug) }}"
                                    class="inline-flex items-center text-sm font-semibold text-amber-500 hover:text-amber-400 transition gap-1">
                                    Baca Selengkapnya
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </article>

                @empty
                    <div class="col-span-full py-12 text-center">
                        <div class="inline-block p-4 rounded-full bg-white/5 mb-4">
                            <svg class="w-12 h-12 text-gray-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-300">Belum ada berita</h3>
                        <p class="text-gray-500">Saat ini belum ada artikel yang diterbitkan dalam kategori ini.</p>
                    </div>
                @endforelse

            </div>

            <div class="mt-12">
                {{ $artikels->links() }}
            </div>
        </div>
    </section>

</div>
