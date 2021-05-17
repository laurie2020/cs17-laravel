@extends('layouts.app')

@section('content')
    @include('partials.header')
    <section>
        <form class="w-75 me-auto ms-auto" action="/portofolios/store" method="POST">
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
                <label class="form-label fw-bold">Path</label>
                <input type="text" class="form-control" name="path">
              </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Catégorie</label>
                <input type="text" class="form-control" name="categorie">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </section>
@endsection