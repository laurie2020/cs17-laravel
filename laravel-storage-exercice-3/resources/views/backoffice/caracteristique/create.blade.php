@extends('layouts.app')

@section('content')
<section class="d-flex">

    @include('partials.nav2')
    <section class="w-100 all">
        <h1 class="text-center title">Create Caracteristique</h1>
        <ul class="w-75 mx-auto">
            @foreach ($errors->all() as $message)
                <li class="alert alert-danger">{{ $message }}</li>
            @endforeach
        </ul>
        <form class="form mx-auto mb-5" action={{ route('caracteristiques.store') }} method="POST">
            @csrf
            <div class="mb-3">
                <label for="nom" class="form-label subtitle">Nom:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="nom">
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
                <label for="chiffre" class="form-label subtitle">Chiffre:</label>
                <input type="number" min="0" max="1000" class="form-control" name="chiffre">
            </div>
    
            <button type="submit" class="btn w-100 form-btn">Submit</button>
        </form>
    </section>
</section>
@endsection