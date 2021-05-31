@extends('layouts.app')

@section('content')
    <section class="d-flex justify-content-between service">
        @include('partials.nav2')
        <section class="all ">
            <div class="all-child d-flex justify-content-center align-items-center">
                <div class="tab">
                    <h1 class="text-center title">Services</h1>
                    <p class="text-center"><a href={{ route('services.create') }} class="btn create"><i class="fas fa-plus"></i></a></p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Titre</th>
                                <th scope="col">Icone</th>
                                <th scope="col">Description</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $service)
                                <tr>
                                    <td><a href="/services/{{ $service->id }}">{{ $service->id }}</a></td>
                                    <td>{{ $service->titre }}</td>
                                    <td><i class="{{ $service->icone }}"></i></td>
                                    <td>{{ $service->description }}</td>
                                    <td>
                                        <div class="actions">
                                            <a href="services/{{ $service->id }}/download" class="btn download disabled"><i class="fas fa-download"></i></a>
                                            <a href="/services/{{ $service->id }}/edit" class="btn edit"><i class="fas fa-edit"></i></a>
                                            <form action="/services/{{ $service->id }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button class="btn delete"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">{{$services->links()}}</div>
                </div>
            </div>
        </section>
    </section>

@endsection
