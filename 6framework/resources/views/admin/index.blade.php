@extends('app')

@section('content')
<div class="container mx-auto px-4 sm:px-8">
    <div class="py-8">
        <div>
            <h2 class="text-2xl font-semibold leading-tight">Dashboard Admin</h2>
        </div>
        <div class="my-2 flex sm:flex-row flex-col">
            {{-- Add search or filter options here if needed in the future --}}
        </div>
        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                <table class="min-w-full leading-normal">
                    <thead>
                        <tr class="bg-gray-100 text-left text-gray-600 uppercase text-sm">
                            <th class="px-5 py-3 border-b-2 border-gray-200">Section</th>
                            <th class="px-5 py-3 border-b-2 border-gray-200">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-50">
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">Categories</p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <a href="{{ route('admin.category.index') }}" class="text-indigo-600 hover:text-indigo-900">Manage Categories</a>
                            </td>
                        </tr>
                        <!-- Add more sections as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection