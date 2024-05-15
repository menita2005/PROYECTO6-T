@extends('layouts.plantilla')
@section('title','Proveedor ' . $proveedor->Nombre)
@section('content')

<h1>"Informacion del proveedor {{$proveedor->Nombre}}"</h1>

    

<p><strong>Telefono: {{$proveedor->telefono}}</strong></p>
<p><strong>Correo: {{$proveedor->correo}}</strong></p>
@endsection
