@extends('layouts.app')


@section('content')

<form action="{{route('products.update', $product->id)}} " method="POST"  enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <label>
        Nombre:
        <br>
        <input type="text" name="name" value="{{$product->name}}" >
    </label><br>
    <label>
        Descripcion:
        <br>
        <textarea name="descripcion" cols="30" rows="5">{{$product->descripcion}}</textarea>
    </label><br>
    <label>
        Categoria:
        <br> 
        <input type="text" name="categoria" value="{{$product->categoria}}">
    </label><br><br>
    <input type="file" name="imagen"><br><br>
    <button type="submit">Agregar producto </button>
</form>
@endsection