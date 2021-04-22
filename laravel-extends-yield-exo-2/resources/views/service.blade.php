@extends('layout.app')

@section('content')
    @include('partials.nav')
    @include('partials.info')
    <section class="about">
        <div style="height: 300px; overflow: hidden;">
            <img src={{ asset("img/service-img.jpg") }} class="img-fluid" alt="...">
        </div>
        
        <div class="d-flex justify-content-between mt-3">
            <div class="card"  style="width: 32%">
                <div class="card-header">
                    <h5 class="card-title">Card Title</h5>
                </div>
                <div class="card-body">
                    
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam voluptates alias culpa rem sed tempore repellendus obcaecati vel cum expedita!</p>
                </div>
                <div class="card-footer text-muted">
                    <a href="#" class="btn btn-primary text-light">Learn More</a>
                </div>
            </div>
            <div class="card" style="width: 32%">
                <div class="card-header">
                    <h5 class="card-title">Card Title</h5>
                </div>
                <div class="card-body">
                    
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti similique facilis assumenda? Quisquam quo cumque iure, nisi hic quos, libero deserunt nobis eum fuga minus veritatis dolorem nam autem similique.</p>
                </div>
                <div class="card-footer text-muted">
                    <a href="#" class="btn btn-primary text-light">Learn More</a>
                </div>
            </div>
            <div class="card"  style="width: 32%">
                <div class="card-header">
                    <h5 class="card-title">Card Title</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem esse a placeat natus, quis perferendis soluta modi porro ipsam laborum perspiciatis tempora autem explicabo nulla?</p>
                    
                </div>
                <div class="card-footer text-muted">
                    <a href="#" class="btn btn-primary text-light">Learn More</a>
                </div>
            </div>
        </div>
        
    </section>
    @include('partials.footer')
    @endsection