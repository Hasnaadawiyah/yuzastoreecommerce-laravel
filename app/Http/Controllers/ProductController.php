<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Menampilkan daftar semua produk
     */
    public function index()
    {
        // Ambil semua produk dari database, hanya yang aktif
        $products = Product::where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->get();

        // Format data agar sesuai dengan view (yang sebelumnya pakai array)
        // Ini memastikan view products.index tidak error karena perubahan struktur
        $formattedProducts = $products->map(function ($product) {
            return [
                'id'       => $product->id,
                'name'     => $product->name,
                'slug'     => $product->slug,
                'price'    => $product->price,
                'category' => $product->category->name ?? 'Kategori',
                'image'    => $product->image ?? 'https://via.placeholder.com/800x600?text=Produk'
            ];
        });

        return view('products.index', ['products' => $formattedProducts]);
    }

    /**
     * Menampilkan detail satu produk berdasarkan slug
     */
    public function show($slug)
    {
        // Ambil data produk berdasarkan slug atau 404 jika tidak ditemukan
        $productData = Product::with('category')
            ->where('slug', $slug)
            ->firstOrFail();

        // Format agar sesuai dengan struktur view show.blade.php kita
        $product = [
            'id'          => $productData->id,
            'name'        => $productData->name,
            'slug'        => $productData->slug,
            'price'       => $productData->price,
            'category'    => $productData->category->name ?? 'Umum',
            'image'       => $productData->image ?? 'https://via.placeholder.com/1200x800?text=Produk',
            'description' => $productData->description,
            'stock'       => $productData->stock,
            'specifications' => [
                'SKU'      => $productData->sku,
                'Barcode'  => $productData->barcode ?? '-',
                'Status'   => $productData->is_active ? 'Aktif' : 'Tidak Aktif'
            ]
        ];

        return view('products.show', compact('product'));
    }
}