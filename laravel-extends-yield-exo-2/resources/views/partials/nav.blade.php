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
                <a class="nav-link {{ $page === "Welcome" ? "active" : "" }}" aria-current="page" href={{ route("home") }}>Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ $page === "About" ? "active" : "" }}" href={{ route("about") }}>About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ $page === "Service" ? "active" : "" }}" href={{ route("service") }}>Service</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
</header>