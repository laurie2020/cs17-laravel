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
    <h1>Fruit: {{ $fruit }}</h1>
</body>
</html>