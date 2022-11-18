
@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/app.css')}}">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="comentarios" >
          <div>
            <form method="POST" action="" enctype="multipart/form-data">
            <a>Elige un rol</a>
                    <select class=" w-25 form-control" id="exampleFormControlSelect1">
                        <option>Elige un rol</option>
                        @foreach ($create as $item)
                        <option name='role_id' value={{$item->id}}>{{$item->title}}</option>
                         @endforeach
                    </select>
              <a>Nombre</a>
              <div class="w-50 input-group mb-3">
                <input name='cost_price' type="text" class="form-control" placeholder="Nombre" aria-label="Recipient's username" aria-describedby="basic-addon2">
              </div>
              <a>Correo Electronico</a>
              <div class="w-50 input-group mb-3">
                <input name='cost_price' type="email" class="form-control" placeholder="Correo" aria-label="Recipient's username" aria-describedby="basic-addon2">
              </div>
              <a>Contraseña</a>
              <div class="w-25 input-group mb-3">
                <input name='cost_price' type="password" class="form-control" placeholder="Contraseña" aria-label="Recipient's username" aria-describedby="basic-addon2">
              </div>
              <a>Confirmar Cotraseña</a>
              <div class="w-25 input-group mb-3">
                <input name='cost_price' type="password" class="form-control" placeholder="Confirmar Contraseña" aria-label="Recipient's username" aria-describedby="basic-addon2">
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