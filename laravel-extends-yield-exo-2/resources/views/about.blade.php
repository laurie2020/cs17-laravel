@extends('layout.app')

@section('content')
    <section class="about">
        <div class="mb-3 d-flex">
            <img src={{ asset("img/about-img.jpg") }} class="rounded float-start" alt="..." width="500">
            <div class="float-end ps-4">
                <h2>About modern school</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, optio itaque! Quisquam ipsa id enim ratione iusto at, adipisci vitae sapiente delectus dolores vel impedit fugit excepturi sed qui laborum?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, laboriosam natus perspiciatis assumenda, quas ad, fuga facere ea hic sunt odio. Earum voluptas nostrum assumenda reiciendis, sint ipsa amet ut.</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae officia exercitationem sint error a dicta, alias sunt dolor fugit, quibusdam nulla quas, dolorum animi fuga reprehenderit impedit unde ad. Consequuntur.</p>
            </div>
        </div>
    </section>
@endsection