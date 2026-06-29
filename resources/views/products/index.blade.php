@extends('layouts.app')

@section('title', 'Semua Produk')

@section('content')

<div class="pb-4 border-b border-gray-200 dark:border-gray-700">

    <h1 class="text-2xl font-bold text-gray-900 dark:text-white">
        Katalog Produk Bunga 🌸
    </h1>

    <p class="text-sm text-gray-500 dark:text-gray-300 mt-1">
        Temukan buket bunga cantik untuk setiap momen spesialmu!
    </p>

</div>

    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-5">

        @forelse($products as $item)

            @include('components.product-card', ['product' => $item])

        @empty

            <div class="col-span-full py-16 text-center text-gray-400">

                <p>Produk belum tersedia.</p>

            </div>

        @endforelse

    </div>

</div>

@endsection