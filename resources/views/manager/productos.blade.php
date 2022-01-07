@extends('layout.base')

@include('angular.productos')

@section('content')

<div class="container my-5" ng-app="productos-manager">
    <div ng-controller="tableController">

        <div class="row d-flex justify-content-between mb-2">
            <div class="col d-flex align-items-center">
                <i class="form-icon far fa-user-circle text-pink me-2" style="font-size: 20px;"></i>
                <h4 class="text-grey">Productos</h4>
            </div>
            <div class="col d-flex justify-content-end">
                <a class="btn btn-blue" data-bs-toggle="collapse" href="#register-container" role="button" aria-expanded="false" aria-controls="register-container">Registar producto</a>
            </div>
        </div>
        <div class="collapse multi-collapse pt-3" id="register-container">
            <div class="form-container">
                <form class="product-form" action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-group">
                                <label class="form-label" for="name-field">Nombre:</label>
                                <input class="form-control" type="text" id="name-field" name="name" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label" for="price-field">Precio:</label>
                                        <input class="form-control" min="0" max="10000" type="number" id="price-field" name="price" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label" for="discount-field">Descuento (%):</label>
                                        <input class="form-control" min="0" max="100" type="number" id="discount-field" name="discount">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="form-label" for="img-field">Imagen:</label>
                                <input class="form-control w-100" type="file" accept="image/png, image/jpeg" id="img-field" name="img" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="collection-field">Colección:</label>
                                        <select class="form-select" id="collection-field" name="collection" required>
                                            <option selected>Seleccionar</option>
                                            <option value="sueter">Suéter</option>
                                            <option value="pantanlon">Pantalón</option>
                                            <option value="playera">Playeras</option>
                                            <option value="accesorios">Accesorios</option>
                                            <option value="vestido">Vestido</option>
                                            <option value="blusa">Blusa</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="col">
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="color-field">Color:</label>
                                        <select class="form-select" id="color-field" name="color" required>
                                            <option selected>Seleccionar</option>
                                            <option value="rojo">Rojo</option>
                                            <option value="azul">Azul</option>
                                            <option value="verde">Verde</option>
                                            <option value="negro">Negro</option>
                                            <option value="blanco">Blanco</option>
                                            <option value="rosa">Rosa</option>
                                            <option value="amarillo">Amarillo</option>
                                            <option value="morado">Morado</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Genero:</label><br>
                                <input type="radio" class="form-check-input" id="gender-field-man" name="gender" value="hombre" checked required>
                                <label class="form-check-label" for="gender-field-man">Hombre</label>
                                <input type="radio" class="form-check-input ms-2" id="gender-field-woman" name="gender" value="mujer" required>
                                <label class="form-check-label" for="gender-field-woman">Mujer</label>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="form-group mb-3">
                                <label class="form-label" for="description-field">Descripción:</label>
                                <textarea class="form-control" id="description-field" rows="4" cols="50" name="description" required></textarea>
                            </div>
                            <div class="d-flex justify-content-end mt-4">
                                <input type="submit" class="btn btn-blue w-50 mb-3" value="Guardar">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div>
            <table class="table table-striped table-hover mt-5">
                <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Genero</th>
                    <th>Precio</th>
                    <th>Colección</th>
                    <th>Color</th>
                    <th>Imagen</th>
                    <th>Descuento</th>
                    <th>Acciones</th>
                </tr>
                <tr ng-repeat="producto in productos track by $index">
                    <td>@{{ producto.id_product }}</td>
                    <td>@{{ producto.name }}</td>
                    <td>@{{ producto.description }}</td>
                    <td>@{{ producto.gender }}</td>
                    <td>@{{ producto.price | currency:"MXN" }}</td>
                    <td>@{{ producto.collection }}</td>
                    <td>@{{ producto.color }}</td>
                    <td><img width="90px" ng-src="{!! asset('storage/@{{ producto.img }}') !!}"></td>
                    <td>@{{ producto.discount }}</td>
                    <td>
                        <div class="row d-inline">
                            <div class="col">
                                <a class="btn btn-xs" ng-click="removeRow($index)">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                            </div>
                            <div class="col">
                                <!-- ng-click="updateRow($index)"  -->
                                <a class="btn btn-xs" ng-click="updateFieldsPreparations($index)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Actualizar Producto</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="product-form" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="name-field">Nombre:</label>
                                            <input class="form-control" type="text" id="name-field" ng-model="updateFields.name" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="price-field">Precio:</label>
                                            <input class="form-control" min="0" max="10000" type="number" ng-model="updateFields.price" id="price-field" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="discount-field">Descuento (%):</label>
                                            <input class="form-control" min="0" max="100" type="number" id="discount-field" ng-model="updateFields.discount">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="collection-field">Colección:</label>
                                            <select class="form-select" id="collection-field" ng-model="updateFields.collection" ng-options="collection.id as collection.title for collection in collections" required>
                                            </select>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="color-field">Color:</label>
                                            <select class="form-select" id="color-field" ng-model="updateFields.color" ng-options="color.id as color.title for color in colors" required>
                                            </select>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label">Genero:</label><br>
                                            <input type="radio" class="form-check-input" id="gender-field" ng-model="updateFields.gender" value="hombre" checked required>
                                            <label class="form-check-label" for="gender-field-man">Hombre</label>
                                            <input type="radio" class="form-check-input ms-2" id="gender-field" ng-model="updateFields.gender" value="mujer" required>
                                            <label class="form-check-label" for="gender-field-woman">Mujer</label>
                                            @{{updateFields.gender}}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="description-field">Descripción:</label>
                                        <textarea class="form-control" id="description-field" rows="4" cols="50" ng-model="updateFields.description" required></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary" ng-click="updateRow()">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

