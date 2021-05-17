@extends('layouts.app')

@section('content')
    @include('partials.header')
    <section>
        <form class="w-75 me-auto ms-auto" action="/articles/store" method="POST">
          @csrf
            <div class="mb-3">
              <label class="form-label fw-bold">Nom</label>
              <input type="text" class="form-control" name="nom">
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Description</label>
                <textarea class="form-control" name="description" cols="30" rows="10"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Auteur</label>
                <input type="text" class="form-control" name="auteur">
              </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Poste</label>
                <input type="text" class="form-control" name="poste">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </section>
@endsection