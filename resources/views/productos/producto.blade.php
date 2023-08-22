{{-- Declaracion e importacion componente principal --}}
@extends('layouts.productos')

{{-- Declaracion complemtento etiqueta title del Header, la variable $categoria se pasa mediante el controlador y se detecta con el switch --}}
@section('title', "$producto->modelo - $categoria->nombre_categoria")


{{-- Declaracion contenido principal de la pagina web --}}
@section('content')
  {{-- Declaracion y envio de clases personalidas a la etiqueta body presente en el componente principal--}}
  @section('body_class','flex flex-col min-h-screen bg-gray-100')
  {{-- Envio de clases personalizadas a la etiqueta main, la cual se encuentra en el componente principal--}}
  @section('main_class','container mt-3 mb-10 text-justify mx-auto flex-grow mx-2')

  <div class="contenedor mx-8 my-3 text-sm hover:underline">
    <a href="{{route('index')}}" class="hover:text-blue-600 hover:underline inline-flex items-center gap-1">
        <i class="fa-solid fa-share fa-flip-horizontal"></i> <p>Volver</p>
    </a>
  </div>
  <div class="contenedor grid grid-cols-1 md:grid-cols-3 my-6 gap-4 py-3 bg-white px-3 mx-8 rounded-lg"> 
      <div class="flex flex-col text-center font-medium col-span-2">
          <img class="w-full sm:w-2/4 md:w-3/4 mx-auto sm:mx-20" src="{{asset('storage/' . $producto->imagen)}}" alt="">
          {{-- La segunda descripción es opcional, la primera no --}}
          @if ($producto->descripcion_2)
            @if (file_exists(public_path('storage/' . $producto->descripcion_2)))
            <div class="prose prose-lg mx-auto hidden sm:flex sm:flex-col gap-4 hover:prose-h4:underline">
              {!! Parsedown::instance()->text(file_get_contents(asset('storage/' . $producto->descripcion_2))) !!}
            </div>
            @else
            <div class="hidden sm:flex mx-auto">{{$producto->descripcion_2}}</div>
            @endif
          @endif
      </div>
      <aside class="flex flex-col p-2 sm:p-3 desc-producto gap-y-2 text-start">
        <p class="text-gray-400 text-xs">Descripción del producto</p>
        <ul class="flex flex-col gap-y-2 sm:gap-y-4">
            <li class="text-xl sm:text-2xl hover:underline"><p class="font-bold">{{$producto->modelo}}</p></li>
            <li class="text-lg sm:text-xl">$ {{number_format($producto->precio, 0, '.', '.')}}</li>
        </ul>
        @if (file_exists(public_path('storage/' . $producto->descripcion_1)))
        <div class="especificaciones prose prose-sm my-2 hover:prose-h3:underline">
            {!! Parsedown::instance()->text(file_get_contents(asset('storage/' . $producto->descripcion_1))) !!}
        </div>            
        @else
          <div>{{$producto->descripcion_1}}</div>
        @endif
      </aside>
  </div>

@endsection