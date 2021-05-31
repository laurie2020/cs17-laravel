@extends('layouts.app')

@section('content')
<section class="d-flex">

    @include('partials.nav2')
    <section class="w-100 all">
        <h1 class="text-center title">Edit Services</h1>
        <ul class="w-75 mx-auto">
            @foreach ($errors->all() as $message)
                <li class="alert alert-danger">{{ $message }}</li>
            @endforeach
        </ul>
        <form class="form mx-auto mb-5" action="/services/{{ $service->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
              <label for="titre" class="form-label subtitle">Titre:</label>
              <input type="text" class="form-control" name="titre" value="{{ $service->titre }}">
            </div>
            <div class="mb-3">
                <label for="icone" class="form-label subtitle">Icone:</label>
                <select class="form-select fa" name="icone">
                    <option class="fa" selected value="fas fa-snowman">&#xf7d0;</option>
                    <option class="fa" value="fas fa-toilet-paper">&#xf71e;</option>
                    <option class="fa" value="fas fa-hat-wizard">&#xf6e8;</option>
                    <option class="fa" value="fas fa-hippo">&#xf6ed;</option>
                    <option class="fa" value="fas fa-glass-martini-alt">&#xf57b;</option>
                    <option class="fa" value="fas fa-poo">&#xf2fe;</option>
                    <option class="fa" value="fas fa-hat-cowboy-side">&#xf8c1;</option>
                    <option class="fa" value="fas fa-laptop-code">&#xf5fc;</option>
                    <option class="fa" value="fas fa-car-crash">&#xf5e1;</option>
                    <option class="fa" value="fas fa-undo">&#xf0e2;</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="age" class="form-label subtitle">Description:</label>
                <textarea class="form-control" name="description">{{ $service->description }}</textarea>
            </div>
         
            <button type="submit" class="btn w-100 form-btn">Submit</button>
        </form>
    </section>
</section>
@endsection