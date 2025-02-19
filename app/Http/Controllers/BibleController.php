<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Verse;

class BibleController extends Controller
{
    public function index()
    {
        $books = Book::all(); // Lista de livros
        return view('bible.index', compact('books'));
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);
        $verses = Verse::where('book_id', $id)->orderBy('chapter')->orderBy('verse')->get();
        return view('bible.show', compact('book', 'verses'));
    }
}
