@extends('layouts.base')
@section('css', 'addBook')

@section('title', 'Ajouter')

@section('content')
    <h1 class="title">Ajouter un livre</h1>
    <div>
        <form action="addBook" method="POST">
            @csrf
            <div class="form-group row">
                <label for="title" class="col-sm-4 col-form-label">Titre</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="title" placeholder="Titre" value="">
                </div>
            </div>
            <div class="form-group row">
                <label for="author" class="col-sm-4 col-form-label">Auteur</label>
                <div class="col-sm-8">
                    <select type="text" class="form-control" name="author_id">
                        @foreach ($authors as $author)
                            <option value="{{ $author->id }}">{{ $author->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="publication_year" class="col-sm-4 col-form-label">Publication</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" name="publication_year" placeholder="Année de publication" value="">
                </div>
            </div>
            <div class="form-group row">
                <label for="genre" class="col-sm-4 col-form-label">Genres</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="genre" placeholder="Genre" value="">
                </div>
            </div>
            <div class="form-group row">
                <label for="synopsis" class="col-sm-4 col-form-label">Résumé</label>
                <div class="col-sm-8">
                    <textarea name="synopsis" id="" cols="24" rows="2"></textarea>
                </div>
            </div>
            <div class="btn-div">
                <button type="submit" class="btn btn-light">Ajouter !</button>
            </div>
        </form>
    </div>
@endsection


