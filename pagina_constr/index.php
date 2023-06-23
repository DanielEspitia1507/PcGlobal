<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="src/img/tool.ico">
    <link rel="stylesheet" href="src/input.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://cdn.tailwindcss.com"></script> 
    <link rel="stylesheet" href="../css/style-3-2-1-1.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <title>Página en Construcción</title>
</head>
<body>
        <div class="home-wrapper" >
            <header>
                <div>
                <nav class="container-fluid navbar navbar-expand-sm justify-content-between">
                    <ul class="navbar-nav">
                        <a href="../#home" class="fw-bold">HOME</a>
                        <a href="../#servicios" class="fw-bold">SERVICIOS</a>
                        <a href="../#portafolio" class="fw-bold">TIENDA</a>
                        <a href="../#contacto" class= "fw-bold">COMENTARIOS</a>
                    </ul>
                <div class="dropdown justify-content-between">
                    <button class="border-0 bg-transparent"><a href="../#home"><i class="bi bi-house fs-4 text-white ms-auto"></i></a></button>
                    <button class="border-0 bg-transparent" data-bs-toggle="dropdown"><i class="bi bi-list fs-2 text-white"></i></button>
                    <ol class="dropdown-menu">
                        <li class="dropdown-header">Menú</li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item"><a class="dropdown-item" href="../#servicios" class="fw-bold">SERVICIOS</a></li>
                        <li class="dropdown-item"><a class="dropdown-item" href="../#portafolio" class="fw-bold">TIENDA</a></li>
                        <li class="dropdown-item"><a class="dropdown-item" href="../#contacto" class="fw-bold">COMENTARIOS</a>
                    </ol>
                </div>
                    <div class="social me-3">
                        <a class="mx-auto" target="_blank" href="https://www.facebook.com/profile.php?  id=100087015408684"><i class="bi bi-facebook"></i></i></a>
                        <a class="mx-auto" target="_blank" href="https://www.twitter.com"> <i class="bi     bi-twitter"></i></a>
                        <a class="mx-auto" target="_blank" href="https://www.instagram.com/pcglobal9/"><i  class="bi bi-instagram"></i></a>
                        <div class="dropdown dpdn-2">
                            <a role="button" class="bg-transparent border-0 fs-5 border-white border-start border-1 ms-4 text-white" data-bs-toggle="dropdown" href="#"><i class="mx-4 bi bi-person-circle"></i></a>
                            <ol class="dropdown-menu dropdown-menu-end mx-2">
                                <li class="dropdown-header">Login & Register</li>
                                <li class="dropdown-divider"></li>
                                <li class="dropdown-item"><a class="dropdown-item" href="../Login-register/index.php" class="fw-bold">Iniciar Sesión</a></li>
                                <li class="dropdown-item"><a class="dropdown-item" href="#" class="fw-bold">Crear Cuenta</a></li>
                            </ol>
                        </div>
                    </div>
                </nav>
            </header>
        </div>
        
    <div class="min-height-full flex">
        <div class="hidden lg:block relative h-full flex-1">
            <img src="src/img/brand.jpeg" class="height" alt="">
        </div>
        <div class="flex flex-1 flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
            <div class="mx-auto w-full max-w-sm lg:max-w-lg lg:w-[100rem]">
                <div class="text-center lg:text-left">
                    <img src="src/img/logoa-nobg.png" class="h-30 w-auto m-auto lg:m-0" alt="">
                    <h2 class="mt-32 sm:mt-6 text-2xl sm:text-3xl font-extrabold text-gray-900">¡Oops! Sentimos esto. :(</i></h2>
                </div>
                <div class="mt-6">
                    <form action="" class="space-y-1">
                        <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-3">
                            <div class="col-span-2 text-md sm:text-lg">
                                La página está en proceso de construcción, pero muy pronto estará lista.
                            </div>
                            <div class="text-center col-span-2 font-bold text-md mt-6">
                                <p>¡Vuelve Pronto! </p>
                            </div>
                        </div>
                        <div class="flex">
                            <a href="../index.php" class="text-center mt-8 w-full py-3 bg-indigo-600 text-white font-medium hover:bg-indigo-700 hover:shadow-md hover:text-slate-100"><i class="bi bi-arrow-left"></i> Volver al Inicio</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>