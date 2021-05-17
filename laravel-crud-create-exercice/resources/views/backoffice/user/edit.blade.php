@extends('layouts.app')

@section('content')
    @include('partials.header')
    <section>
        <form action="/users/{{ $user->id }}/update" method="POST" class="w-75 me-auto ms-auto" >
            @csrf
            <div class="mb-3">
              <label for="nom" class="form-label">Nom</label>
              <input type="text" class="form-control" name="nom" value={{ $user->nom }}>
            </div>
            <div class="mb-3">
                <label for="prenom" class="form-label">Prenom</label>
                <input type="text" class="form-control" name="prenom" value={{ $user->prenom }}>
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" min="0" max="99" class="form-control" name="age" value={{ $user->age }}>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value={{ $user->email }}>
              
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" value={{ $user->password }}>
            </div>
            <div class="mb-3">
                <label for="photo" class="form-label">Photo</label>
                <input type="text" class="form-control" name="photo" value={{ $user->photo }}>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
@endsection