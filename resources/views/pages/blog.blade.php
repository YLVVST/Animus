@extends('layout.base')

@include('angular/blog')
@section('content')

<div ng-app="blogApp" ng-controller="blogCtrl" id="productos" class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
    <div class="carousel-inner py-4" id="element">
        <div class="carousel-item active">
            <div class="container">
                <div class="row">
                    <div class="col d-flex justify-content-start">
                        <h3>Blog</h3>
                    </div>
                    <div class="col d-flex justify-content-end align-items-center">
                        <input type="text" ng-model="finder.category" class="form-control" placeholder="Categoría">
                    </div>

                </div>
                <hr  class="mb-4">
                <div class="row">
                    <div class="col-md-3 col-sm-12" ng-repeat="post in posts | filter:finder">
                        <div class="card position-relative mb-4">
                            <a href="#!" data-bs-toggle="modal" data-bs-target="#productModal" ng-click="chargeModal($index)">
                                <img ng-src="@{{post.img}}" height="170px" class="card-img-top" />
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">@{{ post.name }}</h5>

                                <p class="card-text line-clamp">
                                    @{{ post.description }}
                                </p>
                                <a href="#!" ng-click="chargeModal($index)" class="btn btn-primary">Ver</a>

                            </div>
                            <span class="position-absolute top-0 start-50 translate-middle badge rounded-pill bg-danger">
                                @{{ post.category }}
                                <span class="visually-hidden">unread messages</span>
                            </span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">@{{ modalPost.name }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-left">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <img ng-src="{!! asset('storage/@{{ modalPost.img }}') !!}" class="card-img-top  w-50" />
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <p class="text-justify"> @{{ modalPost.category }} </p>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <p class="text-justify px-3"> @{{ modalPost.description }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection