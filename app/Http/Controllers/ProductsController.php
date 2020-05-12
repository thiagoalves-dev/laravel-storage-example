<?php

namespace App\Http\Controllers;

use App\Product;

class ProductsController extends Controller
{
    public function index()
    {
        $items = Product::all();

        return \App\Http\Resources\Product::collection($items)
            ->additional([
                'total' => $items->count(),
            ]);
    }

    public function show(Product $product)
    {
        return new \App\Http\Resources\Product($product);
    }
}