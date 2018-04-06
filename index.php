<?php 
 require_once 'actions/conexion_mysqli.php';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>CompuStore</title>
        <meta name="viewport" content="width=device-width">
        <script src="libs/mdl/material.js" async></script>
        <link rel="stylesheet" href="css/base.css"/>
        <link rel="stylesheet" href="css/registro.css">
        <link rel="stylesheet" href="libs/mdl/material.css">
        <script src="libs/angular/angular.min.js"></script>
        <script src="libs/angular/angular-route.min.js"></script>
        <script src="app.js"></script>
        <script src="controladores/inicio.js"></script>
        <script src="controladores/navegacionControl.js"></script>
        <script src="controladores/confirmacion.js"></script>
        <script src="servicios/carritoDeCompras.js"></script>
    </head>
    <body ng-app='navegacion'>
        <header ng-controller="navegacionControl">
            <nav>
                <ul>
                    <li> <a href="#"> Home </a></li>
                    <li> <a href="#!/registro"> Registrarse </a></li>                    
                    <li> <a href="#!/login"> Iniciar sesión </a></li>
                </ul>
            </nav>
        </header>
        <div class="main">
            <div class="container" ng-view="ng-view"></div>
        </div>
    </body>