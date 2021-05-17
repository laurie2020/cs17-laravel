@extends('layouts.app')

@section('content')
    @include('partials.header')
    <section class="d-flex">
        <a class="btn border-2 border-success text-success" style="width: 70px; height: 39px" href="/articles/create">Create</a>
        <div class="container">
            <div class="row bg-secondary pt-3 pb-3">
                <div class="col text-center">#</div>
                <div class="col text-center">Nom</div>
                <div class="col text-center">Description</div>
                <div class="col text-center">Auteur</div>
                <div class="col text-center">Poste</div>
                <div class="col text-center">Actions</div>
            </div>
            @foreach ($articles as $article)
                <div class="row pt-3 pb-3 border-bottom">
                    <div class="col text-center">{{ $article->id }}</div>
                    <div class="col text-center">{{ $article->nom }}</div>
                    <div class="col text-center">{{ $article->description }}</div>
                    <div class="col text-center">{{ $article->auteur }}</div>
                    <div class="col text-center">{{ $article->poste }}</div>
                    <div class="col text-center">
                        <a href="/articles/{{ $article->id }}/edit" class="btn border-2 border-primary text-primary" style="width: 70px">Edit</a>
                        <form action="/articles/{{ $article->id }}/delete" method="POST">
                            @csrf
                            <button type="submit" class="btn border-2 border-danger text-danger">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
