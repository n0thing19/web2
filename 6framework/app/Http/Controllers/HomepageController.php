<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $book = [
            'id' => 1,
            'title' => 'Welcome to the Homepage',
            'description' => 'This is the homepage of our application.',
        ];
        return view('homepage.index', [
            'book' => $book,
        ]);
    }

    public function book(int $id)
    {$book = [
            'title' => 'Welcome to the Homepage',
            'description' => 'This is the homepage of our application.',
        ];
        return view('homepage.book', [
            'book' => $book,
        ]);
    }
}
