@extends('layouts.plantilla')
@section('title','Categoria create')
@section('content')
    <h1>"En esta pagina puedes crear una Categoria"</h1>
    <form action="{{route('Categoria.store')}}" method="POST">
        @csrf
        
        <label for="">
            Nombre:<br>
            <input type="text" name="nombre" value="{{old('nombre')}}">
        </label><br>
        @error('nombre')
        <br>
        <span>{{$message}}</span>
            <br>
        @enderror
        <br><button type="submit">Enviar</button>
    </form>
@endsection