    @extends('app')

    @section('content')
    <body class="bg-gray-50">

        <div class="flex min-h-screen items-center justify-center p-4">
            <div class="w-full max-w-md">
                <!-- Back to Home Link -->
                <div class="text-center mb-6">
                    <a href="index.html" class="text-2xl font-bold text-blue-600">Perpus<span class="text-yellow-500">Digital</span></a>
                </div>
                
                <div class="bg-white p-8 sm:p-10 rounded-xl shadow-lg">
                    <div class="text-center mb-8">
                        <h1 class="text-3xl font-bold text-gray-900">Selamat Datang Kembali!</h1>
                        <p class="text-gray-500 mt-2">Silakan masuk untuk melanjutkan.</p>
                    </div>

                    <form action="{{route('authenticate')}}" method="POST">
                        @csrf
                        <!-- Email Input -->
                        <div class="mb-5">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-700">Alamat Email</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-gray-400"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                </span>
                                <input type="email" id="email" name="email" class="w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition" placeholder="anda@email.com" required>
                            </div>
                        </div>

                        <!-- Password Input -->
                        <div class="mb-6">
                            <div class="flex justify-between items-center mb-2">
                                <label for="password" class="text-sm font-medium text-gray-700">Password</label>
                                <a href="#" class="text-sm text-blue-600 hover:underline">Lupa Password?</a>
                            </div>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-gray-400"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                </span>
                                <input type="password" id="password" name="password" class="w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition" placeholder="••••••••" required>
                            </div>
                        </div>
                        
                        <!-- Submit Button -->
                        <div>
                            <button type="submit" class="w-full bg-blue-600 text-white font-semibold py-3 px-4 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition shadow-md">
                                Login
                            </button>
                        </div>
                    </form>

                    <!-- Sign up Link -->
                    <p class="text-center text-sm text-gray-600 mt-8">
                        Belum punya akun? 
                        <a href="#register" class="font-medium text-blue-600 hover:underline">Daftar di sini</a>
                    </p>
                </div>
                
                <!-- Back to home text link -->
                <div class="text-center mt-6">
                    <a href="index.html" class="text-sm text-gray-500 hover:text-gray-700 transition">
                        &larr; Kembali ke Beranda
                    </a>
                </div>
            </div>
        </div>@endsection