@extends('layouts.app')

@section('title', 'Keranjang Belanja')

@section('content')
<div class="max-w-7xl mx-auto">

    <div class="flex items-center gap-3 mb-8">

        <h1 class="text-3xl font-extrabold text-gray-900 dark:text-white">
            Keranjang Belanja
        </h1>

        <span class="bg-pink-100 text-pink-600 dark:bg-pink-500/20 dark:text-pink-400 py-1 px-3 rounded-full text-sm font-bold">
            {{ $cart->items->count() }} Item
        </span>

    </div>

    @if(session('success'))

        <div class="mb-6 p-4 rounded-xl bg-pink-50 dark:bg-pink-900/20 text-pink-600 dark:text-pink-400 border border-pink-200 dark:border-pink-800 flex items-center gap-3">

            <svg class="w-5 h-5"
                fill="currentColor"
                viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.4141.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                    clip-rule="evenodd" />
            </svg>

            <span class="font-medium">
                {{ session('success') }}
            </span>

        </div>

    @endif

    @if($cart->items->isEmpty())

        {{-- Keranjang Kosong --}}
        <div class="bg-white dark:bg-gray-800 rounded-2xl border border-gray-100 dark:border-gray-700 p-12 text-center shadow-sm">

            <div class="w-24 h-24 bg-gray-50 dark:bg-gray-700/50 rounded-full flex items-center justify-center mx-auto mb-6">

                <svg class="w-12 h-12 text-gray-400"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.5"
                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>

            </div>

            <h2 class="text-xl font-bold text-gray-900 dark:text-white mb-2">
                Keranjang belanjamu kosong
            </h2>

            <p class="text-gray-500 dark:text-gray-400 mb-8 max-w-md mx-auto">
                Sepertinya kamu belum menambahkan produk apa pun ke keranjang.
                Yuk temukan produk impianmu!
            </p>

            <a href="{{ route('products.index') }}"
                class="inline-flex items-center justify-center px-6 py-3 bg-teal-500 hover:bg-teal-600 text-white font-bold rounded-xl transition-colors shadow-lg shadow-teal-500/25">

                Mulai Belanja

            </a>

        </div>

    @else

        {{-- Keranjang Ada Isinya --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            {{-- KIRI: Daftar Item --}}
            <div class="lg:col-span-2 space-y-4">

                @foreach($cart->items as $item)

                    <div class="bg-white dark:bg-gray-800 rounded-2xl border border-gray-100 dark:border-gray-700 p-4 sm:p-6 shadow-sm flex flex-col sm:flex-row gap-6 items-start sm:items-center">

                        {{-- Gambar Produk --}}
                        <div class="w-24 h-24 sm:w-28 sm:h-28 bg-gray-50 dark:bg-[#FFF2FA] rounded-xl overflow-hidden shrink-0">

                            {{-- Karena pakai data statis dummy di product index, fotonya tidak tersimpan di database saat ini. Kita akali dengan placeholder jika kosong --}}
                            <img src="{{ $item->product->image ?? 'https://via.placeholder.com/300?text=No+Image' }}"
                                alt="{{ $item->product->name }}"
                                class="w-full h-full object-cover">

                        </div>

                        {{-- Info Produk --}}
                        <div class="flex-1 min-w-0 w-full">

                            <a href="{{ route('products.show', $item->product->slug ?? 'laptop') }}"
                                class="block text-lg font-bold text-gray-900 dark:text-white hover:text-pink-500 dark:hover:text-pink-400 truncate mb-1 transition-colors">

                                {{ $item->product->name }}

                            </a>

                            <p class="text-pink-500 font-black mb-4">
                                Rp {{ number_format($item->product->price, 0, ',', '.') }}
                            </p>

                            <div class="flex items-center justify-between w-full">

                                {{-- Form Update Kuantitas --}}
                                <form action="{{ route('cart.update', $item->id) }}"
                                    method="POST"
                                    class="flex items-center border border-gray-200 dark:border-gray-600 rounded-lg overflow-hidden w-28 bg-gray-50 dark:bg-[#FCA4DA]">

                                    @csrf
                                    @method('PATCH')

                                    <button type="button"
                                        class="w-8 h-9 flex items-center justify-center text-gray-500 hover:text-pink-500 hover:bg-gray-100 dark:hover:bg-gray-800 transition"
                                        onclick="this.nextElementSibling.value--; this.form.submit();"
                                        @if($item->quantity <= 1) disabled @endif>

                                        <svg class="w-3.5 h-3.5"
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
                                        name="quantity"
                                        value="{{ $item->quantity }}"
                                        min="1"
                                        class="w-12 h-10 flex items-center justify-center text-center text-sm font-bold border-x border-gray-200 dark:border-gray-600 bg-transparent focus:outline-none focus:ring-0 p-0 [appearance:textfield]"
                                        onchange="this.form.submit()">

                                    <button type="button"
                                        class="w-10 h-10 flex items-center justify-center text-gray-500 hover:text-pink-500 hover:bg-gray-100 dark:hover:bg-gray-800 transition"
                                        onclick="this.previousElementSibling.value++; this.form.submit();">

                                        <svg class="w-3.5 h-3.5"
                                            fill="none"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M12 4v16m8-8H4" />
                                        </svg>

                                    </button>

                                </form>

                                {{-- Form Hapus --}}
                                <form action="{{ route('cart.destroy', $item->id) }}"
                                    method="POST">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                        class="p-2 text-gray-400 hover:text-red-500 hover:bg-red-50 dark:hover:bg-red-500/10 rounded-lg transition-colors"
                                        title="Hapus Produk">

                                        <svg class="w-5 h-5"
                                            fill="none"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>

                                    </button>

                                </form>

                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

            {{-- KANAN: Detail Pembayaran (Summary) --}}
            <div class="lg:col-span-1">

                <div class="bg-white dark:bg-gray-800 rounded-2xl border border-gray-100 dark:border-gray-700 p-6 sm:p-8 shadow-sm sticky top-8">

                    <h2 class="text-lg font-bold text-gray-900 dark:text-white mb-6">
                        Ringkasan Belanja
                    </h2>

                    <div class="space-y-4 mb-6 text-sm">

                        <div class="flex justify-between text-gray-600 dark:text-gray-400">

                            <span>
                                Total Harga ({{ $cart->items->count() }} barang)
                            </span>

                            <span class="text-2xl font-black text-pink-500">
    Rp {{ number_format($total, 0, ',', '.') }}
</span>

                        </div>

                        <div class="flex justify-between text-gray-600 dark:text-gray-400">

                            <span>Diskon</span>

                            <span class="font-medium text-green-500">
                                - Rp 0
                            </span>

                        </div>

                    </div>

                    <div class="border-t border-gray-100 dark:border-gray-700 pt-6 mb-8">

                        <div class="flex justify-between items-end">

                            <span class="text-base font-bold text-gray-900 dark:text-white">
                                Total Tagihan
                            </span>

                            <span class="text-2xl font-black text-pink-500">
    Rp {{ number_format($total, 0, ',', '.') }}
</span>

                        </div>

                    </div>

                    <a href="{{ route('checkout.index') }}"
    class="w-full flex justify-center items-center py-4 bg-pink-500 hover:bg-pink-600 active:bg-pink-700 text-white font-bold rounded-xl transition-all shadow-lg shadow-pink-500/25">

    Lanjut ke Pembayaran

</a>

                    <div class="mt-6 flex justify-center items-center gap-2 text-xs text-gray-400">

                        <svg class="w-4 h-4"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>

                        <span>
                            Transaksi 100% Aman & Terenkripsi
                        </span>

                    </div>

                </div>

            </div>

        </div>

    @endif

</div>
@endsection