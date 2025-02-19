<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Verse;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function login()
    {
        return view('login');
    }

    public function ofertas()
    {
        return view('ofertas');
    }

    public function biblia()
    {
        $books = Book::all(); // Lista de livros
        return view('biblia', compact('books'));
    }

    public function bibliaShow($id)
    {
        $book = Book::findOrFail($id);
        $verses = Verse::where('book_id', $id)->orderBy('chapter')->orderBy('verse')->get();
        return view('bibliaShow', compact('book', 'verses'));
    }
}
