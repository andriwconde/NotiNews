@extends('layouts.app')

@section('content')
  <form action="/article/create" enctype="multipart/form-data" method="post" class="form p-2 col-lg-7 ">
    @csrf

<input type="hidden" name="user_id" value="{{Auth::user()->id}}">

  <div class="form-group ">
      <label>Titulo</label>
      <input class="form-control" type="text" name="title" value="{{ old('title', $articulo->title) }}">

      <p class="text-danger">{{ $errors->first('name') }}</p>
  </div>

  <div class="form-group ">
      <label>Entretitulo</label>
      <input
          class="form-control"
          type="text" name="excerpt"
          value="{{ old('excerpt', $articulo->excerpt) }}">
  </div>


  <div class="form-group ">
      <label for="">Descripcion</label>
      <textarea class="form-control" name="description">{{ $articulo->description }}</textarea>
  </div>
  <label for="">Categoria</label>
  <select class="form-group" name="category">
  @foreach ($categories as $category)
    <option value="{{$category->id}}">{{$category->name}}</option>
  @endforeach
  </select>
  <div class="form-group col-xl-12">
  {{-- <label for="">Fotos</label><br>
   <input type="file" name="img" value="">
  </div> --}}

  <div class="form-group">
      <button class="btn btn-primary">Guardar</button>
  </div>
  </form>
@endsection
