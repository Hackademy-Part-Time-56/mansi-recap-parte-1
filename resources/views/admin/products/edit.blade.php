<x-layout>
    <div class="px-4 px-md-5 mb-5">
        <div class="row gx-5 justify-content-center ">
            <div class="col-lg-8 col-xl-6 border p-5 rounded">

                @livewire('edit-product', ['product' => $product])

            </div>
        </div>
    </div>
</x-layout>
