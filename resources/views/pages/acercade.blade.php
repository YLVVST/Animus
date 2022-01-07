@extends('layout.base')

@section('content')
<div class="container">
    <div class="row py-5">
        <div class="col-sm-12 col-md-6">
            <h4 class="mb-4">Acerca de Nosotros</h4>
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ac ligula nec nisi mollis pretium sed non augue. Etiam nunc justo, sagittis vel sapien vel, pellentesque accumsan turpis. Nam quis urna id est placerat ultrices. Duis neque urna, sollicitudin ac nulla a, aliquam accumsan nibh. Aliquam pellentesque orci quis nunc viverra faucibus. Pellentesque facilisis ligula vitae interdum venenatis. Aenean id rutrum eros, a faucibus libero. Vivamus odio est, faucibus sed vestibulum non, suscipit sit amet mauris. Curabitur dignissim.</p>
            <p class="text-justify">Duis iaculis sagittis condimentum. Maecenas vel rutrum quam, sollicitudin fringilla nisl. In hac habitasse platea dictumst. Cras ac condimentum nisl. Proin urna libero, scelerisque sit amet diam nec, commodo semper dui. Aliquam et neque vel nisi dapibus scelerisque. Suspendisse potenti. Etiam sed diam faucibus nulla blandit tempus et vel tellus. Donec nunc arcu, sagittis sit amet mauris vel, faucibus sodales ipsum. In hac habitasse platea dictumst. Aliquam erat volutpat.</p>
        </div>
        <div class="col-sm-12 col-md-6">

            <img class="w-80 img-fluid"  src="{{ asset('img/utils/bg-register.jpg') }}">
        </div>

    </div>
</div>
@endsection