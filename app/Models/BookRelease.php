<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class BookRelease extends Model
{
    protected $table = 'book_released_detail';
    protected $fillable = [
        'book_id',
        'member_id',
        'released_date',
        'return_date',
        'status',
    ];

    public function book(){
        return $this->belongsTo(Book::class, 'book_id', 'id');
    }

    public function member(){
        return $this->belongsTo(Member::class, 'member_id', 'id');
    }
}
