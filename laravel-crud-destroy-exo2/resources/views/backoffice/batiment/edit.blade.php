@extends('layouts.app')

@section('content')
    @include('partials.nav')
    <h2 class="text-center my-4">Edit Batiment</h2>
    <section class="w-75 me-auto ms-auto">
        <form method="POST" action="/batiments/{{ $batiment->id }}/update">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nom</label>
                <input type="text" class="form-control" value={{ $batiment->nom }} name="nom">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Adresse</label>
                <input type="text" class="form-control" value={{ $batiment->adresse }} name="adresse">
            </div>
            <div class="mb-3 form-check p-0">
                <label class="form-check-label" for="exampleCheck1">Description</label>
                <textarea type="checkbox" class="form-control p-0" cols="30" rows="10" name="description">{{ $batiment->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
@endsection