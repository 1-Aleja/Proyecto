<link rel="stylesheet" href="{{ asset('css/app.css')}}">
<div>
    <h1 class='hola'>{{$inventario->name}}</h1>
    <div class='cantidad'>
        <h4>Cantidad  {{$inventario->quantity_available}}</h4>
    </div>
</div>
<div class='product'>
</div>