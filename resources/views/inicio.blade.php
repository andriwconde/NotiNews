@extends('layouts.app')

@section('content')

  <div class="col-10 rounded mx-auto d-block bg-light">

    <h1>Articulos del Dia</h1>
  @foreach ($articulos as $articulo)
    <section class="my-4 ">

      <div class="articulo pb-2 pl-2 d-flex col-sm-12">
        <div class="col-10">
          <div class="titulo">
            <h2 class="tituloMenu pl-3 pt-1"><a href="article/show/{{$articulo->id}}">{{$articulo->title}}</a></h2>
          </div>
          <div class="excerpt">
            <h4>{{$articulo->excerpt}}</h4>
          </div>
        </div>
        <div class="rating col-2 pt-2">
         <h6>Rating:{{rand(1,5)}}</h6>
        </div>
      </div>


    </section>
  @endforeach

</div>
<div class="col-10 rounded mx-auto d-block">
  {{$articulos->links()}}
</div>

        @endsection
