@extends('layouts.app')

@section('content')
    @include('partials.nav')
    <section class="w-75 mx-auto">
      <h1 class="text-center">Create Album</h1>
      <div class="w-75 mex-auto">
        <ul>
            @foreach ($errors->all() as $message)
                <li class="alert alert-danger">{{ $message }}</li>
            @endforeach
        </ul>
    </div>
        <form action={{ route('albums.store') }} method="POST">
            @csrf
            <div class="mb-3">
              <label for="nom" class="form-label">Nom</label>
              <input type="text" class="form-control" name="nom">
            </div>
            <div class="mb-3">
                <label for="description">Description</label>
                <textarea class="form-control" name="description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </section>
@endsection