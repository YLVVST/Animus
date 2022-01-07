<footer>
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-4 col-sm-12">
                <img src="{{ asset('img/logo-blanco.png') }}" width="90px" alt="logo animus blanco">
                <p class="pt-2 pe-5 text-justify">
                    Somos una organización dedicada a llevar la moda a tus manos, con los precios más competitivos del mercado.
                </p>
                <div class="mb-2">
                    <a href="" class="d-block p-0 text-white decoration-none"><i class="me-2 fas fa-envelope"></i>contacto@animus.com</a>
                    <a href="" class="d-block p-0 text-white decoration-none"><i class="me-2 fas fa-phone-square-alt"></i>55-7893-3501</a>
                </div>
                <div class="social-block d-flex align-items-center mb-2">
                    <a href=""><i class="me-3 fab fa-facebook-square"></i></a>
                    <a href=""><i class="me-3 fab fa-facebook-messenger"></i></i></a>
                    <a href=""><i class="me-3 fab fa-linkedin"></i></a>
                    <a href=""><i class="me-3 fab fa-youtube"></i></a>
                </div>

            </div>
            <div class="col-md-4 col-sm-12">
                <h5 class="text-white mt-mobile-30">Menú</h5>
                <hr>
                <a href="{{ route('pages.index') }}" class="d-block nav-link ps-0 text-white">Inicio</a>
                <a href="{{ route('pages.acercade') }}" class="d-block nav-link ps-0 text-white">Nosotros</a>
                <a href="{{ route('pages.index') }}/#productos" class="d-block nav-link ps-0 text-white">Productos</a>
                <a href="{{ route('pages.blog') }}" class="d-block nav-link ps-0 text-white">Blog</a>
                <a href="{{ route('pages.contact') }}" class="d-block nav-link ps-0 text-white">Contacto</a>
                @auth
                @if(auth()->user()->is_admin)
                <a href="{{ route('manager.products') }}" class="d-block nav-link ps-0 text-white">Administrador</a>
                @endif
                @endauth
            </div>
            <div class="col-md-4 col-sm-12">
                <h5 class="text-white mt-mobile-30">Recursos</h5>
                <hr>
                <a href="{{ route('pages.privacidad') }}" class="d-block nav-link ps-0 text-white">Aviso de privacidad</a>
                <a href="{{ route('pages.envio') }}" class="d-block nav-link ps-0 text-white">Politicas de envio</a>
                <a href="{{ route('pages.devoluciones') }}" class="d-block nav-link ps-0 text-white">Politicas de cambios y devoluciones</a>
                <h5 class="text-white mt-3 mt-mobile-30">Métodos de pago</h5>
                <hr>
                <div class="payment-block d-flex pt-0 align-items-center justify-content-between">
                    <a href=""><i class="fab fa-cc-paypal"></i></a>
                    <a href=""><i class="fab fa-google-pay"></i></a>
                    <a href=""><i class="fab fa-cc-visa"></i></a>
                    <a href=""><i class="fab fa-cc-amex"></i></a>
                    <a href=""><img height="30" src="{{ asset('img/svg/oxxo.svg')}}"></a>
                    <a href=""><i class="fab fa-cc-mastercard"></i></a>
                </div>

            </div>

        </div>
    </div>
    <div class="container-fluid">
        <div class="row py-2 px-3 mt-3 sub-footer justify-content-center text-center">
            Todos los derechos reservados Animus S.A. de C.V.
        </div>
    </div>
</footer>