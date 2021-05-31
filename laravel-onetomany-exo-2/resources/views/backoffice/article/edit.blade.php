@extends('layouts.app')

@section('content')
    @include('partials.nav')
    <section class="w-75 mx-auto">
        <h1 class="text-center">Create Article</h1>
        <form action="/articles/{{ $article->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
                <label class="form-label">Titre</label>
                <input type="text" class="form-control" name="titre" value="{{ $article->titre }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Image</label>
                <input type="file" class="form-control" name="image">
            </div>
            <div class="mb-3">
                <label class="form-label">Categorie</label>
                <input type="text" class="form-control" name="categorie" value="{{ $article->categorie }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <input type="text" class="form-control" name="description" value="{{ $article->description }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Auteur</label>
                <input type="text" class="form-control" name="auteur" value="{{ $article->auteur }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Date de Publication</label>
                <input type="date" class="form-control" name="publication" value="{{ $article->publication }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
@endsection
