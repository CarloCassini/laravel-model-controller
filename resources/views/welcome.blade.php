@extends('layouts.layout')

@section('header')
<header>
  <h1>questo è un header</h1>
  <div class="blue-bg">ecco</div>
</header>
@endsection


@section('main-content')

<div class="container">
  <div class="row">
    @if (@isset($movies))
@foreach ($movies as $movie)

<div class="col-3 my-3">

  <a href="{{Route('detail',$movie->id)}}">
    <div class="card h-100 " >
      <div class="card-header fw-bold text-center">
        {{$movie->title}}
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"> Titolo originale: <span class="fst-italic"> {{$movie->original_title}} </span></li>
        <li class="list-group-item"> Nazionalità: <span class="fst-italic"> {{$movie->nationality}}</span></li>
      <li class="list-group-item"> Data di uscita: <span class="fst-italic"> {{$movie->date}}</span></li>
      <li class="list-group-item"> Voto della critica: <span class="fst-italic"> {{$movie->vote}}</span></li>
    </ul>
  </a>
  </div>

</div>

@endforeach
    
@endif

  </div>
</div>


    
@endsection