@extends('layouts.app')

@section('content')
    <h1 class="text-center">Batiments</h1>
    @include('partials.nav')
    <section class="mt-5">
        <div class="container">
            <div class="row border-bottom">
                <div class="col fw-bold mb-4">#</div>
                <div class="col fw-bold mb-4">Nom</div>
                <div class="col fw-bold mb-4">Adresse</div>
                <div class="col fw-bold mb-4">Description</div>
            </div>
            @foreach ($batiments as $batiment)
                <div class="row">
                    <div class="col mb-2">{{ $batiment->id }}</div>
                    <div class="col mb-2">{{ $batiment->nom }}</div>
                    <div class="col mb-2">{{ $batiment->adresse }}</div>
                    <div class="col mb-2">{{ $batiment->description }}</div>
                    <div class="col mb-2">
                        <a class="btn btn-primary tewt-white" href="/batiments/{{ $batiment->id }}/edit">Edit</a>
                        <form action="/batiments/{{ $batiment->id }}/delete" method="POST">
                            @csrf
                            <button  type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection