@extends('layout.app')

@section('content')
    @include('partials.header')
    <h1 class="text-center">About</h1>
    <section style="margin-top: 5%; margin-bottom: 5%;">
        <div class="card ms-auto me-auto" style="width: 18rem;">
            <img src={{ asset("img/yoda.jpg") }} class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Baby Yoda</h5>
              <p class="card-text">He is a toddler member of the same unnamed alien species as the Star Wars characters Yoda and Yaddle, with whom he shares a strong ability in the Force.</p>
              <a href="#" class="btn btn-primary">Go</a>
            </div>
        </div>
    </section>
    @include('partials.footer')
@endsection