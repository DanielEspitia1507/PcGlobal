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
        <p class="mx-10">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt debitis, illum consequuntur maiores voluptate repudiandae rerum dolorum nisi quam quibusdam facere. Enim, pariatur eaque error molestiae temporibus odio suscipit inventore perspiciatis ratione sed placeat rem nobis, facilis cumque doloremque voluptatem autem molestias accusantium. Dicta temporibus non amet! Esse laudantium atque excepturi ipsa reprehenderit nihil quam dolor modi quaerat porro. Porro facilis accusamus tempora ab dolore itaque laboriosam sint, possimus libero aspernatur asperiores expedita fugit ratione tenetur id velit, eaque voluptas. Beatae laborum eligendi vitae harum ipsam architecto atque quae voluptates. Nisi iusto nulla rem at enim sequi maxime eaque magni eum, quaerat, repudiandae nesciunt qui accusantium, error atque. Recusandae non doloremque itaque ipsa labore asperiores autem? Aspernatur sequi officia, vero ipsam sunt praesentium blanditiis veniam quas eligendi fuga? Exercitationem autem ea dolorem pariatur hic vero repudiandae ipsam quae eveniet dignissimos qui libero et cumque, numquam at molestias, dolore delectus doloribus necessitatibus! Hic officia esse fuga consequatur laudantium enim explicabo eveniet vero incidunt, maiores excepturi nisi quos, blanditiis dolorum inventore deleniti nesciunt saepe sed! Doloribus perspiciatis nemo corporis rerum repellendus neque ipsum provident, voluptate ullam, tempora qui quam nihil natus veniam! Voluptatibus, commodi qui. Incidunt eius vitae aliquid possimus quasi in?</p>
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