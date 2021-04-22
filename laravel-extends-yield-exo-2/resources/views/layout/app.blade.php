<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href={{ asset("css/app.css") }}>
</head>
<body style="background-color: white;">
    <header >
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="padding: 0 10%;">
            <div class="container-fluid">
              <a class="navbar-brand" href={{ route("home") }}>Coding School</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href={{ route("home") }}>Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href={{ route("about") }}>About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href={{ route("service") }}>Service</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
    </header>
    <section style="padding: 5% 10% 1% 10%;">
        <h1 class="fw-bold">{{ $page }} <span class="fs-2 fw-normal">Subheading</span></h1>
        <nav aria-label="breadcrumb" class="bread">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{ $page }}</li>
            </ol>
        </nav>
    </section>
    @yield('content')
    <footer class="bg-dark text-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            Copyright © Your Exercice 2020  
        </div>
        <!-- Copyright -->
    </footer>
    <script src={{ asset("js/app.js") }}></script>
</body>
</html>