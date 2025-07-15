<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class TableProduct extends Component
{
    public $search = '';
    public function render()
    {
        if ($this->search) {
            $products = Product::where('title', 'LIKE', '%' . $this->search . '%')->get();
        } else {
            $products = Product::all();
        }
        return view('livewire.table-product', ['products' => $products]);
    }
}
