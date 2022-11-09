@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/app.css')}}">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if($inventario)
            <div class="card">
                <div>
                    <h1 class='hola'>{{$inventario->name}}</h1>
                    <div class='color'>
                        <h4>Cantidad {{$inventario->quantity_available}}</h4>
                        <h3>Descripción</h3>
                        <h4>{{$inventario->description}}</h4>
                    </div>
                   
                </div>
                <div class='m-3'>
                    <form  action="/toy" method="GET">
                    <button type="submit" class="btn btn-primary">Editar</button>
                    </form>
                </div>
            </div>
            @else
            <h1>No existe la referencia</h1>
            @endif
        </div>
    </div>
</div>
@endsection