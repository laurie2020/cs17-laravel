@extends('layouts.app')

@section('content')
    @include('partials.header')
    <section class="d-flex">
        <a href="/bibliotheques/create" class="btn border-2 border-success text-success " style="height: 39px">Create</a>
        <div class="container">
            <table class="w-100 text-center">
                    <tr class="w-100 bg-secondary text-light">
                        <th>#</th>
                        <th>Nom</th>
                        <th>Adresse</th>
                        <th>Telephone</th>
                        <th>Actions</th>
                        
                    </tr>
                    @foreach ($bibliotheques as $bibliotheque)
                        <tr>
                            <td>{{ $bibliotheque->id }}</td>
                            <td>{{ $bibliotheque->nom }}</td>
                            <td>{{ $bibliotheque->adresse }}</td>
                            <td>{{ $bibliotheque->telephone }}</td>
                            <td class="d-flex">
                                <a href="/bibliotheques/{{ $bibliotheque->id }}/edit" class="btn border-2 border-primary text-primary" style="width: 70px">Edit</a>
                                <form action="/bibliotheques/{{ $bibliotheque->id }}/delete" method="POST">
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