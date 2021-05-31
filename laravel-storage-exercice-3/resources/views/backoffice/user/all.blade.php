@extends('layouts.app')

@section('content')
    <section class="d-flex">
        @include('partials.nav2')
        <section class="all">
            <div class="all-child d-flex justify-content-center align-items-center">
                <div class="tab mx-auto">
                    <h1 class="text-center title">Users</h1>
                    <p class="text-center"><a href={{ route('users.create') }} class="btn create"><i class="fas fa-plus"></i></a></p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Prenom</th>
                                <th scope="col">Age</th>
                                <th scope="col">Email</th>
                                <th scope="col">Mot de Passe</th>
                                <th scope="col">Photo</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td><a href="/users/{{ $user->id }}">{{ $user->id }}</a></td>
                                    <td>{{ $user->nom }}</td>
                                    <td>{{ $user->prenom }}</td>
                                    <td>{{ $user->age }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->password }}</td>
                                    <td><img src="{{ asset('img/' . $user->photo) }}" alt="photo de profil" width="50"></td>
                                    <td>
                                        <div class="actions">
                                            <a href="users/{{ $user->id }}/download" class="btn download"><i class="fas fa-download"></i></a>
                                            <a href="/users/{{ $user->id }}/edit" class="btn edit"><i class="fas fa-edit"></i></a>
                                            <form action="/users/{{ $user->id }}" method="POST" enctype="multipart/form-data">
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
                    <div class="d-flex justify-content-center">{{$users->links()}}</div>
                </div>
            </div>
        </section>
    </section>

@endsection
