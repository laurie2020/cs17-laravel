@extends('layouts.app')

@section('content')
    @include('partials.nav')
    <section>
        <a href="/users/create" class="btn btn-success">Create</a>
        @if (session('message'))
            <div class="alert alert-success w-75 me-auto ms-auto">{{ session('message') }}</div>
        @endif
        <div class="container">
            <div class="row">
                <div class="col-1 d-flex justify-content-center align-items-center">#</div>
                <div class="col-1 d-flex justify-content-center align-items-center">Nom</div>
                <div class="col-1 d-flex justify-content-center align-items-center">Prenom</div>
                <div class="col-1 d-flex justify-content-center align-items-center">Age</div>
                <div class="col-2 d-flex justify-content-center align-items-center">Email</div>
                <div class="col-2 d-flex justify-content-center align-items-center">Mot de Passe</div>
                <div class="col-2 d-flex justify-content-center align-items-center">Photo de Profil</div>
                <div class="col-2 d-flex justify-content-center align-items-center">Actions</div>
                
            </div>
            @foreach ($users as $user)
            <div class="row">
                <div class="col-1 d-flex justify-content-center align-items-center">{{ $user->id }}</div>
                <div class="col-1 d-flex justify-content-center align-items-center"><a href="/users/{{ $user->id }}/show">{{ $user->nom }}</a></div>
                <div class="col-1 d-flex justify-content-center align-items-center">{{ $user->prenom }}</div>
                <div class="col-1 d-flex justify-content-center align-items-center">{{ $user->age }}</div>
                <div class="col-2 d-flex justify-content-center align-items-center" style="overflow: scroll">{{ $user->email }}</div>
                <div class="col-2 d-flex justify-content-center align-items-center" style="overflow: scroll">{{ $user->password }}</div>
                <div class="col-2 d-flex justify-content-center align-items-center">
                    <img src={{ asset('img/' . $user->pdp) }} alt="" width="200">
                </div>
                <div class="col-2">
                <a href="/users/{{ $user->id }}/download" class="btn btn-warning">Download</a>
                <a href="/users/{{ $user->id }}/edit" class="btn btn-primary">Edit</a>
                    <form action="/users/{{ $user->id }}/delete" method="POST">
                        @csrf
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </section>
@endsection