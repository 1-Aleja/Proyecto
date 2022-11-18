@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/app.css')}}">

<div class="container">
    <div class="row justify-content-center">
      <div class="row justify-content-center">
        <nav class="float-right navbar navbar-light">
          <form class="form-inline">
            <input name="search" class="form-control mr-sm-2" type="search" placeholder="Usuario por nombre" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
          </form>
            <form  method="POST" action="/list/user/regist">
                @csrf
                <button type="submit" class="m-3 btn btn-primary">Registrar Usuario</button>
            </form>
        </nav>
      </div>
      <table  class="table table-striped table-dark">
        <thead class="thead-light">
          <tr >
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col">Rol</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>

       @foreach ($userlist as $item)
        <tbody>
           <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->roles()->first()->title}}</td>
            <td class='d-flex justify-content-center'>
            <form  action="/edit/user" method="GET">
                @csrf
                <button type="submit" class="m-3 btn btn-primary">Editar</button>
            </form>
            <form  action="reference/{{$item->id}}" method="GET">
                <button type="submit" class="m-3 btn btn-danger">Eliminar</button>
            </form>
            </td>
          </tr>
        </tbody>
         @endforeach
      
      </table>
</div>
@endsection