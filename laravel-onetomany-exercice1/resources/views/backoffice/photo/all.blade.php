@extends('layouts.app')

@section('content')
    @include('partials.nav')
    <section class="w-75 mx-auto">
        <h1 class="text-center">Photos</h1>
        <p class="text-center"><a href={{ route('photos.create') }} class="btn btn-success">Create</a></p>

        {{-- @if (session(message))
            <div class="alert alert-success w-75 me-auto ms-auto">{{ session('message') }}</div>
        @endif --}}
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Lien</th>
                    <th scope="col">Categorie</th>
                    <th scope="col">Description</th>
                    <th scope="col">Album</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($photos as $photo)
                    <tr>
                        <td>{{ $photo->id }}</td>
                        <td>{{ $photo->nom }}</td>
                        <td><a href="/photos/{{ $photo->id }}" ><img src="{{ asset('img/' . $photo->lien) }}" alt="" width="100"></a></td>
                        <td>{{ $photo->categorie }}</td>
                        <td>{{ $photo->description }}</td>
                        <td>{{ $photo->album->nom }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="/photos/{{ $photo->id }}/edit" class="btn btn-warning">Edit</a>
                                <form action="/photos/{{ $photo->id }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>

                @endforeach

            </tbody>
        </table>
    </section>
@endsection