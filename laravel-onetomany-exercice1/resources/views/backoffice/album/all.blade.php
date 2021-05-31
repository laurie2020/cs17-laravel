@extends('layouts.app')

@section('content')
    @include('partials.nav')
    <section class="w-75 mx-auto">
        <h1 class="text-center">Albums</h1>
        <p class="text-center"><a href={{ route('albums.create') }} class="btn btn-success">Create</a></p>
        @if (session(message))
            <div class="alert alert-success w-75 me-auto ms-auto">{{ session('message') }}</div>
        @endif
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($albums as $album)
                    <tr>
                        <td>{{ $album->id }}</td>
                        <td><a href="/albums/{{ $album->id }}" >{{ $album->nom }}</a></td>
                        <td>{{ $album->description }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="/albums/{{ $album->id }}/edit" class="btn btn-warning">Edit</a>
                                <form action="/albums/{{ $album->id }}" method="POST" enctype="multipart/form-data">
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
