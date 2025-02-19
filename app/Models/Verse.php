<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verse extends Model
{
    use HasFactory;

    protected $table = 'verse';
    protected $fillable = ['book_id', 'chapter', 'verse', 'text'];

    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id');
    }
}
