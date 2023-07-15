{{-- Declaracion e importacion componente principal --}}
@extends('layouts.auth')

{{-- Declaracion complemtento etiqueta litle del Header --}}
@section('title','Login')

{{-- Declaracion contenido principal de la pagina web --}}
@section('content')

  <form action="{{route("clientRegister")}}" method="post">
    {{--Tokem de Seguridad--}}
    @csrf

    <div class="mb-3">
      <label for="nombres" class="form-label">Nombres:</label>
      <input type="text" class="form-control" name="nombres" id="nombres" required max='30'>
    </div>

    <div class="mb-3">
        <label for="apellidos" class="form-label">Apellidos:</label>
        <input type="text" class="form-control" name="apellidos" id="apellidos" required max='30'>
      </div>

    <div class="mb-3">
      <label for="password" class="form-label">Contraseña:</label>
      <input type="password" class="form-control" name="password" id="password" required>
    </div>

    <button type="submit" class="btn btn-primary">Iniciar Sesion</button>

    <a href="{{route('login')}}">¿Ya tienes cuenta?, Inicia Sesion</a>
  </form>

@endsection