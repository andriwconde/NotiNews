@extends('layouts.app')

@section('content')
  <div class="col-10 rounded mx-auto d-block bg-light" id="articulo23">

      <div class="titulo">
        <h1>{{$articulo->title}}</h1>
      </div>

      <div class="exe">
        <h4>{{$articulo->excerpt}}</h4>
      </div>

      <div class="">
        <h6>{{$articulo->description}}</h6>
      </div>

  </div>
@endsection
