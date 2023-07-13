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

  {{-- Inclusión de la lista del carrusel --}}
  @include('landing_page.carrusel')

  {{-- Inclusión de la lista de los productos --}}
  @include('landing_page.lista_productos')
  
@endsection