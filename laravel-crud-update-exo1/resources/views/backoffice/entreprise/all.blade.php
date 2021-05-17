@extends('layouts.app')

@section('content')
    @include('partials.header')
    <section class="d-flex">
        <a class="btn border-2 border-success text-success" style="width: 70px; height: 39px" href="/entreprises/create">Create</a>
        <div class="container">
            <div class="row bg-secondary pt-3 pb-3">
                <div class="col text-center">#</div>
                <div class="col text-center">Nom</div>
                <div class="col text-center">Adresse</div>
                <div class="col text-center">Telephone</div>
                <div class="col text-center">P. de Contact</div>
                <div class="col text-center">Image</div>
                <div class="col text-center">Actions</div>
            </div>
            @foreach ($entreprises as $entreprise)
                <div class="row pt-3 pb-3 border-bottom">
                    <div class="col text-center">{{ $entreprise->id }}</div>
                    <div class="col text-center">{{ $entreprise->nom }}</div>
                    <div class="col text-center">{{ $entreprise->adresse }}</div>
                    <div class="col text-center">{{ $entreprise->telephone }}</div>
                    <div class="col text-center">{{ $entreprise->pDeContact }}</div>
                    <div class="col text-center">{{ $entreprise->image }}</div>
                    <div class="col text-center">
                        <a href="/entreprises/{{ $entreprise->id }}/edit" class="btn border-2 border-primary text-primary" style="width: 70px">Edit</a>
                        <form action="/entreprises/{{ $entreprise->id }}/delete" method="POST">
                            @csrf
                            <button type="submit" class="btn border-2 border-danger text-danger">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection