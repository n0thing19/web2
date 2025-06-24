<form method="{{ $method }}" action="{{ $action }}">
if($csrf)
    @csrf
    <button
    type="submit"
    class="inline-flex items-center px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300 shadow-md">

    {{ $slot }}
    </button>
</form>