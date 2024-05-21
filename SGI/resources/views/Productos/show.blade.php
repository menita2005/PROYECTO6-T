@extends('layouts.plantilla')
@section('title','Producto  ' . $producto->NombreP)
@section('content')

<h1>"Bienvenido A la pagina producto {{$producto->NombreP}}"</h1>

    

<p><strong>Categoria: {{$producto->Categoria}}</strong></p>
<p><strong>descripcion: {{$producto->Descripcion}}</strong></p>
<a href="{{route('Productos.edit',$producto)}}">Editar Producto</a>
@endsection
