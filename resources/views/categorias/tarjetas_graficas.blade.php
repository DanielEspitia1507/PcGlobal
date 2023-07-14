{{-- Declaracion e importacion componente principal --}}
@extends('layouts.landing_page')

{{-- Declaracion complemtento etiqueta litle del Header --}}
@section('title','Tarjetas Gráficas')

{{-- Declaracion contenido principal de la pagina web --}}
@section('content')

  {{-- Declaracion y envio de clases personalidas a la etiqueta body presente en el componente principal--}}
  @section('body_class','flex flex-col min-h-screen bg-gray-100')

  {{-- Envio de clases personalizadas a la etiqueta main, la cual se encuentra en el componente principal--}}
  @section('main_class','container my-10 text-justify mx-auto flex-grow mx-2')

  @forelse ($productos as $item)
      <ul>
        <li>{{$item->modelo}}</li>
      </ul>
  @empty
    <div class="flex flex-col w-full sm:w-1/2 mx-auto">
        <p class="bg-red-600 text-center py-2 text-white font-semibold rounded">No hay productos</p>
    </div>
  @endforelse
  
@endsection