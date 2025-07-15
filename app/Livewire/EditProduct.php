<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Attributes\Validate;
use Livewire\Component;

class EditProduct extends Component
{
    #[Validate]
    public $title;
    #[Validate]
    public $description;
    #[Validate]
    public $quantity;
    public $image;

    public Product $product;

    public function mount()
    {
        $this->title = $this->product->title;
        $this->description = $this->product->description;
        $this->quantity = $this->product->quantity;
    }

    protected function rules()
    {
        return [
            'title' => ['required', 'min:5'],
            'quantity' => ['required', 'integer'],
            'description' => ['required', 'min:10'],
        ];
    }


    public function store()
    {
        $this->validate();
        $this->product->update([
            'title' => $this->title,
            'description' => $this->description,
            'quantity' => $this->quantity,
        ]);

        session()->flash('success', 'Prodotto modificato con successo.');
    }
    public function render()
    {
        return view('livewire.edit-product');
    }
}
