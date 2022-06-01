<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function browse() 
    {
        return view('browse',[
            'products' => Product::all()
        ]);
    }

    public function index(Product $product)
    {
        return view('product',[
            'product' => $product,
        ]);
    }
}
