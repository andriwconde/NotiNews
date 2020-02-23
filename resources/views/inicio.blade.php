@extends('layouts.app')

@section('content')

  <div class="col-10 rounded mx-auto d-block">
      <section class="my-4">
        @foreach ($articles as $article)
          <div class="col-md-4">
            <div class="row">
                <img src="{{ Storage::url($article->title) }}" alt="Menu">
                <h3>{{$article->excerpt}}</h3>
                <p class="grey-text">{{$article->description}}</p>
            </div>
          </div>
        @endforeach
      </section>
  </div>

        @endsection
