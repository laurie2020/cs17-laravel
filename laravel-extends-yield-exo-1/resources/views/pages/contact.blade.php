@extends('layout.app')

@section('content')
    @include('partials.header')
    <h1 class="text-center">Contact</h1>
    <section class="w-50 me-auto ms-auto" style="margin-top: 10%; margin-bottom: 19%;">
        <div class="mb-3 "
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </section>
    @include('partials.footer')
@endsection