@extends('layouts.master')

@section('content')
    <h1>{{$titulo}}</h1>

@if(isset($listado))
    <p>El listado es {{$listado}}</p>
@endif

    <a href="{{ route('detalles.pelicula',['year' => 2022]) }}">Ir a detalle</a>

@stop