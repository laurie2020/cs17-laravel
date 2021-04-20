<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav>
        <button><a href={{ route("about") }}>About</a></button>
        <button><a href={{ route("contact") }}>Contact</a></button>
    </nav>
    <h1>Nom: {{ $nom }}</h1>
    <h2>Prenom: {{ $prenom }}</h2>
    <h3>Tel: {{ $tel }}</h3>
</body>
</html>