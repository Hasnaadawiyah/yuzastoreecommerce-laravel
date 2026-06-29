<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Menampilkan halaman utama website e-commerce.
     */
    public function index()
    {
        $products = Product::with('category')
            ->where('is_active', true)
            ->latest()
            ->take(8)
            ->get();

        $featuredProducts = $products->map(function ($product) {
            return [
                'id'       => $product->id,
                'name'     => $product->name,
                'slug'     => $product->slug,
                'price'    => $product->price,
                'category' => $product->category->name ?? 'Kategori',
                'image' => $product->image
                ?: 'https://via.placeholder.com/600x600?text=Produk',
            ];
        });

        return view('home', compact('featuredProducts'));
    }
}