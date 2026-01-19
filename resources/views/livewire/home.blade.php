<div class="bg-[#0B1F32] text-white overflow-hidden selection:bg-red-700 selection:text-white">

    <section class="relative min-h-screen flex items-center justify-center overflow-hidden pt-20">
        <div
            class="absolute top-0 -left-4 w-72 h-72 bg-red-800 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob">
        </div>
        <div
            class="absolute top-0 -right-4 w-72 h-72 bg-blue-800 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000">
        </div>
        <div
            class="absolute -bottom-8 left-20 w-72 h-72 bg-amber-600 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-4000">
        </div>
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10">
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col items-center text-center z-10">
            <div x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false"
                class="relative mb-8 transition-transform duration-700 transform"
                :class="hover ? 'scale-105' : 'scale-100'">
                <div class="absolute inset-0 bg-white/20 rounded-full blur-2xl transform scale-150 opacity-0 transition-opacity duration-500"
                    :class="hover ? 'opacity-40' : 'opacity-0'"></div>
                <img src="{{ asset('backend/logos/UP1.png') }}" alt="Logo Universitas Pahlawan"
                    class="w-32 h-32 md:w-48 md:h-48 object-contain relative z-10 drop-shadow-[0_0_15px_rgba(255,255,255,0.3)]">
            </div>

            <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight mb-6 leading-tight">
                <span
                    class="block text-transparent bg-clip-text bg-gradient-to-r from-white via-gray-200 to-gray-400">Pusat
                    Studi Hukum</span>
                <span class="block text-gradient-gold mt-2 font-serif italic">Universitas Pahlawan</span>
            </h1>

            <p class="mt-4 max-w-2xl text-lg md:text-xl text-gray-300 mb-10 font-light tracking-wide">
                Mengemban amanah <span class="text-red-400 font-semibold">Tri Dharma</span> melalui advokasi
                berkeadilan, riset progresif, dan pengabdian tanpa batas.
            </p>

            <div class="w-full max-w-xl group relative">
                <div
                    class="absolute -inset-1 bg-gradient-to-r from-red-600 to-amber-500 rounded-lg blur opacity-25 group-hover:opacity-75 transition duration-1000 group-hover:duration-200">
                </div>

                <form action="{{ route('guest.cek-kasus') }}" method="GET"
                    class="relative flex items-center bg-[#0f253b] border border-white/10 rounded-lg p-2 shadow-2xl">
                    <div class="pl-4 text-gray-400">
                        <svg class="w-6 h-6 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <input type="text" name="ticket" placeholder="Masukkan Nomor Tiket Kasus Anda..."
                        class="w-full bg-transparent border-none text-white placeholder-gray-500 focus:ring-0 px-4 py-3 font-medium tracking-wide">
                    <button type="submit"
                        class="bg-gradient-to-r from-red-700 to-red-900 hover:from-red-600 hover:to-red-800 text-white px-6 py-2.5 rounded-md font-bold shadow-lg transform transition hover:scale-105 active:scale-95">
                        Lacak
                    </button>
                </form>

                <p class="text-xs text-gray-400 mt-3 flex justify-center gap-2">
                    <span class="w-2 h-2 bg-green-500 rounded-full mt-1 animate-ping"></span>
                    Sistem LBH Online Aktif 24 Jam
                </p>
            </div>
        </div>

        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
            <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3">
                </path>
            </svg>
        </div>
    </section>

    <section class="relative py-12 -mt-20 z-20 px-4">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6">
            <div x-data="{ show: false }" x-intersect="show = true"
                :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                class="glass-card p-6 rounded-2xl transition duration-700 ease-out border-l-4 border-red-600 group hover:bg-white/10">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-gray-400 font-medium">Total Kasus</h3>
                    <div class="p-2 bg-red-600/20 rounded-lg text-red-500 group-hover:text-red-400 transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg>
                    </div>
                </div>
                <div class="text-4xl font-bold text-white mb-1">154+</div>
                <p class="text-sm text-gray-400">Telah ditangani & selesai</p>
            </div>
            <div x-data="{ show: false }" x-intersect="show = true"
                :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                class="glass-card p-6 rounded-2xl transition duration-700 delay-100 ease-out border-l-4 border-amber-500 group hover:bg-white/10">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-gray-400 font-medium">Riset Akademik</h3>
                    <div class="p-2 bg-amber-500/20 rounded-lg text-amber-500 group-hover:text-amber-400 transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                            </path>
                        </svg>
                    </div>
                </div>
                <div class="text-4xl font-bold text-white mb-1">87</div>
                <p class="text-sm text-gray-400">Jurnal & Opini Hukum</p>
            </div>
            <div x-data="{ show: false }" x-intersect="show = true"
                :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                class="glass-card p-6 rounded-2xl transition duration-700 delay-200 ease-out border-l-4 border-blue-500 group hover:bg-white/10">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-gray-400 font-medium">Mitra & Jejaring</h3>
                    <div class="p-2 bg-blue-500/20 rounded-lg text-blue-500 group-hover:text-blue-400 transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z">
                            </path>
                        </svg>
                    </div>
                </div>
                <div class="text-4xl font-bold text-white mb-1">20+</div>
                <p class="text-sm text-gray-400">Lembaga Pemerintah & Swasta</p>
            </div>
        </div>
    </section>

    <section class="py-10 bg-[#0B1F32]/50 border-y border-white/5 overflow-hidden group">
        <div class="text-center mb-6">
            <span class="text-xs font-semibold tracking-widest text-gray-500 uppercase">Jejaring Mitra Strategis
                Kami</span>
        </div>

        <div class="relative w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 overflow-hidden mask-image-gradient">
            <div
                class="absolute inset-y-0 left-0 w-20 bg-gradient-to-r from-[#0B1F32] to-transparent z-10 pointer-events-none">
            </div>
            <div
                class="absolute inset-y-0 right-0 w-20 bg-gradient-to-l from-[#0B1F32] to-transparent z-10 pointer-events-none">
            </div>

            <div class="flex items-center space-x-12 animate-infinite-scroll w-max">

                @foreach (['Polres Kampar', 'LBH Riau', 'Pemkab Kampar', 'Kemenkumham', 'Universitas Riau', 'Kejaksaan Negeri'] as $mitra)
                    <div
                        class="flex-shrink-0 flex items-center justify-center min-w-[150px] opacity-60 hover:opacity-100 transition duration-300 grayscale hover:grayscale-0 cursor-pointer">
                        <div class="flex flex-col items-center gap-2">
                            <div
                                class="w-16 h-16 bg-white/10 rounded-full flex items-center justify-center backdrop-blur-sm">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                    </path>
                                </svg>
                            </div>
                            <span class="text-xs text-white font-medium">{{ $mitra }}</span>
                        </div>
                    </div>
                @endforeach

                @foreach (['Polres Kampar', 'LBH Riau', 'Pemkab Kampar', 'Kemenkumham', 'Universitas Riau', 'Kejaksaan Negeri'] as $mitra)
                    <div
                        class="flex-shrink-0 flex items-center justify-center min-w-[150px] opacity-60 hover:opacity-100 transition duration-300 grayscale hover:grayscale-0 cursor-pointer">
                        <div class="flex flex-col items-center gap-2">
                            <div
                                class="w-16 h-16 bg-white/10 rounded-full flex items-center justify-center backdrop-blur-sm">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                    </path>
                                </svg>
                            </div>
                            <span class="text-xs text-white font-medium">{{ $mitra }}</span>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <section class="py-20 relative">
        <div class="absolute right-0 top-1/4 w-96 h-96 bg-red-900/20 rounded-full blur-3xl -z-10"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" x-data="{ show: false }" x-intersect="show = true">
                <h2 class="text-3xl md:text-5xl font-bold mb-4 opacity-0 transition duration-1000"
                    :class="show ? 'opacity-100 translate-y-0' : 'translate-y-10'">
                    Layanan & <span class="text-gradient-gold">Fokus Utama</span>
                </h2>
                <div class="h-1 w-24 bg-red-600 mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 md:grid-rows-2 gap-6 h-auto md:h-[600px]">
                <div
                    class="md:col-span-2 md:row-span-2 glass-card rounded-3xl p-8 relative overflow-hidden group hover:border-red-500/50 transition duration-500">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-red-900/80 to-transparent opacity-60 group-hover:opacity-80 transition">
                    </div>
                    <img src="https://images.unsplash.com/photo-1589829085413-56de8ae18c73?auto=format&fit=crop&q=80"
                        alt="Hukum"
                        class="absolute inset-0 w-full h-full object-cover -z-10 transition duration-700 group-hover:scale-110 grayscale group-hover:grayscale-0">
                    <div class="relative z-10 h-full flex flex-col justify-end">
                        <div
                            class="bg-red-600 w-12 h-12 rounded-full flex items-center justify-center mb-4 shadow-lg shadow-red-900/50 animate-bounce">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-3xl font-bold text-white mb-2">Advokasi & LBH</h3>
                        <p class="text-gray-200 mb-6 line-clamp-2">Layanan bantuan hukum litigasi maupun non-litigasi
                            untuk
                            masyarakat yang membutuhkan keadilan.</p>
                        <a href="#"
                            class="inline-flex items-center text-white font-semibold border-b border-white pb-1 hover:text-amber-400 hover:border-amber-400 transition">Ajukan
                            Permohonan <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg></a>
                    </div>
                </div>
                <div
                    class="md:col-span-2 glass-card rounded-3xl p-8 relative overflow-hidden group hover:bg-[#0f253b] transition duration-500">
                    <div
                        class="absolute right-0 top-0 p-4 opacity-10 group-hover:opacity-20 transition transform group-hover:rotate-12">
                        <svg class="w-40 h-40 text-amber-500" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z">
                            </path>
                        </svg>
                    </div>
                    <div class="relative z-10">
                        <h3 class="text-2xl font-bold text-amber-400 mb-2">Pusat Kajian & Riset</h3>
                        <p class="text-gray-400 text-sm">Mengembangkan pemikiran hukum kritis melalui jurnal, diskusi
                            publik, dan penelitian akademis dosen.</p>
                    </div>
                </div>
                <div
                    class="glass-card rounded-3xl p-6 relative overflow-hidden group hover:bg-[#0f253b] transition duration-500">
                    <div
                        class="absolute -right-4 -bottom-4 w-24 h-24 bg-green-500 rounded-full blur-2xl opacity-20 group-hover:opacity-40 transition">
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-10 h-10 bg-gray-700 rounded-lg flex items-center justify-center mb-4 group-hover:bg-green-600 transition duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Klinik Mahasiswa</h3>
                        <p class="text-gray-400 text-xs">Praktek langsung mahasiswa tingkat akhir dalam menangani
                            kasus.
                        </p>
                    </div>
                </div>
                <div
                    class="glass-card rounded-3xl p-6 relative overflow-hidden group hover:bg-[#0f253b] transition duration-500">
                    <div
                        class="absolute -left-4 -top-4 w-24 h-24 bg-blue-500 rounded-full blur-2xl opacity-20 group-hover:opacity-40 transition">
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-10 h-10 bg-gray-700 rounded-lg flex items-center justify-center mb-4 group-hover:bg-blue-600 transition duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">E-Consultation</h3>
                        <p class="text-gray-400 text-xs">Konsultasi hukum jarak jauh yang cepat dan terintegrasi.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 relative overflow-hidden">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-white mb-4">Pertanyaan <span class="text-amber-500">Umum</span>
                </h2>
                <p class="text-gray-400">Jawaban singkat untuk hal yang sering ditanyakan masyarakat.</p>
            </div>

            <div class="space-y-4" x-data="{ active: null }">

                <div class="glass-card rounded-2xl border border-white/10 overflow-hidden">
                    <button @click="active = (active === 1 ? null : 1)"
                        class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none">
                        <span class="font-bold text-white">Apakah layanan bantuan hukum ini gratis?</span>
                        <svg class="w-5 h-5 text-amber-500 transform transition-transform duration-300"
                            :class="active === 1 ? 'rotate-180' : ''" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div x-show="active === 1" x-collapse
                        class="px-6 pb-4 text-gray-300 text-sm leading-relaxed border-t border-white/5 pt-4">
                        Sesuai misi pengabdian masyarakat, PSH UPTT menyediakan layanan bantuan hukum (Probono) bagi
                        masyarakat tidak mampu yang memenuhi syarat dan ketentuan yang berlaku. Untuk konsultasi awal,
                        tidak dipungut biaya.
                    </div>
                </div>

                <div class="glass-card rounded-2xl border border-white/10 overflow-hidden">
                    <button @click="active = (active === 2 ? null : 2)"
                        class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none">
                        <span class="font-bold text-white">Jenis kasus apa saja yang ditangani?</span>
                        <svg class="w-5 h-5 text-amber-500 transform transition-transform duration-300"
                            :class="active === 2 ? 'rotate-180' : ''" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div x-show="active === 2" x-collapse
                        class="px-6 pb-4 text-gray-300 text-sm leading-relaxed border-t border-white/5 pt-4">
                        Kami menangani berbagai spektrum kasus hukum, mulai dari Perdata (Sengketa Tanah, Waris), Pidana
                        umum, hingga Hukum Keluarga (KDRT, Hak Asuh). Kami juga melayani konsultasi hukum non-litigasi
                        (di luar pengadilan).
                    </div>
                </div>

                <div class="glass-card rounded-2xl border border-white/10 overflow-hidden">
                    <button @click="active = (active === 3 ? null : 3)"
                        class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none">
                        <span class="font-bold text-white">Bagaimana cara mengajukan permohonan magang riset?</span>
                        <svg class="w-5 h-5 text-amber-500 transform transition-transform duration-300"
                            :class="active === 3 ? 'rotate-180' : ''" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div x-show="active === 3" x-collapse
                        class="px-6 pb-4 text-gray-300 text-sm leading-relaxed border-t border-white/5 pt-4">
                        Mahasiswa tingkat akhir yang ingin melakukan penelitian atau magang dapat mengajukan proposal
                        melalui menu "Riset" atau menghubungi admin kami secara langsung untuk prosedur administrasi
                        akademik.
                    </div>
                </div>

                <div class="glass-card rounded-2xl border border-white/10 overflow-hidden">
                    <button @click="active = (active === 4 ? null : 4)"
                        class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none">
                        <span class="font-bold text-white">Berapa lama proses verifikasi pengaduan?</span>
                        <svg class="w-5 h-5 text-amber-500 transform transition-transform duration-300"
                            :class="active === 4 ? 'rotate-180' : ''" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div x-show="active === 4" x-collapse
                        class="px-6 pb-4 text-gray-300 text-sm leading-relaxed border-t border-white/5 pt-4">
                        Tim kami akan memverifikasi laporan masuk dalam waktu 1x24 jam pada hari kerja. Anda dapat
                        memantau status secara real-time menggunakan fitur "Cek Kasus" dengan memasukkan Kode Tiket
                        Anda.
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-16 bg-[#091829]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-10">
                <div>
                    <h2 class="text-3xl font-bold text-white">Publikasi & <span class="text-red-500">Berita</span>
                    </h2>
                    <p class="text-gray-400 mt-2">Update terbaru dari civitas akademika PSH.</p>
                </div>
                <a href="#"
                    class="hidden md:flex items-center text-sm text-amber-500 hover:text-amber-400 transition">Lihat
                    Semua
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg></a>
            </div>
            <div class="flex overflow-x-auto pb-8 gap-6 snap-x snap-mandatory scroll-smooth hide-scrollbar">
                @foreach (range(1, 4) as $item)
                    <div
                        class="min-w-[300px] md:min-w-[350px] snap-center glass-card rounded-xl overflow-hidden hover:-translate-y-2 transition duration-300">
                        <div class="h-48 bg-gray-800 relative">
                            <img src="https://picsum.photos/seed/berita{{ $item }}/400/300"
                                alt="News"
                                class="w-full h-full object-cover opacity-70 hover:opacity-100 transition">
                            <div
                                class="absolute top-4 left-4 bg-red-600 text-white text-xs font-bold px-2 py-1 rounded">
                                BERITA</div>
                        </div>
                        <div class="p-6">
                            <div class="text-xs text-gray-500 mb-2 flex items-center gap-2"><svg class="w-3 h-3"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg> 19 Jan 2026</div>
                            <h3
                                class="text-lg font-bold text-white mb-2 leading-snug hover:text-red-400 transition cursor-pointer">
                                Sosialisasi Hukum Adat Kampar di Era Digital</h3>
                            <p class="text-gray-400 text-sm line-clamp-2">PSH UPTT mengadakan seminar nasional mengenai
                                peran hukum adat dalam penyelesaian sengketa tanah...</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="relative py-24 px-4 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-red-900 to-blue-900 opacity-20"></div>
        <div
            class="absolute bottom-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-white/20 to-transparent">
        </div>
        <div class="relative max-w-4xl mx-auto text-center z-10">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Butuh Bantuan Hukum?</h2>
            <p class="text-xl text-gray-300 mb-10 font-light">Jangan ragu untuk berkonsultasi. Kami siap mendampingi
                Anda
                mendapatkan keadilan yang layak.</p>
            <div class="flex flex-col md:flex-row gap-4 justify-center">
                <a href="#"
                    class="px-8 py-4 bg-white text-[#0B1F32] font-bold rounded-full shadow-[0_0_20px_rgba(255,255,255,0.3)] hover:shadow-[0_0_30px_rgba(255,255,255,0.5)] hover:scale-105 transition duration-300">Konsultasi
                    Sekarang</a>
                <a href="#"
                    class="px-8 py-4 border border-white/30 text-white font-semibold rounded-full hover:bg-white/10 hover:border-white transition duration-300 backdrop-blur-sm">Pelajari
                    Prosedur</a>
            </div>
        </div>
    </section>

</div>
