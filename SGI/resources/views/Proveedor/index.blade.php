@extends('layouts.plantilla')
@section('title','Proveedor')
@section('content')
<h1>"Bienvenido A Proveedor"</h1> 
<a href="{{route('Proveedor.create')}}">CREAR PROVEEDOR</a>
<ul>
@foreach($Proveedores as $Proveedores)
   <li>
      <a href="{{route('Proveedor.show', $Proveedores->id)}}"> {{$Proveedores->Nombre}}
   </li>
@endforeach
</ul>



@endsection
