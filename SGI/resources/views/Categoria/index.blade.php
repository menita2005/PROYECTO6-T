@extends('layouts.plantilla')
@section('title','Categoria')
@section('content')
<div class="d-flex justify-content-center">
<h1>"Bienvenido a las Categorias"</h1>
</div>
<div class="d-grid gap-2 col-2 mx-auto">
<a href="{{ route('Categoria.create') }}" class="btn btn-primary mb-3">CREAR CATEGORIA</a>



  </div>


<ul>

   <table class="table table-striped">

    <thead>

        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($Categorias as $Categorias)
            <tr>
                <td>{{ $Categorias->id }}</td>
                <td>{{ $Categorias->nombre }}</td>
                <td>
                    <a href="{{ route('Categoria.show', $Categorias->id) }}" class="btn btn-info">Ver</a>

                </td>
            </tr>
        @endforeach
    </tbody>

</table>


</ul>



@endsection
