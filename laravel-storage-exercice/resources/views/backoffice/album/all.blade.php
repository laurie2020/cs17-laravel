@extends('layouts.app')

@section('content')
    @include('partials.nav')
    <section>
        <a href="/albums/create" class="btn btn-success">Create</a>
        @if (session('message'))
            <div class="alert-success w-75 me-auto ms-auto" >{{ session('message') }}</div>
        @endif
        <div class="container">
            <div class="row">
                <div class="col d-flex justify-content-center align-items-center">#</div>
                <div class="col d-flex justify-content-center align-items-center">Nom</div>
                <div class="col d-flex justify-content-center align-items-center">Description</div>
                <div class="col d-flex justify-content-center align-items-center">Actions</div>
                
            </div>
            @foreach ($albums as $album)
            <div class="row">
                <div class="col d-flex justify-content-center align-items-center">{{ $album->id }}</div>
                <div class="col d-flex justify-content-center align-items-center"><a href="/albums/{{ $album->id }}/show">{{ $album->nom }}</a></div>
                <div class="col d-flex justify-content-center align-items-center">{{ $album->description }}</div>
                <div class="col d-flex justify-content-center align-items-center">
                <a href="/albums/{{ $album->id }}/edit" class="btn btn-primary">Edit</a>
                <form action="/albums/{{ $album->id }}/delete" method="POST">
                    @csrf
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
                </div>
            </div>
            @endforeach
        </div>
    </section>
@endsection