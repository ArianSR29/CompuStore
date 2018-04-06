<div class="c-confirmacion">
<h1>Confirmación de compra</h1>

<h2>Productos adquiridos:</h2>

<ul class="list-group">
    <li class="list-group-item" ng-repeat="producto in productos">
        {{producto.nombre}}
        <strong class="pull-right">${{producto.precio}}</strong>
    </li>

</ul>

<h2>Total de su compra: <span class="s-total"> {{total|currency}} </span>MNX</h2>
<ul>
    <h1>¡Su compra ha sido exitosa!</h1>
</div>