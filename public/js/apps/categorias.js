var app = angular.module('categoriasApp', [])

app.controller('productosCtrl', function ($scope) {

    $scope.productoHombre = productoH;
    $scope.productoMujer = productoM;
    $scope.productoTodos = productoT;

    
    $scope.HombresIsHide = false;
    $scope.MujeresIsHide = true;
    $scope.TodosIsHide = true;

    $scope.ShowHideHombres = function () {
        $scope.HombresIsHide = $scope.HombresHide = false;
        $scope.MujeresIsHide = $scope.HombresHide = true;
        $scope.TodosIsHide = $scope.HombresHide = true;
    }

    $scope.ShowHideMujeres = function () {
        $scope.MujeresIsHide = $scope.HombresHide = false;
        $scope.HombresIsHide = $scope.HombresHide = true;
        $scope.TodosIsHide = $scope.HombresHide = true;
    }
    $scope.ShowHideTodos = function () {
        $scope.TodosIsHide = $scope.HombresHide = false;
        $scope.HombresIsHide = $scope.HombresHide = true;
        $scope.MujeresIsHide = $scope.HombresHide = true;
    }

});

var productoH = {
    nombre: "Pantalón",
    precio: "$399.99",
    descripcion: "Mezclilla azul",
    foto: "img/masonry/masonry1.jpg"
}

var productoM = {
    nombre: "Blusa",
    precio: "$399.99",
    descripcion: "Mezclilla azul",
    foto: "img/masonry/masonry2.jpg"
}

var productoT = {
    nombre: "Gorra",
    precio: "$399.99",
    descripcion: "Mezclilla azul",
    foto: "img/masonry/masonry3.jpg"
}
