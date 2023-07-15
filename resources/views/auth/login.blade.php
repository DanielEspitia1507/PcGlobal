{{-- Declaracion e importacion componente principal --}}
@extends('layouts.auth')

{{-- Declaracion complemtento etiqueta litle del Header --}}
@section('title','Login')

{{-- Declaracion contenido principal de la pagina web --}}
@section('content')

  <form action="{{route("login")}}" method="post">

    @csrf

    <div class="mb-3">
      <label for="email" class="form-label">Correo Electronico:</label>
      <input type="email" class="form-control" name="email" id="email" required>
    </div>

    <div class="mb-3">
      <label for="password" class="form-label">Contraseña:</label>
      <input type="password" class="form-control" name="password" id="password" required>
    </div>

    <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
  </form>

@endsection