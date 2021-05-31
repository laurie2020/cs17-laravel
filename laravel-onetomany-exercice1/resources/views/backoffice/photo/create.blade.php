@extends('layouts.app')

@section('content')
    @include('partials.nav')
    <section class="w-75 mx-auto">
        <h1 class="text-center">Create Photo</h1>
        <div class="w-75 mex-auto">
            <ul>
                @foreach ($errors->all() as $message)
                    <li class="alert alert-danger">{{ $message }}</li>
                @endforeach
            </ul>
        </div>
        <form action={{ route('photos.store') }} method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" name="nom">
            </div>
            <div class="mb-3">
                <label for="lien" class="form-label">Lien</label>
                <input type="file" class="form-control" name="lien">
            </div>
            <div class="mb-3">
                <label for="categorie" class="form-label">Categorie</label>
                <input type="text" class="form-control" name="categorie">
            </div>
            <div class="mb-3">
                <label for="description">Description</label>
                <textarea class="form-control" name="description"></textarea>
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
