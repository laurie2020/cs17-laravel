@extends('layouts.app')

@section('content')
    @include('partials.header')
    <section class="d-flex">
        <a href="/users/create" class="btn border-2 border-success text-success " style="height: 39px">Create</a>
        <div class="container">
            <table class="w-100 text-center">
                    <tr class="w-100 bg-secondary text-light">
                        <th>#</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Age</th>
                        <th>Email</th>
                        <th>Photo</th>
                        <th>Actions</th>
                    </tr>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->nom }}</td>
                            <td>{{ $user->prenom }}</td>
                            <td>{{ $user->age }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->photo }}</td>
                            <td class="d-flex">
                                <a href="/users/{{ $user->id }}/edit" class="btn border-2 border-primary text-primary" style="width: 70px">Edit</a>
                                <form action="/users/{{ $user->id }}/delete" method="POST">
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