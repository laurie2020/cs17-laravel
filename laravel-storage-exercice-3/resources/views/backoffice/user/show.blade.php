@extends('layouts.app')

@section('content')
<section class="d-flex">

    @include('partials.nav2')
    <section class="all">
        <h1 class="text-center title">{{ $user->nom }} {{ $user->prenom }}</h1>
        <h2 class="text-center subtitle">{{ $user->age }} ans</h2>
        <h2 class="text-center subtitle">{{ $user->email }}</h2>
        <h2 class="text-center subtitle">{{ $user->password }}</h2>
        <img class="me-auto ms-auto d-block" src={{ asset('img/' . $user->photo) }} alt="" width="500">
    </section>
</section>
@endsection