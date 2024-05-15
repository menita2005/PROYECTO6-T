@extends('layouts.plantilla')
@section('title','Proveedor')
@section('content')
<div class="d-grid gap-2 col-4 mx-auto">
    <div class="d-inline-block text-truncate" >
<h1>"Bienvenido A Proveedor"</h1> 
</div>
<a href="{{route('Proveedor.create')}}" class="btn btn-primary mb-3">CREAR PROVEEDOR</a>
</div>
</ul>
<ul>
    
    <table class="table table-striped">
     
     <thead>
         
         <tr>
             <th>ID</th>
             <th>Nombre</th>
             <th>Correo</th>
             <th>Telefono</th>
             <th>Direccion</th>
             <th>Acciones</th>
         </tr>
     </thead>
     <tbody>
        @foreach($Proveedores as $Proveedores)
             <tr>
                 <td>{{ $Proveedores->id }}</td>
                 <td>{{$Proveedores->Nombre}}</td>
                 <td>{{$Proveedores->Correo}}</td>
                 <td>{{$Proveedores->telefono}}</td>
                 <td>{{$Proveedores->Direccion}}</td>
                 <td>
                     <a href="{{route('Proveedor.show', $Proveedores->id)}}" class="btn btn-info">Ver</a>
                     
                 </td>
             </tr>
         @endforeach
     </tbody>
 
 </table>
     
 
 </ul>



@endsection
