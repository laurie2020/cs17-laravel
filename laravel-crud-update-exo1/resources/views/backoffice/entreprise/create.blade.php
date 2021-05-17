@extends('layouts.app')

@section('content')
    @include('partials.header')
    <section>
        <form class="w-75 me-auto ms-auto" action="/entreprises/store" method="POST">
          @csrf
            <div class="mb-3">
              <label class="form-label fw-bold">Nom</label>
              <input type="text" class="form-control" name="nom">
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Adresse</label>
                <input type="text" class="form-control" name="adresse">
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Telephone</label>
                <input type="text" class="form-control" name="telephone">
              </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Personne de Contact</label>
                <input type="text" class="form-control" name="pDeContact">
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Image</label>
                <input type="text" class="form-control" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </section>
@endsection