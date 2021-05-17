<header>
    <h1 class="text-center">{{ $page }}</h1>
    <ul class="nav bg-dark navbar-dark justify-content-center p-4">
        <li class="nav-item">
          @yield('button')
        </li>
        <li class="nav-item">
          <a class="nav-link" href={{ route('home') }}>Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href={{ route('articles') }}>Articles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href={{ route('portofolios') }}>Portofolios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href={{ route('entreprises') }}>Entreprises</a>
        </li>
    </ul>
</header>