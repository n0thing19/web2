<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $books= Book::limit(4)->get();
        
        return view('homepage.index', [
            'book' => $books,
        ]);
    }

    public function book(int $id){
        $books = Book::findOrFail($id);
        return view('homepage.book', [
            'book' => $books,
        ]);
    }
}
