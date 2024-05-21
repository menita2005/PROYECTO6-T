@extends('layouts.plantilla')
@section('title','Productos create')
@section('content')
<h1>"En esta pagina puedes crear un productos"</h1>

<form action="{{route('Productos.store')}}" method="POST">
    @csrf
    <label for="">
        Nombre:<br>
        <input type="text" name="NombreP" value="{{old('NombreP')}}">
    </label><br>
    @error('NombreP')
    <br>
    <span>{{$message}}</span>
        <br>
    @enderror
    <label >
        Descripcion:<br>
        <textarea name="Descripcion" rows="5">{{old('Descripcion')}}</textarea>
    </label><br>
    @error('Descripcion')
    <br>
    <span>{{$message}}</span>
        <br>
    @enderror
    <label >
        Precio:<br>
        <input type="number" name="Precio" value="{{old('Precio')}}">
    </label><br>
    @error('Precio')
    <br>
    <span>{{$message}}</span>
        <br>
    @enderror
    <label ><br>
        Stock:<br>
        <input type="number" name="stock" value="{{old('stock')}}">
    </label>
    @error('stock')
    <br>
    <span>{{$message}}</span>
        <br>
    @enderror
    <button type="submit">Enviar</button>
</form>
@endsection

