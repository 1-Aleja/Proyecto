

@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/app.css')}}">

<div class="container">
    <div class="row justify-content-center">
      <table  class="table table-striped table-dark">
        <thead class="thead-light">
          <tr>
            <th scope="col">Referencia</th>
            <th scope="col">Nombre</th>
            <th scope="col">Precio Costo</th>
            <th scope="col">Precio Venta</th>
            <th scope="col">Cantidad disponible</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        @foreach ($inventario as $item)
        <tbody>
          <tr>
            <th scope="row">{{$item->reference}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->cost_price}}</td>
            <td>{{$item->sale_price}}</td>
            <td>{{$item->quantity_available}}</td>
            <td >
            <form  action="reference/{{$item->reference}}" method="GET">
                <button type="submit" class="btn btn-primary">Referencia</button>
            </form>
            </td>
          </tr>  
        
        </tbody>
        @endforeach
      </table>
</div>
@endsection