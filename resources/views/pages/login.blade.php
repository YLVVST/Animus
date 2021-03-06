@extends('layout.base')

@push('css-stack')
<style>
    .login-page-container {
        background-image: url("{{ asset('img/utils/bg-login.jpg') }}");
        background-position: center left;
        background-repeat: no-repeat;
        background-size: cover;
        height: 100% !important;
    }
</style>
@endpush

@section('content')

<div class="login-page-container">
    @if($errors->any())
    @foreach($errors->all() as $error)
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ $error }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endforeach
    @endif
    <div class="container">
        <div class="row justfy-content-center">
            <div class="col-md-4 offset-md-8 col-sm-12  align-items-center">
                <div class="register-block">
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="text-center mb-5">
                            <i class="form-icon far fa-user-circle text-pink"></i>
                            <h1 class="text-grey">Login</h1>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="email-field">Correo electrónico:</label>
                            <input class="form-control" type="email" id="email-field" name="email">
                        </div>
                        <div class="form-group mb-5">
                            <label class="form-label" for="password-field">Contraseña:</label>
                            <input class="form-control" type="text" id="password-field" name="password">
                        </div>
                        <input type="submit" class="btn btn-blue w-100 mb-5" value="Ingresar">
                    </form>
                    <div class="text-center">
                        <a href="{{ route('pages.signup') }}" class="my-5">Registrarse</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection