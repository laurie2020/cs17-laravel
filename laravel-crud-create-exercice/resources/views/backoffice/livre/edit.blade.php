@extends('layouts.app')

@section('content')
    @include('partials.header')
    <section>
        <form action="/livres/{{ $livre->id }}/update" method="POST" class="w-75 me-auto ms-auto" >
            @csrf
            <div class="mb-3">
              <label for="tire" class="form-label">Titre</label>
              <input type="text" class="form-control" name="titre" value={{ $livre->titre }}>
            </div>
            <div class="mb-3">
                <label for="auteur" class="form-label">Auteur</label>
                <input type="text" class="form-control" name="auteur" value={{ $livre->auteur }}>
            </div>
            <div class="mb-3">
                <label for="publication" class="form-label">Date de Publication</label>
                <input type="date" class="form-control" name="publication" value={{ $livre->publication }}>
            </div>
            <div class="mb-3">
                <label for="pages" class="form-label">Nombre de Pages</label>
                <input type="number" min="0" max="999" class="form-control" name="pages" value={{ $livre->pages }}>
            </div>
            <div class="mb-3">
                <label for="mobile" class="from-label">Version Mobile</label>
                <select class="form-select" aria-label="Default select example" name="mobile">
                    <option value="oui" selected>oui</option>
                    <option value="non">non</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
@endsection