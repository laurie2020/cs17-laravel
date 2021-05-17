@extends('layouts.app')

@section('content')
    @include('partials.header')
    <section>
        <form class="w-75 me-auto ms-auto" action="/articles/{{ $article->id }}/update" method="POST">
          @csrf
            <div class="mb-3">
              <label class="form-label fw-bold">Nom</label>
              <input type="text" class="form-control" name="nom" value={{ $article->nom }}>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Description</label>
                <textarea class="form-control" name="description" cols="30" rows="10">{{ $article->description }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Auteur</label>
                <input type="text" class="form-control" name="auteur" value={{ $article->auteur }}>
              </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Poste</label>
                <input type="text" class="form-control" name="poste" value={{ $article->poste }}>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </section>
@endsection