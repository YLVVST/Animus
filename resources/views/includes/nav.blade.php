

<div class="principal-nav" id="nav-app">
  <div class="container-fluid nav-sup-band">
    <div class="container py-2">
      <div class="row">
        <div class="col d-flex justify-content-start align-items-center">
          <div>
            <i class="fas fa-envelope"></i><a class="me-5 ms-1" href="mailto:menyvarela23@gmail.com">contacto@animus.com</a>
          </div>
          <div>
            <i class="fas fa-phone"></i><a class="ms-1" href="tel:+52578933501">55-7893-3501</a>
          </div>
        </div>
        <div class="col d-flex justify-content-end align-items-center">
          <div>
            <i class="fas fa-map-marker-alt"></i><span class="me-5 ms-1">Cuautitlán, México</span>
          </div>
          <div>
            @auth
            <i class="fas fa-user"></i><a class="ms-1" href="{{ route('pages.perfil') }}">Mi Cuenta</a>
            @endauth
            @guest
            <i class="fas fa-user"></i><a class="ms-1" href="{{ route('pages.login') }}">Ingresar</a>
            @endguest
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid nav-sup-band">
    <div class="container nav-brand-block my-4">
      <div class="row">
        <div class="col">
          <img src="{{ asset('img/logo.png') }}" alt="logo-animus">
        </div>
        <div class="col d-flex align-items-center justify-content-end">
          <a class="btn text-pink ms-3 bag-button  position-relative" href="{{ route('pages.perfil') }}">
            <i class="fas fa-shopping-bag">
              @auth
              <span class="text-white position-absolute custom-badge translate-middle badge rounded-pill bg-danger">
                {{ App\Models\Cart::where('id_user', auth()->user()->id_user)->where('is_deleted', false)->count() }}
              </span>
              @endauth
            </i>
          </a>
        </div>

      </div>
    </div>
  </div>

  <div class="container-fluid custom-nav d-flex py-2">
    <div class="container custom-nav d-flex py-2 px-0">
      <a class="nav-link" href="{{ route('pages.index') }}">INICIO</a>
      <a class="nav-link" href="{{ route('pages.acercade') }}">NOSOTROS</a>
      <a class="nav-link" href="{{ route('pages.index') }}/#productos">PRODUCTOS</a>
      <a class="nav-link" href="{{ route('pages.blog') }}">BLOG</a>
      <a class="nav-link" href="{{ route('pages.contact') }}">CONTACTO</a>
      @auth
        @if(auth()->user()->is_admin)
        <a class="nav-link" href="{{ route('manager.products') }}">ADMINISTRADOR</a>
        @endif
      @endauth
    </div>
  </div>
</div>

<div class="mobile-nav">
  <nav class="navbar navbar-light bg-light p-3">
    <div class="col-6 d-flex align-items-center">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('img/logo.png') }}" width="35">
      </a>
    </div>
    <div class="col-6 d-flex align-items-center justify-content-end">
      <a type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fas fa-bars"></span>
      </a>
    </div>
  </nav>
  <div class="collapse custom-menu-collapsed" id="navbarToggleExternalContent">
    <div class="bg-light">
      <a class="nav-link" href="{{ route('pages.index') }}">Inicio</a>
      <a class="nav-link" href="{{ route('pages.acercade') }}">Nosotros</a>
      <a class="nav-link" href="{{ route('pages.index') }}/#productos">Productos</a>
      <a class="nav-link" href="{{ route('pages.blog') }}">Blog</a>
      <a class="nav-link" href="{{ route('pages.contact') }}">Contacto</a>
      <a class="nav-link" href="{{ route('pages.perfil') }}">Mi cuenta</a>
    </div>
  </div>
</div>