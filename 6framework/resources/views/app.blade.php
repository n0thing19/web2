<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Digital | Selamat Datang</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide-react@latest/dist/lucide-react.js"></script>
    <script src="https://unpkg.com/react@18/umd/react.development.js"></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js"></script>
    
    <style>
        /* Menggunakan font Inter sebagai default */
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc; /* light gray background */
        }
        /* Custom scrollbar for better aesthetics */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Header / Navigation -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-blue-600">Perpus<span class="text-yellow-500">Digital</span></a>
            <div class="hidden md:flex items-center space-x-6">
                <a href="#home" class="text-gray-600 hover:text-blue-600 transition duration-300">Home</a>
                <a href="#latest-books" class="text-gray-600 hover:text-blue-600 transition duration-300">Buku Terbaru</a>
                <a href="#categories" class="text-gray-600 hover:text-blue-600 transition duration-300">Kategori</a>
                <a href="#news" class="text-gray-600 hover:text-blue-600 transition duration-300">Berita</a>
            </div>
            <a href="#register" class="hidden md:block bg-blue-600 text-white px-5 py-2 rounded-full hover:bg-blue-700 transition duration-300">Daftar Anggota</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="hidden md:block bg-red-600 text-white px-5 py-2 rounded-full hover:bg-red-700 transition duration-300">Logout</button>
            </form>
            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="md:hidden text-gray-700 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
            </button>
        </nav>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden px-6 pb-4">
            <a href="#home" class="block py-2 text-gray-600 hover:text-blue-600">Home</a>
            <a href="#latest-books" class="block py-2 text-gray-600 hover:text-blue-600">Buku Terbaru</a>
            <a href="#categories" class="block py-2 text-gray-600 hover:text-blue-600">Kategori</a>
            <a href="#news" class="block py-2 text-gray-600 hover:text-blue-600">Berita</a>
            <a href="#register" class="mt-2 block w-full text-center bg-blue-600 text-white px-5 py-2 rounded-full hover:bg-blue-700">Daftar Anggota</a>
        </div>
    </header>

    <main>
        @yield('content')
    </main>
    
    <!-- Footer -->
    <footer class="bg-gray-800 text-white">
        <div class="container mx-auto px-6 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- About -->
                <div>
                    <h3 class="font-bold text-xl mb-4">Perpus<span class="text-yellow-400">Digital</span></h3>
                    <p class="text-gray-400">Membuka jendela dunia melalui literasi digital untuk semua kalangan.</p>
                </div>
                <!-- Quick Links -->
                <div>
                    <h4 class="font-semibold text-lg mb-4">Tautan Cepat</h4>
                    <ul>
                        <li class="mb-2"><a href="#" class="text-gray-400 hover:text-white">Tentang Kami</a></li>
                        <li class="mb-2"><a href="#" class="text-gray-400 hover:text-white">Syarat & Ketentuan</a></li>
                        <li class="mb-2"><a href="#" class="text-gray-400 hover:text-white">Kebijakan Privasi</a></li>
                        <li class="mb-2"><a href="#" class="text-gray-400 hover:text-white">Bantuan & FAQ</a></li>
                    </ul>
                </div>
                <!-- Contact -->
                <div>
                    <h4 class="font-semibold text-lg mb-4">Hubungi Kami</h4>
                    <p class="text-gray-400 mb-2">Jl. Pustaka No. 123, Jakarta, Indonesia</p>
                    <p class="text-gray-400 mb-2">Email: info@perpusdigital.com</p>
                    <p class="text-gray-400">Telp: (021) 123-4567</p>
                </div>
                <!-- Social Media -->
                <div>
                    <h4 class="font-semibold text-lg mb-4">Ikuti Kami</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.323-1.325z"/></svg></a>
                        <a href="#" class="text-gray-400 hover:text-white"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-.424.727-.666 1.581-.666 2.477 0 1.694.86 3.193 2.164 4.062-.791-.025-1.533-.242-2.178-.597v.052c0 2.365 1.679 4.331 3.901 4.78-.409.111-.843.17-1.296.17-.314 0-.616-.031-.914-.086.621 1.933 2.422 3.34 4.564 3.38-1.667 1.305-3.779 2.085-6.076 2.085-.394 0-.784-.023-1.17-.067 2.152 1.386 4.706 2.196 7.447 2.196 8.941 0 13.842-7.403 13.4-13.842.934-.675 1.748-1.513 2.392-2.484z"/></svg></a>
                        <a href="#" class="text-gray-400 hover:text-white"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.162 6.162 6.162 6.162-2.759 6.162-6.162-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4s1.791-4 4-4 4 1.79 4 4-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44 1.441-.645 1.441-1.44-.645-1.44-1.441-1.44z"/></svg></a>
                    </div>
                </div>
            </div>
            <div class="mt-8 border-t border-gray-700 pt-8 text-center text-gray-400">
                <p>&copy; <span id="year"></span> PerpusDigital. Semua Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </footer>

    <script>
        // JavaScript untuk fungsionalitas menu mobile
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Set tahun footer secara dinamis
        document.getElementById('year').textContent = new Date().getFullYear();
        
        // Render Lucide Icons
        const createIcon = (containerId, iconName, props = {}) => {
            const IconComponent = lucide[iconName];
            if (IconComponent) {
                ReactDOM.render(
                    React.createElement(IconComponent, { size: 48, ...props }),
                    document.getElementById(containerId)
                );
            }
        };

        createIcon('icon-book-open', 'BookOpen');
        createIcon('icon-atom', 'Atom');
        createIcon('icon-landmark', 'Landmark');
        createIcon('icon-lightbulb', 'Lightbulb');
        createIcon('icon-palette', 'Palette');
        createIcon('icon-briefcase', 'Briefcase');

    </script>
</body>
</html>
