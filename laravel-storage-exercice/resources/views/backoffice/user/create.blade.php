@extends('layouts.app')

@section('content')
    @include('partials.nav')
    <section class="w-75 me-auto ms-auto">
        <ul class="alert-danger">
            @foreach ($errors->all() as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
        <form action="/users/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="nom" class="form-label">Nom</label>
              <input type="text" class="form-control" name="nom">
            </div>
            <div class="mb-3">
              <label for="prenom" class="form-label">Prenom</label>
              <input type="text" class="form-control" name="prenom">
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control" name="age">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="mb-3">
                <label for="pdp" class="form-label">Photo de profil</label>
                <input type="file" class="form-control" name="pdp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </section>
@endsection