@extends('layouts.app')

@section('content')
    @include('partials.header')
    <section>
        <form class="w-75 me-auto ms-auto" action="/entreprises/{{ $entreprise->id }}/update" method="POST">
          @csrf
            <div class="mb-3">
              <label class="form-label fw-bold">Nom</label>
              <input type="text" class="form-control" name="nom" value={{ $entreprise->nom }}>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Adresse</label>
                <input type="text" class="form-control" name="adresse" value={{ $entreprise->adresse }}>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Telephone</label>
                <input type="text" class="form-control" name="telephone" value={{ $entreprise->telephone }}>
              </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Personne de Contact</label>
                <input type="text" class="form-control" name="pDeContact" value={{ $entreprise->pDeContact }}>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Image</label>
                <input type="text" class="form-control" name="image" value={{ $entreprise->image }}>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </section>
@endsection