<section class="my-16 mx-auto" id="productos">
    <h1 class="text-center mb-10 text-2xl font-medium">Productos</h1>
    <div class="grid grid-cols-1 sm:grid-cols-4 gap-3">
      @forelse ($lista as $item)
      {{-- Listación de productos --}}
          <div class="card">
              <h2 class="text-center mt-6 sm:mt-1">{{$item->Marca}}</h2>
              <img class="object-contain" src="{{$item->Imágen}}" alt="">
              <div class="card-body">
                <h5 class="card-title text-center font-bold">{{$item->Nombre}}</h5>
                <p class="text-center text-sm">${{$item->Precio}} COP</p>
                <a href="#" class="btn bg-indigo-600 hover:bg-indigo-700 font-medium text-white flex justify-center mt-4">Detalles</a>
              </div>
            </div>
      @empty
      {{-- Mensaje en caso que esté vacío --}}
          <div class="flex justify-center mt-10 col-span-4">
            <p class="bg-red-500 mx-auto px-9 py-2 text-white font-medium rounded hover:bg-red-600 cursor-pointer">No hay productos :(</p>
          </div>    
      @endforelse
    </div>
    <div class="pagination flex justify-between mt-3 items-center">
      @if ($lista->currentPage() > 1)
        <button class="bg-indigo-600 px-4 py-1 text-white hover:text-gray-300 rounded">
          <a href="{{ $lista->previousPageUrl() }}" class="hover:text-gray-300 pagination-link text-xl font-bold"><i class="fa-solid fa-arrow-left"></i></a>
        </button>
      @endif
      <div class="px-3 py-2 flex gap-1">Número total de páginas:<span class="badge bg-danger flex items-center">{{ $numeroPaginas }}</span></div>
      @if ($lista->hasMorePages())
          <button class="bg-indigo-600 px-4 py-1 text-white hover:text-gray-300 rounded">
            <a href="{{ $lista->nextPageUrl() }}" class="hover:text-gray-300 pagination-link text-xl font-bold"><i class="fa-solid fa-arrow-right"></i></a>
          </button>
      @endif
    </div>
  </section>