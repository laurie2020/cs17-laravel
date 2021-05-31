@extends('layouts.app')

@section('content')
    <section class="d-flex justify-content-between">
        @include('partials.nav2')
        <section class="all ">
            <div class="all-child d-flex justify-content-center align-items-center">
                <div class="tab">
                    <h1 class="text-center title">Caracteristique</h1>
                    <p class="text-center"><a href={{ route('caracteristiques.create') }} class="btn create"><i class="fas fa-plus"></i></a></p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Icone</th>
                                <th scope="col">Chiffre</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($caracteristiques as $caracteristique)
                                <tr>
                                    <td><a href="/caracteristiques/{{ $caracteristique->id }}">{{ $caracteristique->id }}</a></td>
                                    <td>{{ $caracteristique->nom }}</td>
                                    <td><i class="{{ $caracteristique->icone }}"></i></td>
                                    <td>{{ $caracteristique->chiffre }}</td>
                                    <td>
                                        <div class="actions">
                                            <a href="caracteristiques/{{ $caracteristique->id }}/download" class="btn download disabled"><i class="fas fa-download"></i></a>
                                            <a href="/caracteristiques/{{ $caracteristique->id }}/edit" class="btn edit"><i class="fas fa-edit"></i></a>
                                            <form action="/caracteristiques/{{ $caracteristique->id }}" method="POST">
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
                    <div class="d-flex justify-content-center">{{$caracteristiques->links()}}</div>
                </div>
            </div>
        </section>
    </section>

@endsection
