@extends('layouts.app')

@section('content')
<section class="d-flex">

    @include('partials.nav2')
    <section class="w-100 all">
        <h1 class="text-center title">Edit Galerie</h1>
        <ul class="w-75 mx-auto">
            @foreach ($errors->all() as $message)
                <li class="alert alert-danger">{{ $message }}</li>
            @endforeach
        </ul>
        <form class="form mx-auto mb-5" action="/galeries/{{ $galerie->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
              <label for="nom" class="form-label subtitle">Nom:</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="nom" value="{{ $galerie->nom }}">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label subtitle">Image:</label>
                <input type="file" class="form-control" id="exampleInputEmail1" name="image">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label subtitle">Description:</label>
                <textarea class="form-control" id="floatingTextarea" name="description">{{ $galerie->description }}</textarea>
            </div>
            <button type="submit" class="btn w-100 form-btn">Submit</button>
        </form>
    </section>
</section>
@endsection