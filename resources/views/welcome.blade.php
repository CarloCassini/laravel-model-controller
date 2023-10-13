@extends('layouts.layout')

@section('main-content')
<h1 class="debug">
ciccio
</h1>

@if (@isset($movies))
@foreach ($movies as $movie)
{{$movie->title}}
    <br>
@endforeach
    
@endif
    
@endsection