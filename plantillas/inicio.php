    <div class="s-catalogo">
        <div class="producto" ng-repeat="producto in productos" ng-class="{'ocultar' : producto.ocultar}">
            <h4>{{producto.nombre}}</h4>
            <h6>{{producto.categoria}}</h6>
            <div class="imagen">
                <img ng-src="imagenes/{{producto.imagen}}" width="50"></div>
                <div class="precio">{{producto.precio | currency}}</div>
                <p>{{producto.descripcion}}</p>
                <button
                    class="btn btn-danger"
                    ng-click="comprar(producto)"
                    ng-disabled="producto.ocultar">
                    Comprar</button>
            </div>
        </div>
        <div class="carrito">
            <h4>
                <i class="fa fa-shopping-cart"></i>
                Carrito de compras</h4>
            <ul>
                <li ng-repeat="producto in carrito">
                    {{producto.nombre}}
                    <strong class="pull-right">{{producto.precio | currency }}</strong>
                </li>
            </ul>
            <h2>Total: ${{total()}}</h2>
            <button class="btn" ng-click="finalizar()">Finalizar Compra</button>
        </div>