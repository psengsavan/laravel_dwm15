@extends('layouts.base')
@section('css', 'addBook')

@section('title', 'Modifier')

@section('content')
    <h1 class="title">Modifier un livre</h1>
    <div>
        <form action="updateOneBook" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $book->id }}">
            <div class="form-group row">
                <label for="title" class="col-sm-4 col-form-label">Titre</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" name="title" placeholder="Titre" value="{{ $book->title }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="author" class="col-sm-4 col-form-label">Auteur</label>
                <div class="col-sm-8">
                    <select type="text" class="form-control" name="author_id">
                        @foreach ($authors as $author)
                            @if ($book->author_id === $author->id)
                                <option value="{{ $author->id }}" selected>{{ $author->name }}</option>
                            @else
                                <option value="{{ $author->id }}">{{ $author->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="publication_year" class="col-sm-4 col-form-label">Publication</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" name="publication_year" placeholder="Année de publication" value="{{ $book->publication_year }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="genre" class="col-sm-4 col-form-label">Genres</label>
                <div class="col-sm-8">
                    @foreach ($genres as $genre)
                        <input type="checkbox" class="form-check-input" name="genres[]" value="{{ $genre->id }}">
                        <label for="">{{ $genre->name }}</label>
                    @endforeach
                </div>
            </div>
            <div class="form-group row">
                <label for="synopsis" class="col-sm-4 col-form-label">Résumé</label>
                <div class="col-sm-8">
                    <textarea name="synopsis" id="" cols="24" rows="2">{{ $book->synopsis }}</textarea>
                </div>
            </div>
            <div class="btn-div">
                <button type="submit" class="btn btn-light">Modifier !</button>
            </div>
        </form>
    </div>
@endsection


