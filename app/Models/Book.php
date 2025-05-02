<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'book';
    protected $fillable = [
        'book_isbn',
        'book_name',
        'book_author',
        'book_publisher',
        'book_category',
        'quantity'
    ];
}
