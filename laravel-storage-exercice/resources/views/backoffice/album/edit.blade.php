@extends('layouts.app')

@section('content')
    @include('partials.nav')
    <section class="w-75 me-auto ms-auto">
        <form action="/albums/{{ $album->id }}/update" method="POST">
            @csrf
            <div class="mb-3">
              <label for="nom" class="form-label">Nom</label>
              <input type="text" class="form-control" name="nom" value={{ $album->nom }}>
            </div>
            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <textarea class="form-control" name="description">{{ $album->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </section>
@endsection