<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('img/hamburger.ico')}}">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.4.0-web/css/all.min.css')}}">
    <title>Restaurant</title>
</head>
<body class="flex flex-col min-h-screen bg-white dark:bg-slate-900">
    <header class="h-16 shadow-lg dark:shadow-cyan-500/25">
        <nav class="mx-auto sm:mx-12 2xl:mx-64 p-2 list-none flex gap-5 items-center h-full dark:text-white font-medium bg-transparent justify-around sm:justify-between text-md 2xl:text-xl">
            <li><a class="hover:text-gray-700 dark:hover:text-gray-500" href="{{route('index')}}"><i class="fa-solid fa-house"></i></a></li>
            <li><a class="hover:text-gray-700 dark:hover:text-gray-500" href="#"><i class="fa fa-regular fa-heart"></i></a></li>    
        </nav>
    </header>
    <main class="container my-10 text-justify dark:text-gray-200 mx-auto flex-grow">
        <p class="mx-10 text-md 2xl:text-2xl">¿Listo para una experiencia culinaria llena de sabor y rapidez? En nuestro paraíso de comidas rápidas, te deleitarás con hamburguesas jugosas, crujientes papas fritas doradas y una amplia selección de tentadoras opciones. Nuestros ingredientes frescos y de calidad se combinan para crear obras maestras gastronómicas que deleitarán tu paladar. Desde clásicos atemporales hasta creaciones innovadoras, nuestra variedad de opciones te garantiza una experiencia única en cada visita. Además, nuestro amable personal te atenderá con una sonrisa, brindándote un servicio rápido y eficiente. Ven y descubre por qué somos el destino favorito de los amantes de la comida rápida. ¡¡No te arrepentirás!!</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-5 mx-10">
            <div>                
                <img class="my-5 blur-none sm:blur-none sm:hover:blur-sm sm:hover:-rotate-3 transition-all duration-500 rounded-md hover:drop-shadow-md dark:hover:shadow-none cursor-pointer" width="450px" src="{{asset('img/hamburguesa.jpg')}}" alt="">
                <p class="text-center font-medium 2xl:text-lg">Hamburguesa</p>
            </div>
            <div>            
                <img class="my-5 blur-none sm:blur-none sm:hover:blur-sm sm:hover:-rotate-3 transition-all duration-500 rounded-md hover:drop-shadow-md dark:hover:shadow-none cursor-pointer" width="450px" src="{{asset('img/hot-dog.jpg')}}" alt="">
                <p class="text-center font-medium 2xl:text-lg">Hot-Dog</p>
            </div>
            <div>            
                <img class="my-5 blur-none sm:blur-none sm:hover:blur-sm sm:hover:-rotate-3 transition-all duration-500 rounded-md hover:drop-shadow-md dark:hover:shadow-none cursor-pointer" width="450px" src="{{asset('img/pizza.png')}}" alt="">
                <p class="text-center font-medium 2xl:text-lg">Pizza</p>
            </div>
            <div>            
                <img class="my-5 blur-none sm:blur-none sm:hover:blur-sm sm:hover:-rotate-3 transition-all duration-500 rounded-md hover:drop-shadow-md dark:hover:shadow-none cursor-pointer" width="450px" src="{{asset('img/batidoChocolate.jpg')}}" alt="">
                <p class="text-center font-medium 2xl:text-lg">Batido de Chocolate</p>
            </div>
            <div>            
                <img class="my-5 blur-none sm:blur-none sm:hover:blur-sm sm:hover:-rotate-3 transition-all duration-500 rounded-md hover:drop-shadow-md dark:hover:shadow-none cursor-pointer" width="450px" src="{{asset('img/rollitos.jpg')}}" alt="">
                <p class="text-center font-medium 2xl:text-lg">Rollitos de Jamón y Queso</p>
            </div>
            <div>            
                <img class="my-5 blur-none sm:blur-none sm:hover:blur-sm sm:hover:-rotate-3 transition-all duration-500 rounded-md hover:drop-shadow-md dark:hover:shadow-none cursor-pointer" width="450px" src="{{asset('img/sandwichQuesoParrilla.jpg')}}" alt="">
                <p class="text-center font-medium 2xl:text-lg">Sándwich de queso a la parrilla</p>
            </div>
            <div>            
                <img class="my-5 blur-none sm:blur-none sm:hover:blur-sm sm:hover:-rotate-3 transition-all duration-500 rounded-md hover:drop-shadow-md dark:hover:shadow-none cursor-pointer" width="450px" src="{{asset('img/palitosQueso.jpg')}}" alt="">
                <p class="text-center font-medium 2xl:text-lg">Pallitos de Queso</p>
            </div>
        </div>
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