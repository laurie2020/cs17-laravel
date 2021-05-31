@extends('layouts.app')

@section('content')
<section class="d-flex">

    @include('partials.nav2')
    <section class="w-100 all">
        <h1 class="text-center title">Create Portfolio</h1>
        <form class="form mx-auto mb-5" action={{ route('portfolios.store') }} method="POST" enctype="multipart/form-data">
            <ul class="w-75 mx-auto">
                @foreach ($errors->all() as $message)
                    <li class="alert alert-danger">{{ $message }}</li>
                @endforeach
            </ul>
            @csrf
            <div class="mb-3">
                <label for="nom" class="form-label subtitle">Nom:</label>
                <input type="text" class="form-control"name="nom">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label subtitle">Image:</label>
                <input type="file" min="0" max="1000" class="form-control" name="image">
            </div>
            <div class="mb-3">
                <label for="categorie" class="form-label subtitle">Categorie:</label>
                <input type="text" min="0" max="1000" class="form-control" name="categorie">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label subtitle">Description:</label>
                <textarea class="form-control" name="description"></textarea>
            </div>
            <button type="submit" class="btn w-100 form-btn">Submit</button>
        </form>
    </section>
</section>
@endsection