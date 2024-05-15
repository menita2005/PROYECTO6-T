@extends('layouts.plantilla')
@section('title','Categoria ' . $Categorias->nombre)
@section('content')

<h1>"Informacion de la Categoria {{$Categorias->nombre}}"</h1>

    

<p><strong>nombre: {{$Categorias->nombre}}</strong></p>

@endsection