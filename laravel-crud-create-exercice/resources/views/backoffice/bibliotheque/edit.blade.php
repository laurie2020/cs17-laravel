@extends('layouts.app')

@section('content')
    @include('partials.header')
    <section>
        <form action="/bibliotheques/{{ $bibliotheque->id }}/update" method="POST" class="w-75 me-auto ms-auto" >
            @csrf
            <div class="mb-3">
              <label for="nom" class="form-label">Nom</label>
              <input type="text" class="form-control" name="nom" value={{ $bibliotheque->nom }}>
            </div>
            <div class="mb-3">
                <label for="adresse" class="form-label">Adresse</label>
                <input type="text" class="form-control" name="adresse" value={{ $bibliotheque->adresse }}>
            </div>
            <div class="mb-3">
                <label for="telephone" class="form-label">Telephone</label>
                <input type="text" class="form-control" name="telephone" value={{ $bibliotheque->telephone }}>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
@endsection