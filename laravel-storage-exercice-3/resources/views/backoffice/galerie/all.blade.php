@extends('layouts.app')

@section('content')
    <section class="d-flex">
        @include('partials.nav2')
        <section class="all">
            <div class="all-child d-flex justify-content-center align-items-center galerie">
                <div class="tab">
                    <h1 class="text-center title">Galeries</h1>
                    <p class="text-center"><a href={{ route('galeries.create') }} class="btn create"><i class="fas fa-plus"></i></a></p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Image</th>
                                <th scope="col">Description</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($galeries as $galerie)
                                <tr>
                                    <td><a href="/galeries/{{ $galerie->id }}">{{ $galerie->id }}</a></td>
                                    <td>{{ $galerie->nom }}</td>
                                    <td><img src="{{ asset('img/' . $galerie->image) }}" alt="" width="50"></td>
                                    <td>{{ $galerie->description }}</td>
                                    <td>
                                        <div class="actions">
                                            <a href="galeries/{{ $galerie->id }}/download" class="btn download"><i class="fas fa-download"></i></a>
                                            <a href="/galeries/{{ $galerie->id }}/edit" class="btn edit"><i class="fas fa-edit"></i></a>
                                            <form action="/galeries/{{ $galerie->id }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('delete')
                                                <button class="btn delete"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">{{$galeries->links()}}</div>
                </div>
            </div>
        </section>
    </section>

@endsection
