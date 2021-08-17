<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class ActionController extends Controller
{
    public function addBook(Request $request) {
        $book = new Book;
        $book->title = $request->title;
        $book->author = $request->author;
        $book->synopsis = $request->synopsis;
        $book->publication_year = $request->publication_year;
        $book->genre = $request->genre;

        $book->save();

        return redirect('books');
    }
}
