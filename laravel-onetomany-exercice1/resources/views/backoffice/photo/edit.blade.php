@extends('layouts.app')

@section('content')
    @include('partials.nav')
    <section class="w-75 mx-auto">
        <h1 class="text-center"></h1>
        <div class="w-75 mx-auto">
            <ul>
                @foreach ($errors->all() as $message)
                    <li class="alert alert-danger">{{ $message }}</li>
                @endforeach
            </ul>
        </div>
        <form action="/photos/{{ $photo->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" name="nom" value="{{ $photo->nom }}">
            </div>
            <div class="mb-3">
                <label for="lien" class="form-label">Lien</label>
                <input type="file" class="form-control" name="lien">
            </div>
            <div class="mb-3">
                <label for="categorie" class="form-label">Categorie</label>
                <input type="text" class="form-control" name="categorie" value="{{ $photo->categorie }}">
            </div>
            <div class="mb-3">
                <label for="description">Description</label>
                <textarea class="form-control" name="description">{{ $photo->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="album_id">Album</label>
                <select class="form-select" name="album_id">
                    @foreach ($albums as $album)
                        <option value="{{ $album->id }}">{{ $album->nom }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
@endsection