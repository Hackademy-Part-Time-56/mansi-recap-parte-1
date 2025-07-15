<x-layout>
    <div class="container mt-5">
        <div class="row align-items-md-stretch">

            <x-jumbotron>
                <div class="h-100 p-5 text-bg-dark rounded-3">
                    <h2>Accedi alla risorsa Prodotti</h2>
                    <p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look.
                        Then, mix and match with additional component themes and more.</p>
                    <a href="{{ route('products.index') }}" class="btn btn-info">Vai al Dettaglio</a>
                </div>
            </x-jumbotron>
            <x-jumbotron>
                <div class="h-100 p-5 text-bg-dark rounded-3">
                    <h2>Accedi alla risorsa Categorie</h2>
                    <p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look.
                        Then, mix and match with additional component themes and more.</p>
                    <a class="btn btn-info">Vai al Dettaglio</a>
                </div>
            </x-jumbotron>

        </div>
    </div>

</x-layout>
