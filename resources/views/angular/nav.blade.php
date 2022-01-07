@push('js-stack')
<script>
    (function() {
        var appNav = angular.module('navApp', []);
        appNav.controller('navCtrl', ['$scope', '$http', function($scope, $http) {
            var url = "{{ route('cart.count') }}";
            $scope.cartCount = 0;
            $http.get(url).then(function successCallback(response) {
                $scope.cartCount = response.data;
            });
        }]);
    })();
</script>
@endpush