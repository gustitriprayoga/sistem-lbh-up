<div class="bg-[#0B1F32] text-white min-h-screen selection:bg-red-700 selection:text-white">

    <style>
        .article-content h2 { font-size: 1.5rem; font-weight: bold; margin-top: 2rem; margin-bottom: 1rem; color: #fbbf24; }
        .article-content h3 { font-size: 1.25rem; font-weight: bold; margin-top: 1.5rem; margin-bottom: 0.75rem; color: #fbbf24; }
        .article-content p { margin-bottom: 1.25rem; line-height: 1.8; color: #d1d5db; }
        .article-content ul { list-style-type: disc; margin-left: 1.5rem; margin-bottom: 1.25rem; color: #d1d5db; }
        .article-content ol { list-style-type: decimal; margin-left: 1.5rem; margin-bottom: 1.25rem; color: #d1d5db; }
        .article-content blockquote { border-left: 4px solid #ef4444; padding-left: 1rem; font-style: italic; color: #9ca3af; margin-bottom: 1.25rem; }
        .article-content img { border-radius: 0.75rem; margin-top: 1.5rem; margin-bottom: 1.5rem; width: 100%; }
    </style>

    <section class="relative pt-32 pb-12 px-4">
        <div class="absolute top-0 right-0 w-96 h-96 bg-red-900/10 rounded-full blur-3xl -z-10 animate-blob"></div>
        <div class="absolute top-20 left-20 w-72 h-72 bg-blue-900/10 rounded-full blur-3xl -z-10 animate-blob animation-delay-2000"></div>

        <div class="max-w-4xl mx-auto text-center">
            <div class="flex justify-center items-center gap-2 text-sm text-gray-400 mb-6">
                <a href="{{ route('guest.home') }}" class="hover:text-white">Beranda</a>
                <span>/</span>
                <a href="{{ route('guest.berita') }}" class="hover:text-white">Berita</a>
                <span>/</span>
                <span class="text-red-400">{{ $artikel->kategori->nama }}</span>
            </div>

            <h1 class="text-3xl md:text-5xl font-bold mb-6 leading-tight">
                {{ $artikel->judul }}
            </h1>

            <div class="flex flex-wrap justify-center items-center gap-6 text-sm text-gray-400">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 rounded-full bg-gray-700 flex items-center justify-center text-xs text-white font-bold">
                        {{ substr($artikel->author->name ?? 'A', 0, 1) }}
                    </div>
                    <span>{{ $artikel->author->name ?? 'Admin' }}</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    <span>{{ $artikel->tanggal_terbit ? $artikel->tanggal_terbit->format('d F Y') : $artikel->created_at->format('d F Y') }}</span>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-24 px-4">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12">

            <div class="lg:col-span-8">

                <div class="rounded-2xl overflow-hidden mb-10 border border-white/10 shadow-2xl">
                    @if($artikel->thumbnail)
                        <img src="{{ asset('storage/' . $artikel->thumbnail) }}" alt="{{ $artikel->judul }}" class="w-full h-auto object-cover">
                    @else
                        <img src="https://picsum.photos/seed/detail{{ $artikel->id }}/1200/600" alt="Cover" class="w-full h-auto object-cover">
                    @endif
                </div>

                <div class="glass-card p-8 md:p-12 rounded-3xl border border-white/5 bg-[#0f253b]/50">
                    <article class="article-content text-lg">
                        {!! $artikel->isi ?? $artikel->content !!}
                    </article>

                    <div class="mt-12 pt-8 border-t border-white/10">
                        <p class="text-sm text-gray-400 mb-4">Bagikan artikel ini:</p>
                        <div class="flex gap-3">
                            <button class="px-4 py-2 rounded-lg bg-[#1877F2] text-white text-sm font-bold hover:opacity-90 transition">Facebook</button>
                            <button class="px-4 py-2 rounded-lg bg-[#1DA1F2] text-white text-sm font-bold hover:opacity-90 transition">Twitter</button>
                            <button class="px-4 py-2 rounded-lg bg-[#25D366] text-white text-sm font-bold hover:opacity-90 transition">WhatsApp</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-4 space-y-8">

                <div class="glass-card p-6 rounded-2xl border border-white/10 bg-[#0f253b]/80 sticky top-24">
                    <h3 class="text-xl font-bold mb-6 flex items-center gap-2 border-b border-white/10 pb-4">
                        <span class="w-1 h-6 bg-red-600 rounded-full"></span>
                        Berita Terkait
                    </h3>

                    <div class="space-y-6">
                        @forelse($beritaTerkait as $item)
                        <a href="{{ route('guest.baca-berita', $item->slug) }}" class="group flex gap-4 items-start">
                            <div class="w-20 h-20 rounded-lg overflow-hidden flex-shrink-0 bg-gray-800">
                                @if($item->thumbnail)
                                    <img src="{{ asset('storage/' . $item->thumbnail) }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                                @else
                                    <img src="https://picsum.photos/seed/thumb{{ $item->id }}/200/200" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                                @endif
                            </div>
                            <div>
                                <h4 class="font-bold text-white text-sm leading-snug group-hover:text-red-400 transition mb-2 line-clamp-2">
                                    {{ $item->judul }}
                                </h4>
                                <span class="text-xs text-gray-500">
                                    {{ $item->tanggal_terbit ? $item->tanggal_terbit->format('d M Y') : $item->created_at->format('d M Y') }}
                                </span>
                            </div>
                        </a>
                        @empty
                        <p class="text-gray-500 text-sm italic">Belum ada berita terkait lainnya.</p>
                        @endforelse
                    </div>
                </div>

                <div class="rounded-2xl overflow-hidden relative p-8 text-center group">
                    <div class="absolute inset-0 bg-gradient-to-br from-red-900 to-[#0B1F32]"></div>
                    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-20"></div>

                    <div class="relative z-10">
                        <h3 class="text-2xl font-bold text-white mb-2">Butuh Bantuan Hukum?</h3>
                        <p class="text-gray-300 text-sm mb-6">Konsultasikan masalah Anda dengan tim ahli PSH UPTT secara gratis.</p>
                        <a href="{{ route('guest.layanan') }}" class="inline-block px-6 py-3 bg-white text-red-900 font-bold rounded-full hover:bg-gray-100 transition shadow-lg transform group-hover:scale-105">
                            Konsultasi Sekarang
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>

</div>
