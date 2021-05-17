@extends('layouts.app')

@section('content')
    <h1 class="text-center">Formations</h1>
    @include('partials.nav')
    <section class="mt-5">
        <div class="container">
            <div class="row border-bottom">
                <div class="col fw-bold mb-4">#</div>
                <div class="col fw-bold mb-4">Nom</div>
                <div class="col fw-bold mb-4">Adresse</div>
                <div class="col fw-bold mb-4">Description</div>
            </div>
            @foreach ($formations as $formation)
                <div class="row">
                    <div class="col mb-2">{{ $formation->id }}</div>
                    <div class="col mb-2">{{ $formation->nom }}</div>
                    <div class="col mb-2">{{ $formation->adresse }}</div>
                    <div class="col mb-2">{{ $formation->description }}</div>
                    <div class="col mb-2">
                        <form action="/formations/{{ $formation->id }}/delete" method="POST">
                            @csrf
                            <button  type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection