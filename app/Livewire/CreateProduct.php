<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateProduct extends Component
{
    #[Validate]
    public $title;
    #[Validate]
    public $description;
    #[Validate]
    public $quantity;
    public $image;

    public function render()
    {
        return view('livewire.create-product');
    }
    protected function rules()
    {
        return [
            'title' => ['required', 'min:5'],
            'quantity' => ['required', 'integer'],
            'description' => ['required', 'min:10'],
        ];
    }
    public function save()
    {
        $this->validate();
        Product::create([
            'title' => $this->title,
            'description' => $this->description,
            'quantity' => $this->quantity,
            'user_id' => auth()->user()->id,
        ]);

        $this->reset();

        session()->flash('success', 'Prodotto creato con successo.');
    }
}
