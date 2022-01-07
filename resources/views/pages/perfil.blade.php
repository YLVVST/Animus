@extends('layout.base')

@section('content')

<div class="container">
    <div class="row profile-logo mb-5">
        <div class="col-12 text-center">
            <span class="fas fa-user-circle mt-5 mb-3"></span>
            <h2>{{auth()->user()->name}} {{auth()->user()->lastname}}</h2>
            <h5>{{auth()->user()->email}}</h5>
            <a href="{{ route('logout') }}">Logout</a>
        </div>
    </div>
    @include('chunks/cart')
    
</div>

@endsection