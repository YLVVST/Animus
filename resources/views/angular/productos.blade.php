@push('js-stack')

<script>
    (function() {
        var app = angular.module('productos-manager', []);
        app.controller('tableController', ['$scope', '$http', function($scope, $http) {
            var url = "{{ route('product.index') }}";
            $scope.productos = {};
            $scope.updateFields = {};
            $http.get(url).then(function successCallback(response) {
                $scope.productos = response.data;
            });

            $scope.removeRow = function(index) {
                var id = $scope.productos[index].id_product;
                $http.post("{{ route('product.delete') }}", {
                    id_product: id
                }).then(function successCallback(response) {
                    $scope.productos.splice(index, 1);
                });
            }

            $scope.updateFieldsPreparations = function(index) {
                $scope.updateFields = $scope.productos[index];
            }

            $scope.updateRow = function() {
                $http.post("{{ route('product.custom.update') }}", $scope.updateFields)
                    .then(function successCallback(response) {
                        location.reload();
                    });
            }

            $scope.colors = [{
                    id: 'rojo',
                    title: 'Rojo'
                },
                {
                    id: 'azul',
                    title: 'Azul'
                },
                {
                    id: 'verde',
                    title: 'Verde'
                },
                {
                    id: 'negro',
                    title: 'Negro'
                },
                {
                    id: 'rosa',
                    title: 'Rosa'
                },
                {
                    id: 'amarillo',
                    title: 'Amarillo'
                },
                {
                    id: 'morado',
                    title: 'Morado'
                },
                {
                    id: 'cafe',
                    title: 'Cafe'
                },
            ];

            $scope.collections = [{
                    id: 'sueter',
                    title: 'Sueter'
                },
                {
                    id: 'pantalon',
                    title: 'Pantalón'
                },
                {
                    id: 'camisa',
                    title: 'Camisa'
                },
                {
                    id: 'playera',
                    title: 'Playera'
                },
                {
                    id: 'accesorios',
                    title: 'Accesorios'
                },
                {
                    id: 'vestido',
                    title: 'Vestido'
                },
                {
                    id: 'blusa',
                    title: 'Blusa'
                }
            ];

        }]);
    })();
</script>

@endpush