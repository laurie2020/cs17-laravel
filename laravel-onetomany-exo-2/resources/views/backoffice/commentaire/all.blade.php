@extends('layouts.app')

@section('content')
    @include('partials.nav')
    <section class="w-75 mx-auto">
        <h1 class="text-center">Commentaires</h1>
        <p class="text-center"><a href="{{ route("commentaires.create") }}" class="btn btn-success">Create</a></p>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Email</th>
                <th scope="col">Message</th>
                <th scope="col">Date</th>
                <th scope="col">Article</th>
                <th scope="col">Date du Publication</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($commentaires as $commentaire)
                    <tr>
                        <th scope="row">{{ $commentaire->id }}</th>
                        <td><a href="/articles/{{ $commentaire->id }}">{{ $commentaire->nom }}</a></td>
                        <td>{{ $commentaire->email }}</td>
                        <td>{{ $commentaire->message }}</td>
                        <td>{{ $commentaire->date }}</td>
                        <td>{{ $commentaire->article }}</td>
                        <td>
                            <a href="/articles/{{ $commentaire->id }}download" class="btn btn-primary">Download</a>
                            <a href="/articles/{{ $commentaire->id }}/edit" class="btn btn-warning">Edit</a>
                            <form action="/articles/{{ $commentaire->id }}" method="POST">
                                @csrf
                                @method("delete")
                                <button class="btn btn-danger">Danger</button>
                            </form>
                        </td>

                    </tr>
                @endforeach
              
            </tbody>
          </table>
          <div class="d-flex justify-content-center">{{$services->links()}}</div>
    </section>
@endsection