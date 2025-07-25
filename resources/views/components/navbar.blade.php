  <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('pages.homepage') }}">Aulab</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                  @auth
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
                      </li>
                  @endauth
                  <li class="nav-item">
                      <a class="nav-link active" href="{{ route('pages.homepage') }}">Homepage</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Prodotti</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('contact.form') }}">Contatti</a>
                  </li>

                  @guest
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('login') }}">Login</a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">Registrati</a>
                      </li>

                  @endguest
              </ul>
          </div>
      </div>
      @auth
          <div class="px-5">
              <span> Ciao, {{ Auth::user()->name }}</span>
              <form action="{{ route('logout') }}" method="POST">
                  @csrf
                  <button class="btn btn-danger" type="submit">Logout</button>
              </form>

          </div>
      @endauth
  </nav>
