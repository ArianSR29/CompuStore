miAppAngular.controller('inicio', function ($scope, $location, carritoDeCompras) {
    $scope.productos = [
        {
            id: 1,
            nombre: "Mause para Gamers ASUS mod. 235A",
            descripcion: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor" +
                    " incididunt ut labore et dolore magna aliqua.",
            precio: 530.5,
            imagen: "1-Mause_1.png",
            categoria: "Mause/Raton"
        }, {
            id: 2,
            nombre: "Mause Gamers basico HP mod. 12G",
            descripcion: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor" +
                    " incididunt ut labore et dolore magna aliqua.",
            precio: 250.4,
            imagen: "2-Mause_2.png",
            categoria: "Mause/Raton"

        }, {
            id: 3,
            nombre: "Teclado Pro ASUS mod. 434G7",
            descripcion: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor" +
                    " incididunt ut labore et dolore magna aliqua.",
            precio: 740.6,
            imagen: "3-Teclado_1.png",
            categoria: "Teclado"

        },{
            id: 4,
            nombre: "Teclado basic mod. G54",
            descripcion: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor" +
                    " incididunt ut labore et dolore magna aliqua.",
            precio: 220.67,
            imagen: "4-Teclado_2.png",
            categoria: "Teclado"

        },{
            id: 5,
            nombre: "Monitor 45'' LED mod. RG565",
            descripcion: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor" +
                    " incididunt ut labore et dolore magna aliqua.",
            precio: 1480.6,
            imagen: "5-Monitor_1.png",
            categoria: "Monitor"

        },{
            id: 6,
            nombre: "Monitor 4K mod.L45",
            descripcion: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor" +
                    " incididunt ut labore et dolore magna aliqua.",
            precio: 2200.3,
            imagen: "6-Monitor_2.png",
            categoria: "Monitor"

        },{
            id: 7,
            nombre: "Audifono HD mega bass",
            descripcion: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor" +
                    " incididunt ut labore et dolore magna aliqua.",
            precio: 890.7,
            imagen: "7-Audifonos_1.png",
            categoria: "Audifonos"

        },{
            id: 8,
            nombre: "Audifonos rasta HQ",
            descripcion: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor" +
                    " incididunt ut labore et dolore magna aliqua.",
            precio: 150.4,
            imagen: "8-Audifonos_2.png",
            categoria: "Audifonos"

        },{
            id: 9,
            nombre: "Gabinete con luz LED mod. GA45",
            descripcion: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor" +
                    " incididunt ut labore et dolore magna aliqua.",
            precio: 884.9,
            imagen: "9-Gabinete_1.png",
            categoria: "Gabinete"

        },{
            id: 10,
            nombre: "Gabinete para server mod. SERV56",
            descripcion: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor" +
                    " incididunt ut labore et dolore magna aliqua.",
            precio: 450.3,
            imagen: "10-Gabinete_2.png",
            categoria: "Gabinete"

        },{
            id: 11,
            nombre: "Computadora escolar básica",
            descripcion: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor" +
                    " incididunt ut labore et dolore magna aliqua.",
            precio: 4500,
            imagen: "11-Computradora_1.png",
            categoria: "Computadora"

        },{
            id: 12,
            nombre: "Computadora para diseñadores",
            descripcion: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor" +
                    " incididunt ut labore et dolore magna aliqua.",
            precio: 8900,
            imagen: "12_computdora_2.png",
            categoria: "Computadora"

        },{
            id: 13,
            nombre: "Laptop HP mod. 345GH",
            descripcion: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor" +
                    " incididunt ut labore et dolore magna aliqua.",
            precio: 14300,
            imagen: "13-Laptop_1.png",
            categoria: "Laptop"

        },{
            id: 14,
            nombre: "Laptop Lenovo Slim Pro",
            descripcion: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor" +
                    " incididunt ut labore et dolore magna aliqua.",
            precio: 8900,
            imagen: "14-Laptop_2.png",
            categoria: "Laptop"

        },
    ]
    $scope.carrito = [];
    $scope.comprar = function (_item) {
        _item.ocultar = true;
        $scope
            .carrito
            .push(_item);
        carritoDeCompras.productos = $scope.carrito;
    }
    $scope.total = function () {
        var total = 0;
        for (item of $scope.carrito) {
            total += item.precio;
        }
        carritoDeCompras.total = total;
        return total;
    }
    $scope.finalizar = function () {
        $location.path("/confirmacion");
    }
});