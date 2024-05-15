@extends('layouts.plantilla')
@section('title','Productos')
@section('content')
<h1>"Bienvenido A Proveedor"</h1> 
<a href="{{route('Proveedor.create')}}">CREAR PROVEEDOR</a>
<ul>
@foreach($Proveedor as $Proveedor)
   <li>
      <a href="{{route('Proveedor.show', $Proveedor->id)}}"> {{$Proveedor->NombreP}}
   </li>
@endforeach
</ul>



@endsection
