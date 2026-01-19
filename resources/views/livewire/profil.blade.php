<div class="bg-[#0B1F32] text-white min-h-screen selection:bg-red-700 selection:text-white overflow-x-hidden">

    <style>
        .text-gradient-gold {
            background: linear-gradient(to right, #fbbf24, #d97706);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .glass-card-strong {
            background: rgba(15, 23, 42, 0.6);
            backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        }
    </style>

    <section class="relative h-[60vh] flex items-center justify-center overflow-hidden">
        <div
            class="absolute inset-0 bg-[url('https://picsum.photos/id/122/1920/1080')] bg-cover bg-center bg-fixed opacity-20">
        </div>
        <div class="absolute inset-0 bg-gradient-to-b from-[#0B1F32]/80 via-[#0B1F32]/50 to-[#0B1F32]"></div>

        <div
            class="absolute top-1/4 left-1/4 w-64 h-64 bg-red-600 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob">
        </div>
        <div
            class="absolute top-1/3 right-1/4 w-64 h-64 bg-blue-600 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000">
        </div>

        <div class="relative z-10 text-center px-4 max-w-4xl mx-auto" x-data="{ show: false }" x-init="setTimeout(() => show = true, 300)">
            <span
                class="inline-block py-1 px-3 rounded-full bg-white/10 border border-white/20 text-amber-400 text-sm font-semibold mb-6 backdrop-blur-sm transform transition duration-1000"
                :class="show ? 'translate-y-0 opacity-100' : '-translate-y-10 opacity-0'">
                Est. 2020 • Universitas Pahlawan Tuanku Tambusai
            </span>
            <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight transform transition duration-1000 delay-200"
                :class="show ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'">
                Wadah Kajian <br> & <span class="text-gradient-gold">Advokasi Hukum</span>
            </h1>
            <p class="text-lg text-gray-300 max-w-2xl mx-auto font-light transform transition duration-1000 delay-500"
                :class="show ? 'translate-y-0 opacity-100' : 'translate-y-10 opacity-0'">
                Mewujudkan keadilan, kepastian, dan kemanfaatan hukum melalui sinergi riset akademis dan pengabdian
                masyarakat[cite: 6].
            </p>
        </div>
    </section>

    <section class="py-20 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">

                <div x-data="{ show: false }" x-intersect="show = true" class="relative group">
                    <div
                        class="absolute -inset-4 bg-gradient-to-r from-red-600 to-amber-600 rounded-2xl blur-lg opacity-30 group-hover:opacity-60 transition duration-1000">
                    </div>
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl border border-white/10 transform transition duration-1000"
                        :class="show ? 'translate-x-0 opacity-100' : '-translate-x-20 opacity-0'">
                        <img src="https://picsum.photos/id/48/800/600"
                            alt="Gedung Universitas"
                            class="w-full h-auto object-cover grayscale group-hover:grayscale-0 transition duration-700">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-6">
                            <p class="text-amber-400 font-bold">Lembaga Struktural</p>
                            <p class="text-xs text-gray-300">Universitas Pahlawan Tuanku Tambusai</p>
                        </div>
                    </div>
                </div>

                <div x-data="{ show: false }" x-intersect="show = true"
                    class="space-y-6 transform transition duration-1000 delay-300"
                    :class="show ? 'translate-x-0 opacity-100' : 'translate-x-20 opacity-0'">
                    <h2 class="text-3xl md:text-4xl font-bold">Sejarah & <span class="text-red-500">Dedikasi</span></h2>
                    <div class="h-1 w-20 bg-amber-500 rounded-full"></div>

                    <p class="text-gray-300 leading-relaxed text-lg">
                        Pusat Studi Hukum (PSH) didirikan pada tahun <span class="text-white font-bold">2020</span>
                        sebagai respons atas kebutuhan institusional akan unit khusus yang berfungsi sebagai pusat
                        kajian dan penelitian hukum[cite: 11].
                    </p>
                    <p class="text-gray-400 leading-relaxed">
                        Kami berdiri untuk mendukung pelaksanaan <span class="text-amber-400 italic">Tri Dharma
                            Perguruan Tinggi</span>. Tidak hanya berteori di ruang kelas, PSH UPTT berkomitmen menjawab
                        tantangan hukum riil di tingkat lokal (Riau), nasional, hingga global melalui pemikiran kritis
                        dan solutif[cite: 7].
                    </p>

                    <div class="grid grid-cols-2 gap-4 mt-4">
                        <div class="glass-card-strong p-4 rounded-xl text-center">
                            <span class="block text-3xl font-bold text-red-500 mb-1">2020</span>
                            <span class="text-xs text-gray-400 uppercase tracking-widest">Tahun Berdiri</span>
                        </div>
                        <div class="glass-card-strong p-4 rounded-xl text-center">
                            <span class="block text-3xl font-bold text-blue-500 mb-1">A+</span>
                            <span class="text-xs text-gray-400 uppercase tracking-widest">Kualitas Riset</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-24 bg-[#081624] relative overflow-hidden">
        <div
            class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/diagmonds-light.png')] opacity-5">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

            <div class="mb-16 text-center" x-data="{ show: false }" x-intersect="show = true">
                <span class="text-amber-500 font-bold tracking-widest uppercase mb-2 block">Visi Kami</span>
                <div class="relative inline-block group">
                    <div
                        class="absolute -inset-2 bg-gradient-to-r from-amber-400 to-red-600 rounded-lg blur opacity-20 group-hover:opacity-50 transition duration-500">
                    </div>
                    <h2 class="relative text-2xl md:text-4xl font-bold text-white bg-[#0B1F32] px-8 py-6 rounded-lg border border-white/10 shadow-2xl transform transition duration-1000"
                        :class="show ? 'scale-100 opacity-100' : 'scale-90 opacity-0'">
                        "Menjadi lembaga kajian hukum yang <span class="text-amber-400">profesional</span>, <span
                            class="text-amber-400">adaptif</span> terhadap isu aktual, dan <span
                            class="text-amber-400">kompetitif</span> di tingkat nasional." [cite: 17]
                    </h2>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div x-data="{ show: false }" x-intersect="show = true"
                    class="glass-card-strong p-8 rounded-2xl hover:-translate-y-2 transition duration-500 border-t-4 border-red-600 transform"
                    :class="show ? 'translate-y-0 opacity-100' : 'translate-y-20 opacity-0'">
                    <div
                        class="w-12 h-12 bg-red-600/20 rounded-full flex items-center justify-center mb-6 text-red-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Riset Berkualitas</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Merencanakan dan mengelola kegiatan penelitian hukum yang berkelanjutan untuk mendukung
                        pengembangan keilmuan[cite: 19].
                    </p>
                </div>

                <div x-data="{ show: false }" x-intersect="show = true"
                    class="glass-card-strong p-8 rounded-2xl hover:-translate-y-2 transition duration-500 delay-100 border-t-4 border-amber-500 transform"
                    :class="show ? 'translate-y-0 opacity-100' : 'translate-y-20 opacity-0'">
                    <div
                        class="w-12 h-12 bg-amber-500/20 rounded-full flex items-center justify-center mb-6 text-amber-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Solusi Inovatif</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Menyelenggarakan kajian mendalam terhadap isu-isu hukum aktual guna menghasilkan solusi yang
                        aplikatif bagi masyarakat[cite: 20].
                    </p>
                </div>

                <div x-data="{ show: false }" x-intersect="show = true"
                    class="glass-card-strong p-8 rounded-2xl hover:-translate-y-2 transition duration-500 delay-200 border-t-4 border-blue-500 transform"
                    :class="show ? 'translate-y-0 opacity-100' : 'translate-y-20 opacity-0'">
                    <div
                        class="w-12 h-12 bg-blue-500/20 rounded-full flex items-center justify-center mb-6 text-blue-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Kerjasama Strategis</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Menjalin kemitraan dengan pihak dalam dan luar universitas untuk memperkuat ekosistem
                        hukum[cite: 21].
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div x-data="{ show: false }" x-intersect="show = true"
                class="relative bg-gradient-to-r from-[#0f253b] to-[#1e3a5f] rounded-3xl p-8 md:p-12 border border-white/10 shadow-2xl flex flex-col md:flex-row items-center gap-10 transform transition duration-1000"
                :class="show ? 'translate-y-0 opacity-100' : 'translate-y-20 opacity-0'">

                <div class="relative flex-shrink-0 group">
                    <div
                        class="absolute -inset-2 bg-gradient-to-br from-amber-400 to-red-600 rounded-full blur opacity-40 group-hover:opacity-75 transition duration-500">
                    </div>
                    <div class="relative w-48 h-48 rounded-full overflow-hidden border-4 border-[#0B1F32]">
                        <img src="https://ui-avatars.com/api/?name=Maya+Intan&background=random&size=256"
                            alt="Dr. Maya Intan Pratiwi" class="w-full h-full object-cover">
                    </div>
                    <div
                        class="absolute bottom-2 right-2 bg-blue-600 text-white p-2 rounded-full border-4 border-[#0B1F32]">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>

                <div class="text-center md:text-left">
                    <div class="uppercase tracking-widest text-amber-500 text-xs font-bold mb-2">Ketua Pusat Studi
                        Hukum</div>
                    <h3 class="text-3xl md:text-4xl font-bold text-white mb-2">Dr. Maya Intan Pratiwi, S.H., M.H</h3>
                    <p class="text-blue-200 mb-6 font-mono text-sm">[cite: 3]</p>

                    <p class="text-gray-300 italic mb-6">
                        "Kami berkomitmen mendorong lahirnya pemikiran hukum yang kritis, solutif, dan berlandaskan
                        nilai-nilai keilmuan."
                    </p>

                    <div class="inline-flex gap-4">
                        <div class="px-4 py-2 bg-white/5 rounded-lg border border-white/10">
                            <span class="block text-xs text-gray-400 uppercase">NUPTK</span>
                            <span class="font-mono font-bold text-white">0541769670230373</span> [cite: 4]
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 text-center">
        <div class="max-w-7xl mx-auto px-4">
            <h3 class="text-2xl font-bold text-gray-400 mb-8">Nilai Dasar Kami</h3>
            <div class="flex flex-wrap justify-center gap-4 md:gap-12">
                <span
                    class="px-6 py-3 rounded-full bg-white/5 border border-white/10 text-gray-300 flex items-center gap-2 hover:bg-white/10 transition">
                    <div class="w-2 h-2 rounded-full bg-red-500"></div> Keadilan
                </span>
                <span
                    class="px-6 py-3 rounded-full bg-white/5 border border-white/10 text-gray-300 flex items-center gap-2 hover:bg-white/10 transition">
                    <div class="w-2 h-2 rounded-full bg-amber-500"></div> Kepastian
                </span>
                <span
                    class="px-6 py-3 rounded-full bg-white/5 border border-white/10 text-gray-300 flex items-center gap-2 hover:bg-white/10 transition">
                    <div class="w-2 h-2 rounded-full bg-blue-500"></div> Kemanfaatan
                </span>
            </div>
        </div>
    </section>

</div>
