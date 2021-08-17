@extends('layouts.base')
@section('css', 'books')

@section('title', 'Livres')

@section('content')
<h1 class="title">Liste des livres</h1>

<div class="list">
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Auteur</th>
                <th>Genre</th>
                <th>Date</th>
                <th>Supp</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr>
                <td><a href="book/{{ $book->id }}">{{ $book->title }}</a></td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->genre }}</td>
                <td>{{ $book->publication_year }}</td>
                <td>
                    <form action="deleteBook" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $book->id }}">
                        <input class="btn btn-danger" type="submit" value="x">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
