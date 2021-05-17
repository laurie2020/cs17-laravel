@extends('layouts.app')

@section('content')
    @include('partials.nav')
    <section>
        <a href="/images/create" class="btn btn-success">Create</a>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    #
                </div>
                <div class="col text-center">
                    Nom
                </div>
                <div class="col text-center">
                    Path
                </div>
                <div class="col text-center">
                    Description
                </div>
                <div class="col text-center">
                    Actions
                </div>
            </div>
            @foreach ($images as $image)
            <div class="row">
                <div class="col text-center d-flex justify-content-center align-items-center">{{ $image->id }}</div>
                <div class="col text-center d-flex justify-content-center align-items-center">{{ $image->nom }}</div>
                <div class="col text-center d-flex justify-content-center align-items-center"><img src={{ asset("img/" . $image->path) }} alt="" width="200"></div>
                <div class="col text-center d-flex justify-content-center align-items-center">{{ $image->description }}</div>
                <div class="col text-center d-flex justify-content-center align-items-center">
                    <a href="/images/{{ $image->id }}/edit" class="btn btn-primary" style="height: 37px">Edit</a>
                    <form action="/images/{{ $image->id }}/delete" method="POST">
                        @csrf
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </section>
@endsection