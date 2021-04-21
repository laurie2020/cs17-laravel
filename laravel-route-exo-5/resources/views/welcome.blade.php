<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Nom: {{ $objet->nom }}</p>
    <p>prenom: {{ $objet->prenom }}</p>
    <p>Age: {{ $objet->age }}</p>
    <p>Date de naissance: {{ $objet->dateDeNaissance }}</p>
</body>
</html>