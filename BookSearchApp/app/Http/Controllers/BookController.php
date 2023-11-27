<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        return view('search');
    }

    public function search(Request $request)
    {
        if ($request->get('query')) {
            $query = $request->get('query');
            $books = Book::where('title', 'LIKE', "%{$query}%")
                ->orWhere('author', 'LIKE', "%{$query}%")
                ->get();

            return view('search', compact('books'));
        }
    }
}
