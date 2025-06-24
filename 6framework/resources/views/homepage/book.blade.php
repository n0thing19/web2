@extends('app')
@section('content')
        <!-- Book Detail Section -->
        <section id="book-detail">
            <div class="bg-white p-8 rounded-xl shadow-lg">
                <div class="flex flex-col md:flex-row gap-10">
                    <!-- Book Cover -->
                    <div class="md:w-1/3 text-center">
                        <img src="https://placehold.co/300x450/3498db/ffffff?text=Buku+Satu" alt="Sampul Buku Satu" class="w-full max-w-xs mx-auto rounded-lg shadow-md">
                    </div>

                    <!-- Book Info -->
                    <div class="md:w-2/3">
                        <span class="bg-blue-100 text-blue-600 px-3 py-1 text-sm font-semibold rounded-full">{{$book['category']}}</span>
                        <h1 class="text-4xl font-bold text-gray-900 mt-4 mb-2">{{ $book['title'] }}</h1>
                        <p class="text-xl text-gray-600 mb-6">oleh <span class="font-semibold text-blue-600">{{$book['author']}}</span></p>

                        <h2 class="text-2xl font-bold text-gray-800 border-b pb-2 mb-4">Sinopsis</h2>
                        <p class="text-gray-600 leading-relaxed mb-6">\
                            {{ $book['excerpt'] }}
                        </p>

                        <h3 class="text-lg font-bold text-gray-800 mb-3">Detail Buku</h3>
                        <div class="grid grid-cols-2 gap-4 text-gray-600 mb-8">
                            <div><span class="font-semibold text-gray-900">Penerbit:</span> {{$book['author']}}</div>
                            <div><span class="font-semibold text-gray-900">Tahun Terbit:</span> {{$book['published_year']}}</div>
                            <div><span class="font-semibold text-gray-900">Jumlah Halaman:</span> 320</div>
                            <div><span class="font-semibold text-gray-900">Bahasa:</span> Indonesia</div>
                            <div><span class="font-semibold text-gray-900">ISBN:</span> {{$book['isbn']}}</div>
                            <div><span class="font-semibold text-gray-900">Stok Tersedia:</span> <span class="text-green-600 font-bold">5</span></div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex items-center space-x-4">
                            <button class="w-full md:w-auto bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300 shadow-lg flex items-center justify-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20v2H6.5A2.5 2.5 0 0 1 4 16.5v-11A2.5 2.5 0 0 1 6.5 3H20v2H6.5A2.5 2.5 0 0 1 4 5.5v11z"/><path d="M14 6L8 12l6 6"/></svg>
                                <span>Pinjam Buku</span>
                            </button>
                             <button class="w-full md:w-auto bg-gray-200 text-gray-800 px-8 py-3 rounded-lg font-semibold hover:bg-gray-300 transition duration-300 flex items-center justify-center space-x-2">
                               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg>
                                <span>Tambah ke Wishlist</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Related Books Section -->
        <section id="related-books" class="py-16">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Anda Mungkin Juga Suka</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                    <!-- Book Card 1 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden transform hover:-translate-y-2 transition duration-300">
                        <img src="https://placehold.co/300x450/2ecc71/ffffff?text=Buku+Dua" alt="Sampul Buku Dua" class="w-full h-64 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg truncate">Judul Buku Dua</h3>
                            <p class="text-gray-600 text-sm">Penulis B</p>
                        </div>
                    </div>
                    <!-- Book Card 2 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden transform hover:-translate-y-2 transition duration-300">
                       <img src="https://placehold.co/300x450/e74c3c/ffffff?text=Buku+Tiga" alt="Sampul Buku Tiga" class="w-full h-64 object-cover">
                       <div class="p-4">
                            <h3 class="font-semibold text-lg truncate">Judul Buku Tiga</h3>
                            <p class="text-gray-600 text-sm">Penulis C</p>
                        </div>
                    </div>
                    <!-- Book Card 3 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden transform hover:-translate-y-2 transition duration-300">
                        <img src="https://placehold.co/300x450/f1c40f/ffffff?text=Buku+Empat" alt="Sampul Buku Empat" class="w-full h-64 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg truncate">Judul Buku Empat</h3>
                            <p class="text-gray-600 text-sm">Penulis D</p>
                        </div>
                    </div>
                    <!-- Book Card 4 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden transform hover:-translate-y-2 transition duration-300">
                        <img src="https://placehold.co/300x450/9b59b6/ffffff?text=Buku+Lima" alt="Sampul Buku Lima" class="w-full h-64 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg truncate">Judul Buku Lima</h3>
                            <p class="text-gray-600 text-sm">Penulis E</p>
                        </div>
                    </div>
                     <!-- Book Card 5 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden transform hover:-translate-y-2 transition duration-300">
                        <img src="https://placehold.co/300x450/1abc9c/ffffff?text=Buku+Enam" alt="Sampul Buku Enam" class="w-full h-64 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg truncate">Judul Buku Enam</h3>
                            <p class="text-gray-600 text-sm">Penulis F</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
