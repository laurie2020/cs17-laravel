@extends('layouts.app')

@section('content')
    @include('partials.nav')
    <section>
        <a href="/photos/create" class="btn btn-success">Create</a>
        <div class="container">
            <h4>Nom: {{ $photo->nom }}</h4>
            <h4>Categorie: {{ $photo->categorie }}</h4>
            <h4>Description: {{ $photo->description }}</h4>
            <div><img src={{ asset('img/' . $photo->path) }} alt="" width="100%"></div>
            <a href={{ route('photos.index') }} class="btn btn-success ">Back</a>
        </div>
    </section>
@endsection