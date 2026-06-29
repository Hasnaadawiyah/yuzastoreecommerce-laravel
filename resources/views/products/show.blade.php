@extends('layouts.app')

@section('title', $product['name'])

@section('content')
<div class="max-w-7xl mx-auto">

    {{-- Breadcrumb --}}
    <nav class="flex text-sm text-gray-500 mb-6" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">

            <li class="inline-flex items-center">
                <a href="{{ route('home') }}"
                    class="hover:text-pink-500 transition-colors">
                    Beranda
                </a>
            </li>

            <li>
                <div class="flex items-center">
                    <svg class="w-4 h-4 text-gray-400 mx-1"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 5l7 7-7 7" />
                    </svg>

                    <a href="{{ route('products.index') }}"
                        class="hover:text-pink-500 transition-colors">
                        Produk
                    </a>
                </div>
            </li>

            <li>
                <div class="flex items-center">
                    <svg class="w-4 h-4 text-gray-400 mx-1"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 5l7 7-7 7" />
                    </svg>

                    <span class="text-gray-400 dark:text-gray-500 truncate max-w-[150px] md:max-w-none">
                        {{ $product['name'] }}
                    </span>
                </div>
            </li>

        </ol>
    </nav>

    <div class="bg-white dark:bg-gray-800 rounded-2xl border border-gray-100 dark:border-gray-700 shadow-sm overflow-hidden">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 p-6 md:p-8 lg:p-10">

            {{-- KIRI: Gambar Produk --}}
            <div class="space-y-4">

                <div class="aspect-square bg-gray-50 dark:bg-gray-900 rounded-xl overflow-hidden border border-gray-100 dark:border-gray-700">
                    <img src="{{ $product['image'] }}"
                        alt="{{ $product['name'] }}"
                        class="w-full h-full object-cover">
                </div>

                {{-- Placeholder untuk thumbnail galeri jika ada --}}
                <div class="grid grid-cols-4 gap-4">

                    <div class="aspect-square bg-gray-100 dark:bg-gray-700 rounded-lg border-2 border-pink-500 cursor-pointer overflow-hidden opacity-100 hover:opacity-80 transition-opacity">
                        <img src="{{ $product['image'] }}"
                            alt="Thumb 1"
                            class="w-full h-full object-cover">
                    </div>

                    <div class="aspect-square bg-gray-100 dark:bg-gray-700 rounded-lg border border-gray-200 dark:border-gray-600 cursor-pointer overflow-hidden opacity-60 hover:opacity-100 transition-opacity">
                        <img src="{{ $product['image'] }}"
                            alt="Thumb 2"
                            class="w-full h-full object-cover grayscale">
                    </div>

                </div>
            </div>

            {{-- KANAN: Detail & Form Tambah ke Keranjang --}}
            <div class="flex flex-col">

                <div class="mb-6 border-b border-gray-100 dark:border-gray-700 pb-6">

                    <p class="text-xs font-bold text-pink-500 tracking-wider uppercase mb-2">
                        {{ $product['category'] }}
                    </p>

                    <h1 class="text-2xl md:text-3xl font-extrabold text-gray-900 dark:text-white leading-tight mb-4">
                        {{ $product['name'] }}
                    </h1>

                    <div class="flex items-center gap-4 mb-4">

                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-yellow-400"
                                fill="currentColor"
                                viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>

                            <span class="ml-1 text-sm font-bold text-gray-700 dark:text-gray-300">
                                4.9
                            </span>

                            <span class="ml-1 text-xs text-gray-400">
                                (128 ulasan)
                            </span>
                        </div>

                        <span class="text-gray-300 dark:text-gray-600">|</span>

                        <div class="text-sm">
                            <span class="text-gray-500 dark:text-gray-400">
                                Terjual
                            </span>

                            <span class="font-bold text-gray-700 dark:text-gray-300 ml-1">
                                450+
                            </span>
                        </div>

                    </div>

                    <p class="text-4xl font-black text-pink-500">
                        Rp {{ number_format($product['price'], 0, ',', '.') }}
                    </p>

                </div>

                {{-- Spesifikasi Ringkas --}}
                <div class="mb-8">

                    <h3 class="text-sm font-bold text-gray-900 dark:text-white mb-3">
                        Spesifikasi Utama:
                    </h3>

                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-300">

                        @foreach($product['specifications'] as $key => $value)

                        <li class="flex items-start">

                            <svg class="w-4 h-4 text-pink-500 mr-2 mt-0.5"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>

                            <div>
                                <span class="font-semibold text-gray-800 dark:text-gray-200">
                                    {{ $key }}:
                                </span>

                                {{ $value }}
                            </div>

                        </li>

                        @endforeach

                    </ul>

                </div>

                <div class="mt-auto pt-6 border-t border-gray-100 dark:border-gray-700 flex flex-col sm:flex-row gap-4">

                    {{-- Form Add To Cart --}}
                    <form action="{{ route('cart.store') }}"
                        method="POST"
                        class="flex flex-1 gap-4">

                        @csrf

                        <input type="hidden"
                            name="product_id"
                            value="{{ $product['id'] }}">

                        {{-- Kuantitas --}}
                        <div class="flex items-center border border-gray-200 dark:border-gray-600 rounded-xl overflow-hidden bg-white dark:bg-gray-800 w-32 shrink-0">

                            <button type="button"
                                class="px-3 py-3.5 text-gray-500 hover:text-pink-500 hover:bg-gray-50 dark:hover:bg-gray-700 transition"
                                onclick="document.getElementById('qty').value = Math.max(1, parseInt(document.getElementById('qty').value) - 1)">

                                <svg class="w-4 h-4"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M20 12H4" />
                                </svg>

                            </button>

                            <input type="number"
                                id="qty"
                                name="quantity"
                                value="1"
                                min="1"
                                max="{{ $product['stock'] }}"
                                class="w-full text-center text-sm font-bold border-none ring-0 focus:ring-0 p-0 text-gray-900 dark:text-white bg-transparent"
                                readonly>

                            <button type="button"
                                class="px-3 py-3.5 text-gray-500 hover:text-pink-500 hover:bg-gray-50 dark:hover:bg-gray-700 transition"
                                onclick="document.getElementById('qty').value = Math.min({{ $product['stock'] }}, parseInt(document.getElementById('qty').value) + 1)">

                                <svg class="w-4 h-4"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M12 4v16m8-8H4" />
                                </svg>

                            </button>

                        </div>

                        {{-- Tombol --}}
                        <button type="submit"
    class="flex-1 flex items-center justify-center gap-2 bg-pink-500 hover:bg-pink-600 active:bg-pink-700 text-white font-bold px-6 py-3.5 rounded-xl transition-all shadow-lg shadow-pink-500/25">

                            <svg class="w-5 h-5"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>

                            Tambah ke Keranjang

                        </button>

                    </form>

                </div>

                <p class="text-xs text-gray-400 mt-3 flex items-center gap-1">

                    <svg class="w-4 h-4 text-green-500"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>

                    Stok tersedia:
                    <span class="font-bold text-gray-700 dark:text-gray-300">
                        {{ $product['stock'] }} unit
                    </span>

                </p>

            </div>
        </div>

        {{-- Deskripsi Panjang --}}
        <div class="border-t border-gray-100 dark:border-gray-700 p-6 md:p-10">

            <h2 class="text-xl font-bold text-gray-900 dark:text-white mb-4">
                Deskripsi Produk
            </h2>

            <div class="prose dark:prose-invert max-w-none text-gray-600 dark:text-gray-300 text-sm md:text-base leading-relaxed">
                <p>{{ $product['description'] }}</p>
            </div>

        </div>
    </div>
</div>
@endsection