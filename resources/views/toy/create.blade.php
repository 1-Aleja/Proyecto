@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/app.css')}}">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="comentarios" >
          <div>
            <form method="GET" action={{url('/create-toy/insert')}} enctype="multipart/form-data">
              <a>Referencia</a>
              <div class="w-25 input-group mb-3">
                <input name='reference'type="number" class="form-control" placeholder="Referencia" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
              </div>
              <a>Cantidad</a>
              <div class="w-25 input-group mb-3">
                <input name='quantity_available'type="number" class="form-control" placeholder="Cantidad" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
              </div>
              <a>Nombre</a>
              <div class="w-25 input-group mb-3">
                <input name='name'type="text" class="form-control" placeholder="Nombre" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
              </div>
              <a>Costo Precio</a>
              <div class="w-25 input-group mb-3">
                <input name='cost_price' type="number" class="form-control" placeholder="Costo Precio" aria-label="Recipient's username" aria-describedby="basic-addon2" required >
              </div>
              <a>Costo Venta</a>
              <div class="w-25 input-group mb-3">
                <input name='sale_price'type="number" class="form-control" placeholder="Costo Venta" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
              </div>
              <div class="form-group mb-3">
                <label  required for="description">Descripción</label>
                <input name='description'class="form-control"  rows="3"required>
              </div>
              <div class="form-group">
                <label for="exampleFormControlFile1"></label>
                <input name=toy_image type="file" class="form-control-file" id="exampleFormControlFile1" required>
              </div>
              <div class="mt-3">
              <button type="submit" class="btn btn-primary">Ingresar Producto</button>
            </form>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection