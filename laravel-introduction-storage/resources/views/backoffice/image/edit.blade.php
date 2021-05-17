@extends('layouts.app')

@section('content')
    @include('partials.nav')
    <section>
        <form action="/images/{{ $image->id }}/update" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="nom" class="form-label">Nom</label>
              <input type="text" class="form-control" name="nom" value={{ $image->nom }}>
            </div>
            <div class="mb-3">
              <label for="path" class="form-label">Path</label>
              <input type="file" class="form-control" name="path">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description">{{ $image->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </section>
@endsection