@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/app.css')}}">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div>
                    <h1 class='hola'>{{$inventario->name}}</h1>
                    <div class='cantidad'>
                        <h3>Descripción</h3>
                    </div>
                    <div class='color'>
                        <h4>Cantidad {{$inventario->quantity_available}}</h4>
                        <h4>{{$inventario->description}}</h4>
                    </div>
                    <div class='comentarios'>
                        <h4>Comentarios</h4>
                        <div class=>
                            {{$inventario->comment}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection