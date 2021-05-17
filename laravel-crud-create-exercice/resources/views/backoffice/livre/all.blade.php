@extends('layouts.app')

@section('content')
    @include('partials.header')
    <section class="d-flex">
        <a href="/livres/create" class="btn border-2 border-success text-success " style="height: 39px">Create</a>
        <div class="container">
            <table class="w-100 text-center">
                    <tr class="w-100 bg-secondary text-light">
                        <th>#</th>
                        <th>Titre</th>
                        <th>Auteur</th>
                        <th>Date de Publication</th>
                        <th>Nombre de Pages</th>
                        <th>Version Mobile</th>
                        <th>Actions</th>
                    </tr>
                    @foreach ($livres as $livre)
                        <tr>
                            <td>{{ $livre->id }}</td>
                            <td>{{ $livre->titre }}</td>
                            <td>{{ $livre->auteur }}</td>
                            <td>{{ $livre->publication }}</td>
                            <td>{{ $livre->pages }}</td>
                            <td>{{ $livre->mobile }}</td>
                            <td class="d-flex">
                                <a href="/livres/{{ $livre->id }}/edit" class="btn border-2 border-primary text-primary" style="width: 70px">Edit</a>
                                <form action="/livres/{{ $livre->id }}/delete" method="POST">
                                    @csrf
                                    <button class="btn border-2 border-danger text-danger ms-1" style="width: 70px">Delete</button>
                                </form>
                            </td>
                        </tr>   
                    @endforeach
            </table>
        </div>
    </section>
@endsection