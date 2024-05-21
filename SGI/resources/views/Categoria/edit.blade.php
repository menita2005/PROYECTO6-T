@extends('layouts.plantilla')
@section('title', 'Editar Categoría')
@section('content')
<h1>En esta página puedes editar una categoría</h1>

<form action="{{ route('Categoria.update', $categoria) }}" method="POST">
    @csrf
    @method('put')
    <label for="nombre">
        Nombre: <br>
        <input type="text" name="nombre" value="{{ old('nombre', $categoria->nombre) }}">
    </label>
    @error('nombre')
        <br>
        <small>*{{ $message }}</small>
        <br>
    @enderror
    <br>
    <button type="submit">Actualizar</button>
</form>
@endsection

