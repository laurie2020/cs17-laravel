@extends('layouts.app')

@section('content')
    @include('partials.header')
    <section class="d-flex">
        <a class="btn border-2 border-success text-success" style="width: 70px; height: 39px" href="/portofolios/create">Create</a>
        <div class="container">
            <div class="row bg-secondary pt-3 pb-3">
                <div class="col text-center">#</div>
                <div class="col text-center">Nom</div>
                <div class="col text-center">Adresse</div>
                <div class="col text-center">Telephone</div>
                <div class="col text-center">P. de Contact</div>
            </div>
            @foreach ($portofolios as $portofolio)
                <div class="row pt-3 pb-3 border-bottom">
                    <div class="col text-center">{{ $portofolio->id }}</div>
                    <div class="col text-center">{{ $portofolio->nom }}</div>
                    <div class="col text-center">{{ $portofolio->description }}</div>
                    <div class="col text-center">{{ $portofolio->path }}</div>
                    <div class="col text-center">{{ $portofolio->categorie }}</div>
                    <div class="col text-center">
                        <a href="/portofolios/{{ $portofolio->id }}/edit" class="btn border-2 border-primary text-primary" style="width: 70px">Edit</a>
                        <form action="/portofolios/{{ $portofolio->id }}/delete" method="POST">
                            @csrf
                            <button type="submit" class="btn border-2 border-danger text-danger">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection