@extends('layouts.app')

@section('content')
    @include('partials.nav')
    <section>
        <div class="container">
            <h2>Nom: {{ $album->nom }}</h2>
            <h4>Description: {{ $album->description }}</h4>
            <a href="/albums/create" class="btn btn-success">Create</a>
        </div>
    </section>
@endsection