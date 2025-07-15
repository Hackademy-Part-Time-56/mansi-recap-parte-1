 <div class="container mt-5">
     <div class="align-middle gap-2 d-flex justify-content-between">
         <h3>Elenco Prodotti inseriti</h3>
         <form class="d-flex" role="search" action="#" method="POST">

             <input wire:model.live="search" class="form-control me-2" name="search" type="search"
                 placeholder="Cerca Articolo" aria-label="Search">
         </form>
         <a href="{{ route('products.create') }}" class="btn btn btn-success me-md-2">
             Crea Nuovo Prodotto
         </a>
     </div>
     <table class="table border mt-2">
         <thead>
             <tr>
                 <th scope="col">#</th>
                 <th scope="col">Immagine</th>
                 <th scope="col">Titolo</th>
                 <th scope="col">Quantità</th>
                 <th scope="col">Autore</th>
                 <th scope="col">Categorie</th>
                 <th scope="col"></th>
             </tr>
         </thead>
         <tbody>
             @foreach ($products as $product)
                 <tr>
                     <th scope="row">#{{ $product->id }}</th>
                     <td>
                         <img class="card-img-top" style="width:3rem" src="{{ $product->image }}" alt="..." />
                     </td>
                     <td>{{ $product->title }}</td>
                     <td>{{ $product->quantity }}</td>
                     <td>{{ $product->user->name ?? 'Senza Autore' }}</td>
                     <td>
                         @foreach ($product->categories as $category)
                             {{ $category->name }} @if (!$loop->last)
                                 ,
                             @endif
                         @endforeach
                     </td>
                     <td>

                         <div class="d-grid gap-2 d-md-flex justify-content-md-end">

                             <a href="{{ route('products.show', ['product' => $product]) }}"
                                 class="btn btn-primary me-md-2">
                                 Visualizza
                             </a>
                             <a href="{{ route('products.edit', ['product' => $product]) }}"
                                 class="btn btn-warning me-md-2">
                                 Modifica
                             </a>
                             <form action="{{ route('products.destroy', ['product' => $product]) }}" method="post">
                                 @csrf
                                 <button type="submit" class="btn btn-danger me-md-2">Elimina</button>
                             </form>
                         </div>
                     </td>
                 </tr>
             @endforeach

         </tbody>
     </table>
 </div>
