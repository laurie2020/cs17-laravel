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
        <button><a href={{ route("welcome") }}>Welcome</a></button>
    </nav>
    <h1>Je suis la page about</h1>
    <p>Je m'appelle {{ $prenom }} {{ $nom }}</p>
</body>
</html>