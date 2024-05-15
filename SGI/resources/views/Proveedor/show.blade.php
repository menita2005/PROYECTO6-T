@extends('layouts.plantilla')
@section('title','Proveedor ' . $Proveedores->Nombre)
@section('content')

<h1>"Informacion del proveedor {{$Proveedores->Nombre}}"</h1>

    

<p><strong>Telefono: {{$Proveedores->telefono}}</strong></p>
<p><strong>Correo: {{$Proveedores->Correo}}</strong></p>
@endsection
