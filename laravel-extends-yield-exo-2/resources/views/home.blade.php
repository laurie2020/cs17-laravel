@extends('layout.app')

@section('content')
    @include('partials.nav')
    @include('partials.info')
    <section class="about text-center service mb-3">
        <h1>Hello CodingSchool</h1>
        <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe debitis neque sunt eum.</h5>
        <hr class="mt-3">
        <p class="mt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus quia deserunt dolorum asperiores?</p>
        <button type="button" class="btn btn-primary">About</button>
    </section>
    @include('partials.footer')
@endsection