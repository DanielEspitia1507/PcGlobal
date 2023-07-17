<!-- Barra de Navegación -->
<header class="h-24 bg-indigo-600">
  <nav class="mx-4 sm:mx-12 flex font-medium text-white h-full items-center text-sm gap-x-6 gap-y-3">
    <div class="nav-1 flex flex-col sm:flex-row items-center justify-between w-full h-full">
      <!-- Logo #1 (Para pantallas más grandes que las de celular) -->
      <div class="nav-logo-pag pe-10 py-2 hidden sm:flex">
        <a href="{{route('index')}}" class="text-white hover:text-gray-400">
          <p>Logo</p>
        </a>
      </div>
      <!-- Formulario de búsqueda -->
      <div class="flex flex-grow px-2 sm:px-4 justify-center">
        <form action="#" class="flex nav-search">
          <input type="text" class="w-full sm:w-96 rounded-l-lg px-3 py-2 focus:ring-2 focus:ring-sky-500 text-gray-800" placeholder="¿Qué estás buscando?">
          <button class="w-16 bg-white py-2 px-4 rounded-r-lg focus:outline-none focus:ring-2 focus:ring-sky-500">
            <i class="fa-sharp fa-solid fa-magnifying-glass text-gray-700 text-lg"></i>
          </button>
        </form>
      </div>
      <div class="nav-right flex gap-12">
        <!-- Enlaces de productos -->
        <div class="nav-productos justify-evenly hidden sm:flex gap-4 ps-3">
          <p><a class="hover:text-gray-200" href="{{url('../#categorias')}}">Categorías</a></p>
          <p><a class="hover:text-gray-200" href="#">PQRS</a></p>
        </div>
        <!-- Enlaces de login y carrito -->
        <div class="nav-login hidden sm:flex gap-4">
          <a href="{{route("login")}}" class="hover:text-gray-200">
            <i class="fa-regular fa-user"></i>
          </a>
          <div class="border"></div>
          <p><a href="" class="hover:text-gray-200"><i class="fa-solid fa-cart-shopping"></i></a></p>
        </div>
        <!-- Logo #2 (Este es para el responsive) -->
        <div class="nav-logo-pag py-2 flex sm:hidden gap-3 justify-between">
          <a href="{{route('index')}}" class="text-white hover:text-gray-400">
            <p>Logo</p>
          </a>
          {{-- Ícono del menú --}}
          <p><i class="fa-solid fa-bars"></i></p>
        </div>
      </div>
    </div>
  </nav>
</header>