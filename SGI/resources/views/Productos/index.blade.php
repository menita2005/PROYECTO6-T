@extends('layouts.plantilla')
@section('title','Productos')
@section('content')
<h1>"Bienvenido A productos"</h1> 
<a href="{{route('Productos.create')}}">CREAR PRODUCTOS</a>
<ul>
@foreach($productos as $producto)
   <li>
      <a href="{{route('Productos.show', $producto->IDproducto)}}"> {{$producto->NombreP}}
   </li>
@endforeach
</ul>

{{$productos->Links()}}

@endsection
