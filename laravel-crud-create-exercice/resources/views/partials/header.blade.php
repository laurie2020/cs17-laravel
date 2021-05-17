<header>
    <h1 class="text-center">{{ $page }}</h1>
    <ul class="nav justify-content-center bg-dark text-light pt-3 pb-3">
        <li class="nav-item">
          <a class="nav-link" href={{ route('home') }}>Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href={{ route('users') }}>Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href={{ route('bibliotheques') }}>Bibliothèques</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href={{ route('livres') }}>Livres</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href={{ route('images') }}>Images</a>
        </li>
    </ul>
</header>