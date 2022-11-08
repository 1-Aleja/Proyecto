@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/app.css')}}">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="comentarios" >
          <div>
            <form method="get" enctype="multipart/form-data">
              <div class="w-25 input-group mb-3">       
                <input type="number" class="form-control" placeholder="Cantidad" aria-label="Recipient's username" aria-describedby="basic-addon2">
              </div>
              <div class="w-25 input-group mb-3">
                <input type="text" class="form-control" placeholder="Nombre" aria-label="Recipient's username" aria-describedby="basic-addon2">
              </div>
              <div class="w-25 input-group mb-3">
                <input type="number" class="form-control" placeholder="Costo Precio" aria-label="Recipient's username" aria-describedby="basic-addon2">
              </div>
              <div class="w-25 input-group mb-3">
                <input type="number" class="form-control" placeholder="Costo Venta" aria-label="Recipient's username" aria-describedby="basic-addon2">
              </div>
              <div class="form-group mb-3">
                <label for="exampleFormControlTextarea1">Descripción</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <div class="form-group">
                <label for="exampleFormControlFile1"></label>
                <input name=toy_image type="file" class="form-control-file" id="exampleFormControlFile1">
              </div>
              <div class="mt-3">
                <form  action="" method="GET">
                  <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>
              </div>
            </form>
          </div>      
        <div> 
      </div>
    </div>
  </div>
</div>
@endsection