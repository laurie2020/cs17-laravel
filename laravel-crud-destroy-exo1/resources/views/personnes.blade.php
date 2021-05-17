<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href={{ asset("css/app.css") }}>
</head>
<body>
    <h1 class="text-center m-4">User</h1>
    <div class="container">
        <div class="row mb-3 border-bottom p-2">
            <div class="col fw-bold">#</div>
            <div class="col fw-bold">Nom</div>
            <div class="col fw-bold">Prenom</div>
            <div class="col fw-bold">Age</div>
            <div class="col fw-bold">Date de Naissance</div>
            <div class="col fw-bold">genre</div>
            <div class="col fw-bold">Action</div>
        </div>
        @foreach ($personnes as $personne)
        <div class="row mb-3 border-bottom">
            <div class="col">{{ $personne->id }}</div>
            <div class="col">{{ $personne->nom }}</div>
            <div class="col">{{ $personne->prenom }}</div>
            <div class="col">{{ $personne->age }}</div>
            <div class="col">{{ $personne->naissance }}</div>
            <div class="col">{{ $personne->genre }}</div>
            <div class="col">
                <form action="/personnes/{{ $personne->id }}/delete" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>

</body>
</html>