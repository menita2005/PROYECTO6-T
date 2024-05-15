@extends('layouts.plantilla')
@section('title','Productos')
@section('content')
 
<div class="d-flex justify-content-around">
   <h1>"Bienvenido A productos"</h1>
   </div>
   <div class="d-grid gap-2 col-2 mx-auto">
<a href="{{route('Productos.create')}}" class="btn btn-primary mb-3">CREAR PRODUCTOS</a>
   </div>
<ul>
    
   <table class="table table-striped">
    
    <thead>
        
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Stoke</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($productos as $producto)
            <tr>
                <td>{{ $producto->id }}</td>
                <td>{{$producto->NombreP}}</td>
                <td  style="max-width: 450px;">{{$producto->Descripcion}}</td>
                <td>{{$producto->Precio}}</td>
                <td>{{$producto->stock}}</td>
                <td>
                    <a href="{{route('Productos.show', $producto->id)}}" class="btn btn-info">Ver</a>
                    
                </td>
            </tr>
        @endforeach
    </tbody>

</table>
    

</ul>

{{$productos->links()}}

@endsection
