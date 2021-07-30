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
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->genre }}</td>
                <td>{{ $book->publication_year }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
