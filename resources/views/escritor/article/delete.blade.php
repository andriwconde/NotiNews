@extends('layouts.app')

@section('content')

  @foreach ($articulos as $articulo)
    <section class="my-4" id="aection">

      <div class="articulo pb-2 pl-2 d-lg-flex">
        <div class="col-lg-10 ">
          <div class="titulo">
            <h2 class="tituloMenu pl-3 pt-1">{{$articulo->title}}</h2>
          </div>
          <div class="excerpt">
            <h4>{{$articulo->excerpt}}</h4>
          </div>
        </div>
        <div class="rating col-lg-2 ">
         <h6>Rating:{{rand(1,5)}}</h6>
         <form class="" action="{{url("/article/". $articulo->id)}}" method="post">
           @csrf
           @method("delete")
           <button class="btn btn-outline-danger btn-sm">Eliminar</button>
         </form>
       </div>
        </div>

          </section>
        @endforeach






@endsection
