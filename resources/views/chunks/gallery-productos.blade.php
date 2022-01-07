@include('angular/productos-home')

<div ng-app="categoriasApp" ng-controller="productosCtrl" id="productos" class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">

    <div class="container my-3">
        <div class="row d-flex">
            <div class="col">
                <div class="bottom-border d-flex justify-content-start align-items-center">
                    <a href="javascript:void(0);" ng-click="changeGenderFilter('todos')" ng-class="(gender == 'todos') ? 'active-band' : 'inactive-band'"> TODOS </a>
                    <a href="javascript:void(0);" ng-click="changeGenderFilter('hombre')" ng-class="(gender == 'hombre') ? 'active-band' : 'inactive-band'"> HOMBRE </a>
                    <a href="javascript:void(0);" ng-click="changeGenderFilter('mujer')" ng-class="(gender == 'mujer') ? 'active-band' : 'inactive-band'"> MUJER </a>
                </div>
            </div>
            <div class="col d-flex justify-content-start align-items-center">
                <input type="text" ng-model="finder.name" class="form-control" placeholder="Nombre">

            </div>
        </div>
    </div>

    <div class="carousel-inner py-4" id="element">
        <div class="carousel-item active">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12" ng-repeat="producto in productos | filter:finder" ng-if="producto.gender == gender || gender == 'todos'">

                        <div class="card position-relative">
                            <a href="#!" data-bs-toggle="modal" data-bs-target="#productModal" ng-click="chargeModal($index)">
                                <img ng-src="{!! asset('storage/@{{ producto.img }}') !!}" height="300px" class="card-img-top" />
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">@{{ producto.name }}</h5>
                                <h6> @{{ producto.price | currency:"$" }} MXN</h6>
                                <p class="card-text line-clamp">
                                    @{{ producto.description }}
                                </p>
                                @if(Auth::check())
                                <a href="#!" ng-click="addToCart($index)" class="btn btn-primary">Comprar</a>
                                @else
                                <a href="{!! route('pages.login') !!}" class="btn btn-primary">Comprar</a>
                                @endif
                            </div>
                            <span ng-show="producto.discount > 0" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                @{{ producto.discount}}%
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
                    <h5 class="modal-title" id="exampleModalLabel">@{{ modalProduct.name }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-left">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <img ng-src="{!! asset('storage/@{{ modalProduct.img }}') !!}" class="card-img-top  w-50" />
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <p class="text-justify"><b>Precio:</b> @{{ modalProduct.price | currency:"$" }} MXN</p>
                            <p class="text-justify"><b>Color:</b> @{{ modalProduct.color }}</p>
                            <p class="text-justify"><b>Descuento:</b> @{{ modalProduct.discount }}%</p>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <p class="text-justify px-3"><b>Decripción:</b> @{{ modalProduct.description }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>