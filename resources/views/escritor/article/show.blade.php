@extends('layouts.app')

@section('content')
  <div class="col-10 rounded mx-auto d-block" id="articulo23">

      <div class="titulo">
        <h1>{{$articulo->title}}</h1>
      </div>

      <div class="exe">
        <h4>{{$articulo->excerpt}}</h4>
      </div>

      <div class="">
        <h6>{{$articulo->description}}</h6>
      </div>

      <div class="nav-item dropdown mr-2">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Opciones
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="/article/edit/{{$articulo->id}}">Editar</a>
              <a class="dropdown-item" href="/article/{id}">Eliminar</a>
        </div>
      </div>
  </div>

@endsection
