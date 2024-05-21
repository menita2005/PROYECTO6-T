@extends('layouts.plantilla')
@section('title','Productos Edit')
@section('content')
<h1>"En esta pagina puedes Editar un productos"</h1>

<form action="{{route('Productos.update',$producto)}}" method="POST">
    @csrf
    @method('put')
    <label for=""><br>
        Nombre: <br>
        <input type="text" name="NombreP" value="{{ old('NombreP',$producto->NombreP)}}">
    </label><br>
    @error('NombreP')
    <br>
    <span>{{$message}}</span>
        <br>
    @enderror
    <label ><br>
        Descripcion: <br>
        <textarea name="Descripcion" rows="5">{{ old('Descripcion',$producto->Descripcion)}}</textarea>
    </label>
    @error('Descripcion')
    <br>
    <span>{{$message}}</span>
        <br>
    @enderror
   <br> <label ><br>
        Precio: <br>
        <input type="number" name="Precio" value="{{old('Precio',$producto->Precio)}}">
    </label>
    @error('Precio')
    <br>
    <span>{{$message}}</span>
        <br>
    @enderror
    <br><label ><br>
        Stock: <br>
        <input type="number" name="stock" value="{{old('stock',$producto->stock)}}">
    </label>
    @error('stock')
    <br>
    <span>{{$message}}</span>
        <br>
    @enderror
    <br><button type="submit">Actualizar</button>
</form>

@endsection
