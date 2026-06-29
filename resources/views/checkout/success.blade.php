@extends('layouts.app')

@section('title', 'Pesanan Berhasil')

@section('content')
<div class="max-w-2xl mx-auto px-4 py-20 text-center">

    <div class="mb-8 flex justify-center">

        <div class="w-24 h-24 bg-rose-100 text-rose-500 rounded-full flex items-center justify-center shadow-lg shadow-rose-200">

            <svg
                class="w-12 h-12"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="3"
                    d="M5 13l4 4L19 7"
                />
            </svg>

        </div>

    </div>

    <h1 class="text-4xl font-black text-gray-900 dark:text-white mb-4">
        Terima Kasih!
    </h1>

    <p class="text-gray-600 dark:text-gray-400 text-lg mb-10 max-w-sm mx-auto">
        Pesanan Anda telah berhasil dibayar dan sedang kami proses.
        Silakan tunggu update selanjutnya.
    </p>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

        <a
            href="{{ route('home') }}"
            class="px-8 py-4 bg-pink-500 hover:bg-pink-600 text-white font-bold rounded-2xl transition-all shadow-lg shadow-pink-500/25"
        >
            Kembali ke Beranda
        </a>

        <a href="{{ route('orders.detail', $order->invoice_number) }}"
    class="px-8 py-4 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 text-gray-900 dark:text-white font-bold rounded-2xl hover:bg-gray-50 dark:hover:bg-gray-700 transition-all"
>
    Lihat Detail Pesanan
</a>

    </div>

    <p class="mt-8 text-sm text-gray-400 italic">
    </p>

</div>
@endsection