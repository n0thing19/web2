@extends('app')

@section('content')
<div class="bg-gray-50 min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-xl w-full space-y-8 bg-white p-8 sm:p-10 rounded-2xl shadow-xl">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">{{ $formHeading }}</h1>
            <p class="mt-2 text-sm text-gray-600">
                Lengkapi informasi di bawah ini untuk {{ $category->exists ? 'memperbarui' : 'membuat' }} kategori.
            </p>
        </div>

        <form action="{{ $action }}" method="POST" class="space-y-6">
            @csrf
            @if ($category->exists)
                @method('PUT')
            @endif

            <div>
                <label for="name" class="block text-sm font-bold text-gray-700 mb-2">
                    Nama Kategori
                </label>
                <div class="mt-1">
                    <input type="text"
                           name="name"
                           id="name"
                           value="{{ old('name', $category->name) }}"
                           class="w-full px-4 py-3 bg-gray-50 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-300 ease-in-out"
                           placeholder="cth: Makanan Ringan"
                           required>
                </div>
                @error('name')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="border-t border-gray-200 my-6"></div>

            <div class="flex justify-end space-x-4">
                <a href="{{ route('admin.category.index') }}" class="px-6 py-2 text-sm font-semibold text-gray-700 bg-gray-200 rounded-lg hover:bg-gray-300 transition duration-300">
                    Batal
                </a>
                <button type="submit" class="px-6 py-2 text-sm font-semibold text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-300 shadow-md">
                    {{ $category->exists ? 'Update Kategori' : 'Simpan Kategori' }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection