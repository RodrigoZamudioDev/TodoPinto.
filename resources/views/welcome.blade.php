@extends('layouts.app')

@section('content')
<div id="carouselExample" class="carousel slide">
    <div class="carousel-inner" style="width: 1800; height: 700px;">
      <div class="carousel-item active">
        <img src="{{asset('images/carousel/Ferreteria.jpg')}}" class="d-block w-100 h-50"  style="object-fit: cover;" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('images/carousel/Limpieza.png')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('images/carousel/Pintura.jpg')}}" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
@endsection