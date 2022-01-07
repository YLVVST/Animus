<!DOCTYPE html>
<html lang="es">

<head>
    @include('includes.head')
</head>

<body>

    @include('includes.nav')
    @include('includes.sidebar')
    @yield('content')
    @include('includes.footer')
    @include('includes.js')
</body>

</html>