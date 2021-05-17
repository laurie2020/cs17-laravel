@extends('layouts.app')

@section('content')
    @include('partials.nav')
    <section>
        <a href={{ route('photos.create') }} class="btn btn-success">Create</a>
        @if (session('message'))
            <div class="alert alert-success w-75 me-auto ms-auto">{{ session('message') }}</div>
        @endif
        <div class="container">
            <div class="row">
                <div class="col d-flex justify-content-center align-items-center">#</div>
                <div class="col d-flex justify-content-center align-items-center">Nom</div>
                <div class="col d-flex justify-content-center align-items-center">Path</div>
                <div class="col d-flex justify-content-center align-items-center">Categorie</div>
                <div class="col d-flex justify-content-center align-items-center">Description</div>
                <div class="col d-flex justify-content-center align-items-center">Actions</div>
                
            </div>
            @foreach ($photos as $photo)
            <div class="row">
                <div class="col d-flex justify-content-center align-items-center">{{ $photo->id }}</div>
                <div class="col d-flex justify-content-center align-items-center"><a href="/photos/{{ $photo->id }}}">{{ $photo->nom }}</a></div>
                <div class="col d-flex justify-content-center align-items-center">
                    <img src={{ asset('img/' . $photo->path) }} alt="" width="200">
                </div>
                <div class="col d-flex justify-content-center align-items-center">{{ $photo->categorie }}</div>
                <div class="col d-flex justify-content-center align-items-center">{{ $photo->description }}</div>
                <div class="col d-flex justify-content-center align-items-center">
                <a href="/photos/{{ $photo->id }}/download" class="btn btn-warning">Download</a>
                <a href="/photos/{{ $photo->id }}/edit" class="btn btn-primary">Edit</a>
                    <form action="/photos/{{ $photo->id }}" method="POST">
                        @csrf
                        @method("delete")
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </section>
@endsection