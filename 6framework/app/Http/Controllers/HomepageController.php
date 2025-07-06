<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $books = Book::latest()->take(4)->get();
        
        return view('homepage.index', ['books' => $books]);
    }

    // --- GANTI METODE INI ---
    /*
    public function book(int $id){
        $books = Book::findOrFail($id);
        return view('homepage.book', [
            'book' => $books,
        ]);
    }
    */

    // --- MENJADI SEPERTI INI ---
    public function show(Book $book) // Gunakan type-hint Book dan variabel $book
    {
        // Laravel akan otomatis melakukan findOrFail($id) untuk Anda.
        // Jika buku tidak ditemukan, Laravel akan otomatis menampilkan halaman 404.
        return view('homepage.book', [
            'book' => $book, // Variabel $book sudah berisi satu data buku
        ]);
    }
}