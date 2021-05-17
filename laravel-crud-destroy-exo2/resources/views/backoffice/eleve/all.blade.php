@extends('layouts.app')

@section('content')
    <h1 class="text-center">Eleves</h1>
    @include('partials.nav')
    <section class="mt-5">
        <div class="container">
            <div class="row border-bottom">
                <div class="col fw-bold mb-4">#</div>
                <div class="col fw-bold mb-4">Nom</div>
                <div class="col fw-bold mb-4">Adresse</div>
                <div class="col fw-bold mb-4">Description</div>
            </div>
            @foreach ($eleves as $eleve)
                <div class="row">
                    <div class="col mb-2">{{ $eleve->id }}</div>
                    <div class="col mb-2">{{ $eleve->nom }}</div>
                    <div class="col mb-2">{{ $eleve->adresse }}</div>
                    <div class="col mb-2">{{ $eleve->description }}</div>
                    <div class="col mb-2">
                        <form action="/eleves/{{ $eleve->id }}/delete" method="POST">
                            @csrf
                            <button  type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection