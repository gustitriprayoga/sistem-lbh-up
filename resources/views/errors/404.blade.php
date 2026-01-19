<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tidak Ditemukan - PSH UPTT</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-[#0B1F32] text-white h-screen flex flex-col items-center justify-center overflow-hidden relative">

    <div
        class="absolute top-0 left-0 w-full h-full bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10 pointer-events-none">
    </div>
    <div
        class="absolute top-1/3 left-1/3 w-96 h-96 bg-red-600/20 rounded-full blur-3xl animate-blob pointer-events-none">
    </div>

    <div class="relative z-10 text-center px-4">
        <h1
            class="text-9xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-gray-700 to-gray-500 opacity-50 select-none">
            404
        </h1>

        <div class="-mt-16">
            <h2 class="text-3xl md:text-5xl font-bold mb-4">Halaman <span class="text-red-500">Hilang</span></h2>
            <p class="text-gray-400 mb-8 max-w-lg mx-auto">
                Maaf, halaman yang Anda tuju mungkin sudah dihapus, dipindahkan, atau link yang Anda akses salah.
            </p>

            <div class="flex flex-col md:flex-row gap-4 justify-center">
                <a href="{{ url('/') }}"
                    class="px-8 py-3 bg-red-600 hover:bg-red-700 text-white font-bold rounded-full transition shadow-lg shadow-red-900/50">
                    Kembali ke Beranda
                </a>
                <a href="javascript:history.back()"
                    class="px-8 py-3 border border-white/20 hover:bg-white/10 text-white font-bold rounded-full transition">
                    Kembali Sebelumnya
                </a>
            </div>
        </div>
    </div>

    <div class="absolute bottom-10 text-gray-600 text-xs">
        &copy; {{ date('Y') }} Pusat Studi Hukum Universitas Pahlawan
    </div>

</body>

</html>
