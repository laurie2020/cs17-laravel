@extends('layouts.app')

@section('content')

<section class="d-flex">

    @include('partials.nav2')
    <section class="w-100 all">
        <h1 class="text-center title">Create User</h1>
        <form class="form mx-auto mb-5" action={{ route('users.store') }} method="POST" enctype="multipart/form-data">
            @csrf
            <ul class="w-75 mx-auto">
                @foreach ($errors->all() as $message)
                    <li class="alert alert-danger">{{ $message }}</li>
                @endforeach
            </ul>
            <div class="mb-3">
                <label for="nom" class="form-label subtitle">Nom:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="nom">
            </div>
            <div class="mb-3">
                <label for="nom" class="form-label subtitle">Prenom:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="prenom">
            </div>
            <div class="mb-3">
                <label for="age" class="form-label subtitle">Age:</label>
                <input type="number" class="form-control" name="age">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label subtitle">Email:</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label subtitle">Password:</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="mb-3">
                <label for="photo" class="form-label subtitle">Photo:</label>
                <input type="file" class="form-control" name="photo">
            </div>
            <button type="submit" class="btn w-100 form-btn">Submit</button>
        </form>
    </section>
</section>
@endsection