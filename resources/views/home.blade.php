@extends('layouts.app')

@section('content')

  <div class="col-10 rounded mx-auto d-block bg-light">

    <h1>Articulos del Dia</h1>

    @foreach ($categories as $category)
    <div class="col-12 rounded mx-auto ">
            <h1 class="tituloMenu pl-3 pt-1">{{$category->name}}</h1>
     </div>
  @foreach ($category->article as $article)
    <section class="my-4 ">

      <div class="articulo pb-2 pl-2 d-lg-flex">
        <div class="col-lg-10 ">
          <div class="titulo">
            <h2 class="tituloMenu pl-3 pt-1"><a href="article/show/{{$article->id}}">{{$article->title}}</a></h2>
          </div>
          <div class="excerpt">
            <h4>{{$article->excerpt}}</h4>
          </div>
        </div>
        <div class="rating col-lg-2  pt-2">
         <h6>Rating:{{rand(1,5)}}</h6>
        </div>
      </div>

          </section>
        @endforeach

      @endforeach
      </div>
      <div class="col-10 rounded mx-auto d-block">
        {{$categories->links()}}
      </div>
              @endsection
