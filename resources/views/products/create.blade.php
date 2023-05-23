@extends('layouts.app')


@section('content')
    <h1>Bienvenido a la pagina de crear productos</h1>
    <a href="{{route('products.index')}}">Ver cursos</a>
    <form action="{{route('products.store')}} " method="POST" enctype="multipart/form-data">
        @csrf
        <label>
            Nombre:<br>
            <input type="text" name="name"><br>
            @error('name')
                <small>*{{$message}}</small>
            @enderror
        </label><br>
        
        <label>
            Descripcion: <br>
            <textarea name="descripcion" cols="30" rows="5"></textarea><br>
            @error('descripcion')
                <small>*{{$message}}</small>
            @enderror
        </label><br><br>

        <label>
            Categoria:<br> 
            <input type="text" name="categoria"><br>
            @error('categoria')
                <small>*{{$message}}</small>
            @enderror
        </label><br><br>
        <label>
            <input type="file" name="imagen"><br>
            @error('imagen')
                <small>{{$message}}</small>
            @enderror
        </label>
        <br><br>
        <button type="submit">Agregar producto </button>
    </form>
@endsection