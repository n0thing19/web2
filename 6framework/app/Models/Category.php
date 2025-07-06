<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; // [1] Tambahkan ini

class Category extends Model
{
    use HasFactory; // [2] Tambahkan ini

    protected $table = 'categories';

    protected $fillable = [
        'name'
    ];
}
