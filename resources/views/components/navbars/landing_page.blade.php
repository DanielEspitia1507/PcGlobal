<!-- Barra de Navegación -->
<header class="h-24 bg-indigo-600">
    <nav class="relative mx-16 list-none grid grid-cols-3 font-medium bg-transparent justify-around sm:justify-center text-md text-white h-full items-center text-sm gap-x-6 gap-y-3">
      <!-- Formulario de búsqueda -->
      <div class="col-span-3 w-full sm:w-1/2 mx-auto justify-center">
        <form action="#" class="flex nav-search">
          <input type="text" class="w-full rounded-l-lg px-3 py-2 focus:ring-2 focus:ring-sky-500 text-gray-800" placeholder="¿Qué estás buscando?">
          <button class="bg-white py-2 px-4 rounded-r-lg focus:outline-none focus:ring-2 focus:ring-sky-500">
            <i class="fa-sharp fa-solid fa-magnifying-glass text-gray-700 text-lg"></i>
          </button>
        </form>
        </div>
        <!-- Logo -->
      <div class="nav-logo-pag justify-center mx-auto sm:pe-20 col-span-3 sm:col-auto flex gap-4">
        <a href="{{route('index')}}" class="text-white hover:text-gray-400">
            <p>Logo</p>
        </a>
        <a href="#" class="text-white hover:text-gray-400 flex items-center sm:hidden">
            <i class="fa-solid fa-bars"></i>
        </a>
      </div>        
      <!-- Enlaces de productos -->
      <div class="nav-productos justify-evenly hidden sm:flex">
          <p><a class="hover:text-gray-200" href="{{url('../#categorias')}}">Categorías</a></p>
          <p><a class="hover:text-gray-200" href="#">PQRS</a></p>
      </div>      
      <!-- Enlaces de login y carrito -->
      <div class="nav-login justify-evenly hidden sm:flex">
        <a href="#" class="hover:text-gray-200 -me-12"><i class="fa-regular fa-user"></i></a>
        <div class="border"></div>
        <p><a href="" class="hover:text-gray-200 -ms-12"><i class="fa-solid fa-cart-shopping"></i></a></p>
      </div>
    </nav>
  </header>  