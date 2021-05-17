@extends('layouts.app')

@section('content')
    @include('partials.nav')
    <section>
        <form action="/photos/{{ $photo->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
              <label for="nom" class="form-label">Nom</label>
              <input type="text" class="form-control" name="nom" value={{ $photo->nom }}>
            </div>
            <div class="mb-3">
              <label for="path" class="form-label">Path</label>
              <input type="file" class="form-control" name="path">
            </div>
            <div class="mb-3">
                <label for="categorie" class="form-label">Categorie</label>
                <input type="text" class="form-control" name="categorie" value={{ $photo->categorie }}>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description">{{ $photo->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </section>
@endsection