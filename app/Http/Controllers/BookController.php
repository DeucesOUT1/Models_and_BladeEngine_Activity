<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $books = Book::where('title', 'LIKE', "%{$query}%")
                     ->orWhere('author', 'LIKE', "%{$query}%")
                     ->get();
        return view('books.index', compact('books', 'query'));
    }
}
