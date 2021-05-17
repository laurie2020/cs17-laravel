@extends('layouts.app')

@section('content')
    @include('partials.header')
    <section class="d-flex">
        <a href="/images/create" class="btn border-2 border-success text-success " style="height: 39px">Create</a>
        <div class="container">
            <table class="w-100 text-center">
                    <tr class="w-100 bg-secondary text-light">
                        <th>#</th>
                        <th>Lien</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                    @foreach ($images as $image)
                        <tr>
                            <td>{{ $image->id }}</td>
                            <td>{{ $image->lien }}</td>
                            <td>{{ $image->description }}</td>
                            <td class="d-flex">
                                <a href="/images/{{ $image->id }}/edit" class="btn border-2 border-primary text-primary" style="width: 70px">Edit</a>
                                <form action="/images/{{ $image->id }}/delete" method="POST">
                                    @csrf
                                    <button class="btn border-2 border-danger text-danger ms-1" style="width: 70px">Delete</button>
                                </form>
                            </td>
                        </tr>   
                    @endforeach
            </table>
        </div>
    </section>
@endsection