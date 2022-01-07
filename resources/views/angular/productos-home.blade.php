@push('js-stack')
<script>
    (function() {
        var app = angular.module('categoriasApp', []);
        app.controller('productosCtrl', ['$scope', '$http', function($scope, $http) {
            var url = "{{ route('product.index') }}";
            $scope.productos = {};
            $scope.modalProduct = {};

            $scope.gender = 'todos';

            $http.get(url).then(function successCallback(response) {
                $scope.productos = response.data;
            });

            $scope.chargeModal = function(index) {
                $scope.modalProduct = $scope.productos[index];
            }

            $scope.changeGenderFilter = function(gender) {
                $scope.gender = gender;
            }

            $scope.addToCart = function(index) {
                product = $scope.productos[index];
                $http.post("{{ route('cart.store') }}", {'id_product': product.id_product}).then(function successCallback(response) {
                    alert("Producto agregado al carrito");
                });
            }

        }]);
    })();
</script>
@endpush