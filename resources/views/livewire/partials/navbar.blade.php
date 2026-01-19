<nav class="bg-white border-b border-gray-200 sticky top-0 z-50 shadow-sm" x-data="{ open: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">

            <div class="flex items-center">
                <a href="/" class="flex-shrink-0 flex items-center gap-3">
                    <div
                        class="w-10 h-10 bg-red-700 rounded-lg flex items-center justify-center text-white font-bold text-xl">
                        P
                    </div>
                    <div class="flex flex-col">
                        <span class="text-lg font-bold text-gray-900 leading-none">PSH UPTT</span>
                        <span class="text-xs text-gray-500 font-medium">Universitas Pahlawan</span>
                    </div>
                </a>
            </div>

            <div class="hidden md:flex md:items-center md:space-x-8">
                <a href="{{ route('guest.home') }}"
                    class="text-gray-900 hover:text-red-600 font-medium transition {{ request()->routeIs('guest.home') ? 'text-red-600 font-bold' : '' }}">
                    Beranda
                </a>
                <a href="{{ route('guest.profil') }}"
                    class="text-gray-500 hover:text-red-600 font-medium transition {{ request()->routeIs('guest.profil') ? 'text-red-600 font-bold' : '' }}">
                    Profil
                </a>
                <a href="{{ route('guest.layanan') }}"
                    class="text-gray-500 hover:text-red-600 font-medium transition {{ request()->routeIs('guest.layanan') ? 'text-red-600 font-bold' : '' }}">
                    Layanan LBH
                </a>
                <a href="{{ route('guest.riset') }}"
                    class="text-gray-500 hover:text-red-600 font-medium transition {{ request()->routeIs('guest.riset') ? 'text-red-600 font-bold' : '' }}">
                    Riset
                </a>
                <a href="{{ route('guest.berita') }}"
                    class="text-gray-500 hover:text-red-600 font-medium transition {{ request()->routeIs('guest.berita') ? 'text-red-600 font-bold' : '' }}">
                    Berita
                </a>

                <a href="{{ route('guest.ajukan') }}"
                    class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md text-sm font-semibold transition shadow-md">
                    Ajukan Konsultasi
                </a>
            </div>

            <div class="flex items-center md:hidden">
                <button @click="open = ! open" class="text-gray-500 hover:text-gray-700 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div :class="{ 'block': open, 'hidden': !open }" class="hidden md:hidden bg-white border-t border-gray-100">
        <div class="pt-2 pb-3 space-y-1 px-4">
            <a href="/"
                class="block pl-3 pr-4 py-2 border-l-4 border-red-500 text-base font-medium text-red-700 bg-red-50">Beranda</a>
            <a href="#"
                class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800">Profil</a>
            <a href="#"
                class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800">Layanan
                LBH</a>
            <div class="pt-4">
                <a href="{{ route('guest.ajukan') }}"
                    class="block w-full text-center bg-red-600 text-white px-4 py-3 rounded-md font-bold">
                    Ajukan Konsultasi
                </a>
            </div>
        </div>
    </div>
</nav>
