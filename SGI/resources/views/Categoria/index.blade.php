@extends('layouts.plantilla')
@section('title','Proveedor')
@section('content')
<h1>"Bienvenido A las Categorias"</h1> 
<a href="{{route('Categoria.create')}}">CREAR CATEGORIA</a>
<ul>
@foreach($Categorias as $Categorias)
   <li>
      <a href="{{route('Categoria.show', $Categorias->id)}}"> {{$Categorias->nombre}}
   </li>
@endforeach
</ul>



@endsection