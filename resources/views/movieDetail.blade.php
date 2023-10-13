@extends('layouts.layout')

@section('header')
<header>
  <h1>questo è un header tosto</h1>
  <div class="blue-bg">dettagio</div>
</header>
@endsection


@section('main-content')

<div class="col-6 my-3 mx-auto">


    <div class="card h-100 " >
      <div class="card-header fw-bold text-center">
        {{$movieDET->title}}
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"> Titolo originale: <span class="fst-italic"> {{$movieDET->original_title}} </span></li>
        <li class="list-group-item"> Nazionalità: <span class="fst-italic"> {{$movieDET->nationality}}</span></li>
      <li class="list-group-item"> Data di uscita: <span class="fst-italic"> {{$movieDET->date}}</span></li>
      <li class="list-group-item"> Voto della critica: <span class="fst-italic"> {{$movieDET->vote}}</span></li>
    </ul>

  </div>

</div>
<div class="d-flex justify-content-center">

  <a href="{{route('home')}}">
    
    <button type="button" class="btn btn-primary">alla home</button>
  </a>
</div>
    
@endsection