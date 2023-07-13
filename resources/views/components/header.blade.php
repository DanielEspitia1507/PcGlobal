<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Codificacion de los caracteres-->
    <meta charset="UTF-8">

    <!-- -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Importacion  Framewors: Bootstrap, Trailwind (Estilos Y componentes CSS + Responsividad)-->
    @vite(['resources/css/boostrap.css','resources/js/boostrap.js',])
    @vite('resources/css/app.css')

    <!-- Importacion Manual del Framework Fontwesome (Iconos) -->
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.4.0-web/css/all.min.css')}}">

    <!-- Titulo Principal Pagina web (Nombre empresa + Titulo Personalizado)-->
    <title>PcGlobal | @yield('title','pepe')</title>
</head>