<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.4.0-web/css/all.min.css')}}">
    <title>PcGlobal</title>
</head>
<body class="flex flex-col min-h-screen">
    @include('navbar')
    <main class="container my-10 text-justify mx-auto flex-grow">
    </main>
    <footer class="font-thin border-double border-t-4 border-black mx-12 p-3">
        <div class="flex justify-center gap-x-3 p-3 text-lg drop-shadow-xl icons">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-tiktok"></i>
        </div>
        <div class="px-3 mb-7 sm:mb-3 text-center text-sm drop-shadow-md texto">
            <p>&copy; Derechos reservados - PcGlobal - 2023</p>
        </div>
    </footer>
</body>
</html>