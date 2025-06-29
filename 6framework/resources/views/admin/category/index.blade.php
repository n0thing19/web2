@extends('app')

@section('content')
<div class="bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4 sm:px-8 py-8">

        {{-- Header Halaman (Tetap sama) --}}
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6">
            <div>
                <h2 class="text-3xl font-bold leading-tight text-gray-800">Manajemen Kategori</h2>
                <p class="text-gray-500 mt-1">Daftar semua kategori yang tersedia.</p>
            </div>
            <a href="{{ route('admin.category.create') }}" class="inline-flex items-center px-4 py-2 mt-4 sm:mt-0 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-300 shadow-lg hover:shadow-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                </svg>
                Tambah Kategori
            </a>
        </div>

        {{-- Kontainer Utama untuk Tabel --}}
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
            <div class="overflow-x-auto">
                {{-- Perubahan dimulai di sini, pada tag <table> --}}
                <table class="min-w-full">
                    <thead>
                        {{-- Header dibuat lebih minimalis --}}
                        <tr class="border-b border-gray-200">
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Nama Kategori
                            </th>
                            <th class="px-6 py-3  text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @forelse($categories as $category)
                        {{-- Baris dengan efek hover yang cantik --}}
                        <tr class="transition-all duration-300 ease-in-out hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    {{-- Aksen baris saat di-hover --}}
                                    <div class="w-1 h-8 rounded-full bg-transparent group-hover:bg-blue-500 transition-colors duration-300"></div>
                                    <p class="text-sm font-semibold text-gray-900 ml-4">{{ $category->name }}</p>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                {{-- Tombol aksi yang lebih rapi --}}
                                <div class="flex item-center justify-center space-x-3">
                                    <a href="{{ route('admin.category.edit', $category->id) }}" class="text-yellow-600 hover:text-yellow-900 transition duration-300" title="Edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </a>
                                    <form action="{{ route('admin.category.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus kategori ini?');" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900 transition duration-300" title="Hapus">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                              <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="2" class="text-center py-16 px-5">
                                {{-- Tampilan data kosong (tetap sama) --}}
                                <svg class="mx-auto h-12 w-12 text-gray-300" ...></svg>
                                <h3 class="mt-2 text-lg font-medium text-gray-800">Kategori Kosong</h3>
                                <p class="mt-1 text-sm text-gray-500">Belum ada kategori yang ditambahkan.</p>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            {{-- Pagination --}}
            @if ($categories->hasPages())
                <div class="p-4 sm:p-6 bg-gray-50 border-t border-gray-200">
                    {{ $categories->links() }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection