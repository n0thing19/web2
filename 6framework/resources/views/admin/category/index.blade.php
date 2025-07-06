@extends('app')

@section('content')
<div class="bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4 sm:px-8 py-8">

        {{-- Header Halaman --}}
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

        {{-- [BARU] Fitur Search dan Filter --}}
        <div class="mb-4">
            <form method="GET" action="{{ route('admin.category.index') }}">
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none">
                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                    <input type="text" name="search"
                           class="w-full pl-10 pr-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
                           placeholder="Cari kategori..." value="{{ request('search') }}">
                </div>
                {{-- Anda bisa menambahkan tombol submit jika diperlukan, atau user bisa menekan Enter --}}
            </form>
        </div>


        {{-- Kontainer Utama untuk Tabel --}}
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead>
                        <tr class="border-b border-gray-200">
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                {{-- [MODIFIKASI] Link untuk Sorting --}}
                                <a href="{{ route('admin.category.index', array_merge(request()->query(), ['sort_by' => 'name', 'sort_direction' => request('sort_direction') === 'asc' ? 'desc' : 'asc'])) }}" class="flex items-center">
                                    Nama Kategori
                                    {{-- Ikon Sorting --}}
                                    @if (request('sort_by') == 'name')
                                        @if (request('sort_direction', 'asc') == 'asc')
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" />
                                            </svg>
                                        @else
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        @endif
                                    @endif
                                </a>
                            </th>
                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @forelse($categories as $category)
                        <tr class="transition-all duration-300 ease-in-out hover:bg-gray-50 group">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="w-1 h-8 rounded-full bg-transparent group-hover:bg-blue-500 transition-colors duration-300"></div>
                                    <p class="text-sm font-semibold text-gray-900 ml-4">{{ $category->name }}</p>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
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
                                <svg class="mx-auto h-12 w-12 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                  <path vector-effect="non-scaling-stroke" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                                </svg>
                                <h3 class="mt-2 text-lg font-medium text-gray-800">Kategori Kosong</h3>
                                <p class="mt-1 text-sm text-gray-500">
                                    @if (request('search'))
                                        Tidak ada kategori yang cocok dengan pencarian "{{ request('search') }}".
                                    @else
                                        Belum ada kategori yang ditambahkan.
                                    @endif
                                </p>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            {{-- [MODIFIKASI] Pagination untuk menjaga query string --}}
            @if ($categories->hasPages())
                <div class="p-4 sm:p-6 bg-gray-50 border-t border-gray-200">
                    {{-- dengan ->links(), Laravel secara otomatis menjaga query string (search, sort, dll) --}}
                    {{ $categories->links() }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection