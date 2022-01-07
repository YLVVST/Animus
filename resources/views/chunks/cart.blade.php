@include('angular/cart')

<div class="carousel-inner py-4" id="element" ng-app="cartApp" ng-controller="cartCtrl">
    <div class="carousel-item active">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3>Carrito de compras</h3>
                </div>
                <div class="col d-flex justify-content-start align-items-center">
                    <input type="text" ng-model="finder.name" class="form-control" placeholder="Nombre">
                </div>

            </div>
            <hr>
            <div class="row">
                <div class="col-md-3 col-sm-12" ng-repeat="producto in productos | filter:finder">
                    <div class="card mb-2 h-100">

                        <img ng-src="{!! asset('storage/@{{ producto.img }}') !!}" height="300px" class="card-img-top" />

                        <div class="card-body text-center">
                            <div>
                                <h5 class="card-title">@{{ producto.name }}</h5>
                                <h6> @{{ producto.price | currency:"$" }} MXN</h6>
                                <p class="card-text line-clamp">
                                    @{{ producto.description }}
                                </p>
                            </div>
                            <a href="#!" ng-click="deleteToCart($index)" class="btn btn-primary mt-3">Devolver</a>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>