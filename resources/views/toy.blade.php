@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/app.css')}}">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="comentarios" >
          <div>

            <form method="GET" action="/toy/edit/{{$inventario->id}}" enctype="multipart/form-data">
              <a>Referencia</a>
              <input type="hidden"name='id' value="{{$inventario->id}}">
              <div class="w-25 input-group mb-3">
                <input name='reference'type="number" class="form-control" placeholder="Referencia" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{$inventario->reference}}" readonly>
              </div>
              <a>Cantidad</a>
              <div class="w-25 input-group mb-3">
                <input name='quantity_available'type="number" class="form-control" placeholder="Cantidad" aria-label="Recipient's username" aria-describedby="basic-addon2">
              </div>
              <a>Nombre</a>
              <div class="w-25 input-group mb-3">
                <input name='name'type="text" class="form-control" placeholder="Nombre" aria-label="Recipient's username" aria-describedby="basic-addon2">
              </div>
              <a>Costo Precio</a>
              <div class="w-25 input-group mb-3">
                <input name='cost_price' type="number" class="form-control" placeholder="Costo Precio" aria-label="Recipient's username" aria-describedby="basic-addon2">
              </div>
              <a>Costo Venta</a>
              <div class="w-25 input-group mb-3">
                <input name='sale_price'type="number" class="form-control" placeholder="Costo Venta" aria-label="Recipient's username" aria-describedby="basic-addon2">
              </div>
              <div class="form-group mb-3">
                <label  for="description">Descripción</label>
                <input name='description'class="form-control"  rows="3">
              </div>
              <div class="form-group">
                <label for="exampleFormControlFile1"></label>
                <input name=toy_image type="file" class="form-control-file" id="exampleFormControlFile1">
              </div>
              <div class="mt-3">
              <button type="submit" class="btn btn-primary">Actualizar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection