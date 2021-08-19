<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class ActionController extends Controller
{
    public function addBook(Request $request) {
        $book = new Book;
        $book->title = $request->title;
        $book->author_id = $request->author_id;
        $book->synopsis = $request->synopsis;
        $book->publication_year = $request->publication_year;
        $book->save();
        $book->genres()->attach($request->genres);
        return redirect('books');
    }

    public function deleteBook(Request $request) {
        $book = Book::findOrFail($request->id);
        $book->genres()->detach();
        $book->delete();
        return redirect('books');
    }

    public function updateBook(Request $request) {
        $book = Book::findOrFail($request->id);
        $book->title = $request->title;
        $book->author_id = $request->author_id;
        $book->synopsis = $request->synopsis;
        $book->publication_year = $request->publication_year;
        // $book->genres()->detach();
        // $book->genres()->attach($request->genres);
        $book->genres()->sync($request->genres);
        $book->save();
        return redirect('books');
    }
}
