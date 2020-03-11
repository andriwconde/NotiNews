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


      @auth
        @if (Auth::user()->type == "Escritor" && Auth::user()->id === $articulo->user->id)

        <div class="nav-item dropdown mr-2">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Opciones
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="/article/edit/{{$articulo->id}}">Editar</a>
              <form class="" action="/article/{{$articulo->id}}" method="post">
                @csrf
                @method('delete')
                <button class="dropdown-item"type="submit" name="button">Eliminar</button>
              </form>
          </div>
        </div>
        @endif
      @endauth
  </div>
  <div class="col-10 rounded mx-auto d-block bg-info text-white">
    <h4>{{'COMENTARIOS'}}</h4>
    <form class="" action="" method="post">
      @csrf
    </form>
    @foreach ($coments as $coment)
        @foreach ($users as $user)
      @if ($coment->article_id == $articulo->id && $coment->user_id == $user->id)


        <div class="bg-success my-4">
          <div class="">
          <h4>{{$user->name}}</h4>
          </div>
          <h6>{{$coment->content}}</h6>

        </div>

     @endif
     @endforeach
    @endforeach
</div>
@endsection
