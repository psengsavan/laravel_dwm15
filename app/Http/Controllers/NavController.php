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
}
