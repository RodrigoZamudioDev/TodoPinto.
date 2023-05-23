@extends('layouts.app')

@section('content')
<a href="{{route('products.index')}}">Ver cursos</a>
   <h1>Mostrar producto {{$products->name}}</h1> 
   <p><strong>Nombre: </strong>{{$products->name}}</p>
   <p><strong>Descripcion: </strong>{{$products->descripcion}}</p>
   <p><strong>Categoria: </strong>{{$products->categoria}}</p>
   {{-- <img src="{{ asset('images/' .$products->imagen) }}"> --}}
   <form action="{{ route('products.delete', $products->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Borrar">
    </form><br>
    <form action="{{ route('products.edit', $products->id) }}" method="GET ">
        @csrf
        @method('PUT')
        <button type="submit">Editar</button>
    </form>
   

@endsection