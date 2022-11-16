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
                @cannot('list-products') 
                <div class='m-3'>
                    <form  action="/toy/{{$inventario->id}}" method="GET">
                        <button type="submit" class="btn btn-primary">Editar</button>
                    </form>
                </div>
                @endcan
            </div>
            @else
            <h1>No existe la referencia</h1>
            @endif
        </div>
    </div>
</div>
@endsection

