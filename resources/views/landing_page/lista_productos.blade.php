<section class="my-10 mx-auto">
    <h1 class="text-center mb-10 text-2xl font-medium">Productos</h1>
    <div class="grid grid-cols-4 gap-3">
      @forelse ($lista as $item)
          <div class="card">
              <h2 class="text-center mt-1">{{$item->Marca}}</h2>
              <img class="object-contain" src="{{$item->Imágen}}" alt="">
              <div class="card-body">
                <h5 class="card-title text-center font-bold">{{$item->Nombre}}</h5>
                <p class="text-center text-sm">${{$item->Precio}} COP</p>
                <a href="#" class="btn btn-danger flex justify-center mt-4">Detalles</a>
              </div>
            </div>
      @empty
          <div class="flex justify-center mt-10 col-span-4">
            <p class="bg-red-500 mx-auto px-9 py-2 text-white font-medium rounded hover:bg-red-600 cursor-pointer">No hay productos :(</p>
          </div>    
      @endforelse
    </div>
  </section>