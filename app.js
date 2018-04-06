var miAppAngular = angular.module('navegacion', ['ngRoute']);
miAppAngular.config([
    '$routeProvider',
    function ($routeProvider) {
        $routeProvider
            .when('/', {
                templateUrl: 'plantillas/inicio.php',
                controller: 'inicio'
            })
            .when('/confirmacion', {
                templateUrl: 'plantillas/confirmacion.php',
                controller: 'confirmacion'
            }).when('/registro', {
                templateUrl: 'plantillas/registro.php',
                controller: 'confirmacion'
            }).when('/login', {
                templateUrl: 'plantillas/login.php',
                controller: 'confirmacion'
            })
            .when('/404', {
                templateUrl: 'plantillas/404.php',
                controller: 'inicio'
            })
            .otherwise({redirectTo: '/404'})
    }
])