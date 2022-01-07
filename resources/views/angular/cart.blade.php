@push('js-stack')
<script>
    (function() {
        var app = angular.module('cartApp', []);
        app.controller('cartCtrl', ['$scope', '$http', function($scope, $http) {
            var url = "{{ route('cart.products') }}";
            $scope.productos = {};

            $http.get(url).then(function successCallback(response) {
                $scope.productos = response.data;
            });
            $scope.deleteToCart = function(index) {
                var id = $scope.productos[index].id_product;
                $http.post("{{ route('cart.delete') }}", {
                    id_product: id
                }).then(function successCallback(response) {
                    $scope.productos.splice(index, 1);
                });
            }

        }]);
    })();
    
</script>
@endpush