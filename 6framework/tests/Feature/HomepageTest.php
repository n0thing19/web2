<?php

use App\Models\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;


test('user should see section titles', function () {
    $response = $this->get('/');

    $response->assertStatus(200);

    $response->assertSeeInOrder([
        'Koleksi Terbaru',
        'Jelajahi Berdasarkan Kategori',
        'Berita & Acara Perpustakaan',
        'Jadi Anggota & Nikmati Akses Penuh',
    ]);
});

describe('Homepage Books', function() {
    uses(RefreshDatabase::class);

    beforeEach(function () {
        $this->books = Book::factory()->count(3)->create();
    });

    test('user should see Koleksi Terbaru', function () {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSeeText('Koleksi Terbaru');

        foreach ($this->books as $book) {
            $response->assertSeeText($book->title);
            $response->assertSeeText($book->author);
        }
    });

    test('user should see book details', function () {
        foreach ($this->books as $book) {
            $response = $this->get("/books/{$book->id}");

            $response->assertStatus(200);
            $response->assertSeeText($book->title);
            $response->assertSeeText($book->author);
            $response->assertSeeText($book->category);
            $response->assertSeeText($book->isbn);
            $response->assertSeeText($book->excerpt);
        }
    });

    test('user should see 404 for non-existent book', function () {
        $response = $this->get('/books/0'); // Assuming 0 does not exist

        $response->assertStatus(404);
    });
});