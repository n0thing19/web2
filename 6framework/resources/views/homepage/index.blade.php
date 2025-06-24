@extends('app')

@section('content')
    <!-- Hero Section -->
    <section id="home" class="relative bg-white">
        <div class="container mx-auto px-6 py-16 md:py-24 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 text-center md:text-left mb-10 md:mb-0">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight mb-4">Gerbang Menuju Dunia Pengetahuan Tanpa Batas.</h1>
                <p class="text-lg text-gray-600 mb-8">Temukan koleksi buku digital, jurnal, dan sumber daya lainnya untuk menemani perjalanan belajar Anda.</p>
                <div class="flex justify-center md:justify-start space-x-4">
                    <a href="#latest-books" class="bg-blue-600 text-white px-8 py-3 rounded-full font-semibold hover:bg-blue-700 transition duration-300 shadow-lg">Jelajahi Koleksi</a>
                    <a href="#categories" class="bg-gray-200 text-gray-800 px-8 py-3 rounded-full font-semibold hover:bg-gray-300 transition duration-300">Lihat Kategori</a>
                </div>
            </div>
            <div class="md:w-1/2">
                <img src="https://placehold.co/600x400/E2E8F0/4A5568?text=Ilustrasi+Perpustakaan" alt="Ilustrasi orang membaca buku di perpustakaan" class="rounded-lg shadow-2xl w-full">
            </div>
        </div>
    </section>

    <!-- Latest Books Section -->
    <section id="latest-books" class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-2">Koleksi Terbaru</h2>
            <p class="text-center text-gray-600 mb-12">Buku-buku yang baru saja kami tambahkan ke dalam koleksi.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <!-- Book Card 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transform hover:-translate-y-2 transition duration-300 "><a href="/book/1" class="block">
                    <img src="https://placehold.co/300x450/3498db/ffffff?text=Buku+Satu" alt="Sampul Buku Satu" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg truncate">Judul Buku Satu</h3>
                        <p class="text-gray-600 text-sm">Penulis A</p>
                    </div>
                    </a>
                </div>
                <!-- Book Card 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transform hover:-translate-y-2 transition duration-300">
                    <img src="https://placehold.co/300x450/2ecc71/ffffff?text=Buku+Dua" alt="Sampul Buku Dua" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg truncate">Judul Buku Dua</h3>
                        <p class="text-gray-600 text-sm">Penulis B</p>
                    </div>
                </div>
                <!-- Book Card 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transform hover:-translate-y-2 transition duration-300">
                    <img src="https://placehold.co/300x450/e74c3c/ffffff?text=Buku+Tiga" alt="Sampul Buku Tiga" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg truncate">Judul Buku Tiga</h3>
                        <p class="text-gray-600 text-sm">Penulis C</p>
                    </div>
                </div>
                <!-- Book Card 4 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transform hover:-translate-y-2 transition duration-300">
                    <img src="https://placehold.co/300x450/f1c40f/ffffff?text=Buku+Empat" alt="Sampul Buku Empat" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg truncate">Judul Buku Empat</h3>
                        <p class="text-gray-600 text-sm">Penulis D</p>
                    </div>
                </div>
                <!-- Book Card 5 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transform hover:-translate-y-2 transition duration-300">
                    <img src="https://placehold.co/300x450/9b59b6/ffffff?text=Buku+Lima" alt="Sampul Buku Lima" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg truncate">Judul Buku Lima</h3>
                        <p class="text-gray-600 text-sm">Penulis E</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Book Categories Section -->
    <section id="categories" class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Jelajahi Berdasarkan Kategori</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8 text-center">
                <!-- Category Item 1 -->
                <a href="#" class="group">
                    <div class="bg-blue-100 p-6 rounded-lg group-hover:bg-blue-200 transition duration-300">
                        <div id="icon-book-open" class="inline-block text-blue-600"></div>
                    </div>
                    <h3 class="mt-4 font-semibold text-lg text-gray-700 group-hover:text-blue-600">Fiksi</h3>
                </a>
                <!-- Category Item 2 -->
                <a href="#" class="group">
                    <div class="bg-green-100 p-6 rounded-lg group-hover:bg-green-200 transition duration-300">
                            <div id="icon-atom" class="inline-block text-green-600"></div>
                    </div>
                    <h3 class="mt-4 font-semibold text-lg text-gray-700 group-hover:text-green-600">Sains</h3>
                </a>
                <!-- Category Item 3 -->
                <a href="#" class="group">
                    <div class="bg-yellow-100 p-6 rounded-lg group-hover:bg-yellow-200 transition duration-300">
                        <div id="icon-landmark" class="inline-block text-yellow-600"></div>
                    </div>
                    <h3 class="mt-4 font-semibold text-lg text-gray-700 group-hover:text-yellow-600">Sejarah</h3>
                </a>
                <!-- Category Item 4 -->
                <a href="#" class="group">
                    <div class="bg-purple-100 p-6 rounded-lg group-hover:bg-purple-200 transition duration-300">
                        <div id="icon-lightbulb" class="inline-block text-purple-600"></div>
                    </div>
                    <h3 class="mt-4 font-semibold text-lg text-gray-700 group-hover:text-purple-600">Non-Fiksi</h3>
                </a>
                <!-- Category Item 5 -->
                    <a href="#" class="group">
                    <div class="bg-red-100 p-6 rounded-lg group-hover:bg-red-200 transition duration-300">
                        <div id="icon-palette" class="inline-block text-red-600"></div>
                    </div>
                    <h3 class="mt-4 font-semibold text-lg text-gray-700 group-hover:text-red-600">Seni & Desain</h3>
                </a>
                <!-- Category Item 6 -->
                <a href="#" class="group">
                    <div class="bg-indigo-100 p-6 rounded-lg group-hover:bg-indigo-200 transition duration-300">
                        <div id="icon-briefcase" class="inline-block text-indigo-600"></div>
                    </div>
                    <h3 class="mt-4 font-semibold text-lg text-gray-700 group-hover:text-indigo-600">Bisnis</h3>
                </a>
            </div>
        </div>
    </section>
    
    <!-- News Section -->
    <section id="news" class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Berita & Acara Perpustakaan</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- News Card 1 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://placehold.co/400x250/6366F1/FFFFFF?text=Workshop+Menulis" class="w-full h-48 object-cover" alt="Workshop Menulis Kreatif">
                    <div class="p-6">
                        <span class="text-sm text-blue-600 font-semibold">Workshop</span>
                        <h3 class="font-bold text-xl my-2">Workshop Menulis Kreatif Bersama Penulis Ternama</h3>
                        <p class="text-gray-600 text-base mb-4">Tingkatkan kemampuan menulismu dalam workshop eksklusif yang akan diadakan akhir bulan ini.</p>
                        <a href="#" class="text-blue-600 font-semibold hover:underline">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>
                <!-- News Card 2 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://placehold.co/400x250/F59E0B/FFFFFF?text=Pameran+Buku" class="w-full h-48 object-cover" alt="Pameran Buku Langka">
                    <div class="p-6">
                        <span class="text-sm text-yellow-600 font-semibold">Pameran</span>
                        <h3 class="font-bold text-xl my-2">Pameran Koleksi Buku Langka Abad ke-18</h3>
                        <p class="text-gray-600 text-base mb-4">Jangan lewatkan kesempatan langka untuk melihat koleksi buku bersejarah kami secara langsung.</p>
                        <a href="#" class="text-yellow-600 font-semibold hover:underline">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>
                <!-- News Card 3 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://placehold.co/400x250/10B981/FFFFFF?text=Digitalisasi" class="w-full h-48 object-cover" alt="Proyek Digitalisasi">
                    <div class="p-6">
                        <span class="text-sm text-green-600 font-semibold">Pengumuman</span>
                        <h3 class="font-bold text-xl my-2">Perpustakaan Memulai Proyek Digitalisasi Arsip Nasional</h3>
                        <p class="text-gray-600 text-base mb-4">Kami berkomitmen untuk melestarikan dan menyediakan akses ke arsip penting bangsa.</p>
                        <a href="#" class="text-green-600 font-semibold hover:underline">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Member Registration Section -->
    <section id="register" class="bg-blue-600">
        <div class="container mx-auto px-6 py-16 text-center">
            <h2 class="text-3xl font-bold text-white mb-4">Jadi Anggota & Nikmati Akses Penuh</h2>
            <p class="text-blue-200 text-lg mb-8 max-w-2xl mx-auto">Dapatkan akses tak terbatas ke ribuan buku digital, pinjam buku favoritmu, dan dapatkan rekomendasi bacaan yang dipersonalisasi.</p>
            <a href="#" class="bg-white text-blue-600 px-10 py-4 rounded-full font-bold text-lg hover:bg-blue-100 transition duration-300 shadow-xl">Daftar Sekarang Gratis!</a>
        </div>
    </section>
@endsection