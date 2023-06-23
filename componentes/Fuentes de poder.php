<?php include("php/db.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../../css/style-3-2-1-1.css">
    <link rel="stylesheet" href="../../../css/normalize.css">
    <link rel="stylesheet" href="css/componentes2.css">
    <script src="js/app.js"></script>
    <script src="//code.tidio.co/anucvq6wj7i4y0rb51rykuwdkco1lbde.js" async></script>
    <script src="js/formulario.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="website icon" href="../logo-img/logo-panther.png">
    <title>Fuentes de Poder</title>
    
</head>
<body>
    <div class="home-wrapper" >
        <header>
                <nav class="container-fluid navbar navbar-expand-sm justify-content-between">
                    <ul class="navbar-nav">
                        <a href="../#home" class="fw-bold">HOME</a>
                        <a href="../#servicios" class="fw-bold">SERVICIOS</a>
                        <a href="../#portafolio" class="fw-bold">TIENDA</a>
                        <a href="../#contacto" class= "fw-bold">COMENTARIOS</a>                        
                    </ul>
                <div class="dropdown justify-content-between">
                    <button class="border-0 bg-transparent"><a href="../../../#home"><i class="bi bi-house fs-4 text-white ms-auto"></i></a></button>
                    <button class="border-0 bg-transparent" data-bs-toggle="dropdown"><i class="bi bi-list fs-2 text-white"></i></button>
                    <ol class="dropdown-menu">
                        <li class="dropdown-header">Menú</li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item"><a class="dropdown-item" href="../../../#servicios" class="fw-bold">SERVICIOS</a></li>
                        <li class="dropdown-item"><a class="dropdown-item" href="../../../#portafolio" class="fw-bold">TIENDA</a></li>
                        <li class="dropdown-item"><a class="dropdown-item" href="../../../#contacto" class="fw-bold">COMENTARIOS</a></li>
                    </ol>
                </div>
                    <div class="social me-3">
                        <a class="mx-auto" target="_blank" href="https://www.facebook.com/profile.php?  id=100087015408684"> <i class="bi bi-facebook"></i></i> </a>
                        <a class="mx-auto" target="_blank" href="https://www.twitter.com"> <i class="bi     bi-twitter"></i> </a>
                        <a class="mx-auto" target="_blank" href="https://www.instagram.com/pcglobal9/"> <i  class="bi bi-instagram"></i></a>
                        <div class="dropdown dpdn-2">
                            <a role="button" class="bg-transparent border-0 fs-5 border-white border-start border-1 ms-4 text-white" data-bs-toggle="dropdown" href="#"><i class="mx-4 bi bi-person-circle"></i></a>
                            <ol class="dropdown-menu dropdown-menu-end mx-2">
                                <li class="dropdown-header">Login & Register</li>
                                <li class="dropdown-divider"></li>
                                <li class="dropdown-item"><a class="dropdown-item" href="Login-register/index.php" class="fw-bold">Iniciar Sesión</a></li>
                                <li class="dropdown-item"><a class="dropdown-item" href="../pagina_constr/index.php" class="fw-bold">Crear Cuenta</a></li>
                            </ol>
                        </div>
                    </div>
                </nav>
        </header>
    </div>
    <?php
    $query = "SELECT COUNT(*) total FROM articulos WHERE idCategoria = 9";
    $result = mysqli_query($conn, $query); 
    $row = mysqli_fetch_assoc($result); 
    ?>
        <div class="flex mt-5 mb-4 justify-center font-bold text-lg sm:font-normal sm:text-3xl">
        <h1>Tarjetas Gráficas - <?php echo $row['total']?> Resultados <i class="ms-1 bi bi-search text-sm sm:text-xl"></i></h1>
        </div> 
    <div class="my-4 grid grid-cols-1 sm:grid-cols-3  xl:grid-cols-5 text-center mx-16 gap-3">
        <?php
            $query = "CALL PA_consulta_articulos_9();";
            $result = mysqli_query($conn, $query); 

            while ($row = mysqli_fetch_array($result)) { ?>
            <div class="card">
                <img src="<?php echo $row['Imagen']?>" class="card-img-top mt-3" alt="">
                <div class="card-body">
                    <p class="card-title text-lg font-medium border-t-2 border-slate-800 mb-2"><?php echo $row['Nombre']?> </p>
                    <p class="card-text font-normal mb-3">$<?php echo $row['Precio']?> COP</p>
                    <a href="fdp.php?id=<?php echo $row['id']?>" class="px-4 text-white rounded-md font-medium">Ver Especifíc.</a>
                </div>
            </div>
        <?php }?>
    </div>
    <footer>
        @ 2022<strong> PC Globlal</strong>Todos los Derechos Reservados
    </footer>
</body>
</html>