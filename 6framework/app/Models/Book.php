<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //data Book disimpan di table books
    protected $table = 'books';
    
    //komon yang bisa di mass assign
    protected $fillable = [
        'title',
        'author',
        'published_year',
        'category',
        'isbn',
        'excerpt'
    ];
}
