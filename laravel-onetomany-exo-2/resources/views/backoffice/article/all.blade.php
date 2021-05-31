@extends('layouts.app')

@section('content')
    @include('partials.nav')
    <section class="w-75 mx-auto">
        <h1 class="text-center">Articles</h1>
        <p class="text-center"><a href="{{ route("articles.create") }}" class="btn btn-success">Create</a></p>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">Image</th>
                <th scope="col">Categorie</th>
                <th scope="col">Description</th>
                <th scope="col">Auteur</th>
                <th scope="col">Date du Publication</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    
                    <tr>
                        <th scope="row">{{ $article->id }}</th>
                        <td><a href="/articles/{{ $article->id }}">{{ $article->titre }}</a></td>
                        <td><img src="{{ asset("img/" . $article->image) }}" alt="" width="50"></td>
                        <td>{{ $article->categorie }}</td>
                        <td>{{ $article->description }}</td>
                        <td>{{ $article->auteur }}</td>
                        <td>{{ $article->publication }}</td>
                        <td>
                            <a href="/articles/{{ $article->id }}download" class="btn btn-primary">Download</a>
                            <a href="/articles/{{ $article->id }}/edit" class="btn btn-warning">Edit</a>
                            <form action="/articles/{{ $article->id }}" method="POST">
                                @csrf
                                @method("delete")
                                <button class="btn btn-danger">Danger</button>
                            </form>
                        </td>

                    </tr>
                @endforeach
              
            </tbody>
          </table>
    </section>
@endsection