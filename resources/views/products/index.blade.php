@extends('layouts.app')


@section('content')
    <h1>Bienvenido a la pagina de productos</h1>
    <a href="{{route('products.create')}}">Crear producto</a>
    
    <ul>
        @foreach ($products as $product)

            <li>
                <a href="{{route('products.show', $product->id)}}">{{$product->name}}</a>
            </li> 
            <li>{{$product->descripcion}}</li>
            <li>{{$product->categoria}}</li>
            {{-- <img src="{{ asset('images/' .$product->imagen) }}"> --}}
        @endforeach
    </ul>
     <br><br>
    {{$products -> links()}} 
  
    
@endsection