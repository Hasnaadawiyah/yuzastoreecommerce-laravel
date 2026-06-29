@extends('layouts.app')

@section('title', 'Detail Pesanan')

@section('content')
<div class="max-w-7xl mx-auto px-6 py-12">

    <h1 class="text-5xl font-black text-gray-900 dark:text-white mb-10">
        Detail Pesanan 🌷
    </h1>

    <div class="bg-white dark:bg-gray-800 rounded-[35px] shadow-lg p-8">

        {{-- Card Informasi --}}
        <div class="grid md:grid-cols-3 gap-6 mb-10">

            {{-- Status Pesanan --}}
@php
    $statusColor = match($order->status) {
        'pending' => 'bg-yellow-100 text-yellow-700',
        'processing' => 'bg-blue-100 text-blue-700',
        'completed' => 'bg-green-100 text-green-700',
        'cancelled' => 'bg-red-100 text-red-700',
        default => 'bg-gray-100 text-gray-700',
    };
@endphp

<div class="bg-white dark:bg-gray-700 rounded-3xl border border-gray-100 shadow-sm p-6 flex items-center gap-5">

    {{-- Icon --}}
    <div class="w-16 h-16 rounded-full bg-yellow-50 flex items-center justify-center flex-shrink-0">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            class="w-8 h-8 text-yellow-500"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="1.8"
        >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M6 7h12l-1 12H7L6 7z"
            />
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M9 7a3 3 0 016 0"
            />
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M10 12l2 2 3-3"
            />
        </svg>
    </div>

    {{-- Text --}}
    <div>
        <p class="text-gray-500 text-sm font-medium">
            Status Pesanan
        </p>

        <span
            class="inline-flex items-center mt-2 px-4 py-2 rounded-full font-semibold text-sm {{ $statusColor }}"
        >
            {{ ucfirst($order->status) }}
        </span>
    </div>

</div>

            {{-- Invoice --}}
            <div class="bg-white dark:bg-gray-700 rounded-3xl border border-gray-100 shadow-sm p-6 flex items-center gap-5">

                <div class="w-16 h-16 rounded-full bg-pink-50 flex items-center justify-center">
                    <svg class="w-8 h-8 text-pink-500"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 12h6m-6 4h6M7 4h10l2 2v14H5V4h2z">
                        </path>
                    </svg>
                </div>

                <div>
                    <p class="text-gray-500 font-medium">
                        Nomor Invoice
                    </p>

                    <p class="font-bold text-xl mt-2 text-gray-900 dark:text-white">
                        {{ $order->invoice_number }}
                    </p>
                </div>

            </div>

            {{-- Tanggal --}}
            <div class="bg-white dark:bg-gray-700 rounded-3xl border border-gray-100 shadow-sm p-6 flex items-center gap-5">

                <div class="w-16 h-16 rounded-full bg-pink-50 flex items-center justify-center">
                    <svg class="w-8 h-8 text-pink-500"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                        </path>
                    </svg>
                </div>

                <div>
                    <p class="text-gray-500 font-medium">
                        Tanggal Pesanan
                    </p>

                    <p class="font-semibold text-xl mt-2 text-gray-900 dark:text-white">
                        {{ $order->created_at->format('d M Y, H:i') }}
                    </p>
                </div>

            </div>

        </div>

        {{-- Informasi Pengiriman --}}
        <div class="bg-gradient-to-r from-rose-50 to-pink-50 rounded-3xl p-8 mb-12">

            <div class="flex gap-6">

                <div class="w-16 h-16 rounded-full bg-pink-100 flex items-center justify-center flex-shrink-0">
                    <svg class="w-8 h-8 text-pink-500"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 17H6a2 2 0 01-2-2V7a2 2 0 012-2h9a2 2 0 012 2v1m0 4h2l2 3v2h-4m0 0a2 2 0 11-4 0m4 0H9m0 0a2 2 0 11-4 0">
                        </path>
                    </svg>
                </div>

                <div>
                    <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-5">
                        Informasi Pengiriman
                    </h2>

                    <p class="text-gray-600 text-lg mb-3">
                        📍 {{ $order->shipping_address }}
                    </p>

                    <p class="text-gray-600 text-lg">
                        📞 {{ $order->phone }}
                    </p>
                </div>

            </div>

        </div>

        {{-- Produk --}}
        <h2 class="text-4xl font-black text-gray-900 dark:text-white mb-6">
            🌷 Produk Dibeli
        </h2>

        @foreach ($order->items as $item)
<div class="bg-white dark:bg-gray-700 rounded-3xl border border-gray-100 shadow-sm p-5 mb-8 flex justify-between items-center">

    <div class="flex items-center gap-5">

       {{-- Gambar Produk --}}
@if($item->product && $item->product->image)
    <img
        src="{{ $item->product->image }}"
        alt="{{ $item->product_name }}"
        class="w-24 h-24 object-cover rounded-2xl"
        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
    >

    <div
        class="w-24 h-24 bg-pink-50 rounded-2xl hidden items-center justify-center text-4xl"
    >
        🌷
    </div>
@else
    <div class="w-24 h-24 bg-pink-50 rounded-2xl flex items-center justify-center text-4xl">
        🌷
    </div>
@endif

        {{-- Nama Produk --}}
        <div>
            <h3 class="text-2xl font-bold text-gray-900 dark:text-white">
                {{ $item->product_name }}
            </h3>

            <p class="text-gray-500 mt-2">
                Jumlah : {{ $item->quantity }}
            </p>
        </div>

    </div>

    {{-- Harga --}}
    <div class="text-pink-500 font-black text-3xl">
        Rp {{ number_format($item->price * $item->quantity,0,',','.') }}
    </div>

</div>
@endforeach

        {{-- Total --}}
        <div class="bg-white dark:bg-gray-700 rounded-3xl border border-gray-100 shadow-sm p-8 mb-10 flex justify-between items-center">

            <p class="text-3xl text-gray-500">
                Total Pembayaran
            </p>

            <h3 class="text-5xl font-black text-gray-900 dark:text-white">
                Rp {{ number_format($order->total_amount,0,',','.') }}
            </h3>

        </div>

        {{-- Tombol --}}
        <div class="flex flex-wrap gap-5">

            <a
                href="{{ route('home') }}"
                class="px-8 py-4 bg-gray-100 hover:bg-gray-200 rounded-2xl font-semibold text-gray-700 transition">
                ← Kembali ke Beranda
            </a>

            <a
                href="{{ route('products.index') }}"
                class="px-8 py-4 bg-pink-500 hover:bg-pink-600 rounded-2xl font-semibold text-white transition">
                Belanja Lagi
            </a>

        </div>

    </div>

</div>
@endsection