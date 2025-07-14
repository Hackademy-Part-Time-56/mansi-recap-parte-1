<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage()
    {
        $cards =  Product::all();
        return view('pages.homepage', compact('cards'));
    }

    public function product(Product $product)
    {
        return view('pages.product', compact('product'));
    }
}
