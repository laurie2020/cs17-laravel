@extends('layouts.app')

@section('content')
    @include('partials.nav')
    <section>
        <div class="container">
            <h4>Nom: {{ $user->nom }}</h4>
            <h4>Prenom: {{ $user->prenom }}</h4>
            <h4>Age: {{ $user->age }}</h4>
            <h4>Email: {{ $user->email }}</h4>
            <h4>Mot de Passe: {{ $user->password }}</h4>
            <div><img src={{ asset('img/' . $user->pdp) }} alt="" width="250"></div>
        </div>
    </section>
@endsection