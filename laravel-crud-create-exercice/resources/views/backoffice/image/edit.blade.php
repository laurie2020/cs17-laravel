@extends('layouts.app')

@section('content')
    @include('partials.header')
    <section>
        <form action="/images/{{ $image->id }}/update" method="POST" class="w-75 me-auto ms-auto" >
            @csrf
            <div class="mb-3">
              <label for="lien" class="form-label">Titre</label>
              <input type="text" class="form-control" name="lien" value={{ $image->lien }}>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Auteur</label>
                <textarea class="form-control" name="description">{{ $image->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
@endsection