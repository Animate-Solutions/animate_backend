<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    public function index()
    {
        return Product::orderBy('order')
            ->get()
            ->map(function ($product) {
                $product->image = Storage::url($product->image);
                return $product;
            });
    }

    public function show(string $slug)
    {
        return Product::where('slug', $slug)->firstOrFail();
    }
}
