{{-- Declaracion e importacion componente principal --}}
@extends('layouts.landing_page')

{{-- Declaracion complemtento etiqueta litle del Header --}}
@section('title','Home')

{{-- Declaracion contenido principal de la pagina web --}}
@section('content')

  {{-- Declaracion y envio de clases personalidas a la etiqueta body presente en el componente principal--}}
  @section('body_class','flex flex-col min-h-screen')

  {{-- Envio de clases personalizadas a la etiqueta main, la cual se encuentra en el componente principal--}}
  @section('main_class','container my-10 text-justify mx-auto flex-grow')

  <div class="hidden sm:grid grid-cols-1 sm:grid-cols-3 mx-2 gap-y-2 sm:gap-1 imgs-landing">
  
    <div class="sm:col-span-2">
      <div id="carouselExampleAutoplaying" class="carousel slide flex" data-bs-ride="carousel">

        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>

          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>

          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('img/landing/f-1.jpg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('img/landing/f-2.jpg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('img/landing/f-4.jpg')}}" class="d-block w-100" alt="...">
          </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>

      </div>
    </div>

    <div class="flex flex-col justify-center gap-y-1">
      <img src="{{ asset('img/landing/f-5.jpg')}}" alt="" class="rounded object-contain shadow drop-shadow-lg">
      <img src="{{ asset('img/landing/f-3.jpg')}}" alt="" class="rounded object-contain">
    </div>
  </div>
  
@endsection