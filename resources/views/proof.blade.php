<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.4.0-web/css/all.min.css')}}">
    <title>Proof</title>
</head>
<body class="flex flex-col min-h-screen bg-white dark:bg-slate-900">
    <header class="h-16 shadow-lg dark:shadow-cyan-500/25">
        <nav class="mx-auto sm:mx-10 p-2 list-none flex gap-5 items-center h-full dark:text-white font-medium bg-transparent justify-around sm:justify-between">
            <li><a class="hover:text-gray-700 dark:hover:text-gray-500" href="{{route('index')}}"><i class="fa-solid fa-house"></i></a></li>
            <li><a class="hover:text-gray-700 dark:hover:text-gray-500" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley" target="_blank"><i class="fa fa-regular fa-heart"></i></a></li>    
        </nav>
    </header>
    <main class="container my-10 text-justify dark:text-gray-200 mx-auto flex-grow">
        <p class="mx-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, laborum!</p>
    </main>
    <footer class="dark:text-white font-thin border-double border-t-4 border-black dark:border-cyan-500/25 mx-12 p-3">
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