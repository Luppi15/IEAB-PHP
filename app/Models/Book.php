<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'book';
    protected $fillable = ['id', 'name'];

    public function verses()
    {
        return $this->hasMany(Verse::class, 'book_id');
    }
}
