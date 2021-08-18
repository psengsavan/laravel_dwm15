<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Book;


class NavController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function books()
    {
        $books = Book::all();
        return view('books', ['books' => $books]);
        // return view('books', compact('books'));
    }

    public function addBook() {
        return view('addBook');
    }

    public function book($id) {
        $book = Book::findOrFail($id);
        return view('book', ['book' => $book]);
    }

    public function updateBook(Request $request) {
        $book = Book::findOrFail($request->id);
        return view('updateBook', ['book' => $book]);
    }
}
