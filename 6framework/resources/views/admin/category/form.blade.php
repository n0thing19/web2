@extends('app')
@section('content')
    <form method="post" action="{{ $action }}" class="max-w-md mx-auto p-6 bg-white rounded-lg shadow-md">
        @csrf

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Category Name</label>
            <input type="text" id="name" name="name" value="{{ old('name', $category->name ?? '') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
            
        </div>

        <div class="flex items-center justify-between">
            <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300 shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 mr-2"><path d="M12 5v14m7-7H5"></path></svg>
                Submit
            </button>
            <a href="{{ route('admin.category.index') }}" class="text-gray-600 hover:text-gray-800">Cancel</a>
        </div>
    </form>
@endsection