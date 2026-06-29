@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<div class="mb-6">
    <h2 class="text-2xl font-bold text-gray-800 dark:text-white">
        Admin Dashboard
    </h2>
    <p class="text-gray-600 dark:text-gray-400">
        Ringkasan statistik dan pesanan terbaru.
    </p>
</div>

<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">

    <!-- Total Orders -->
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg p-6">
        <div class="text-gray-500 dark:text-gray-400 text-sm">
            Total Pesanan
        </div>
        <div class="text-3xl font-bold text-gray-800 dark:text-white">
            {{ $totalOrders }}
        </div>
    </div>

    <!-- New Orders -->
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg p-6 border-l-4 border-teal-500">
        <div class="text-gray-500 dark:text-gray-400 text-sm">
            Pesanan Baru (Pending)
        </div>
        <div class="text-3xl font-bold text-teal-600 dark:text-teal-400">
            {{ $newOrders }}
        </div>
    </div>

    <!-- Total Revenue -->
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg p-6 border-l-4 border-green-500">
        <div class="text-gray-500 dark:text-gray-400 text-sm">
            Pendapatan Selesai
        </div>
        <div class="text-3xl font-bold text-green-600 dark:text-green-400">
            Rp {{ number_format($totalRevenue, 0, ',', '.') }}
        </div>
    </div>

    <!-- Total Users -->
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg p-6">
        <div class="text-gray-500 dark:text-gray-400 text-sm">
            Total Pelanggan
        </div>
        <div class="text-3xl font-bold text-gray-800 dark:text-white">
            {{ $totalUsers }}
        </div>
    </div>

</div>

<!-- Recent Orders Table -->
<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg mt-8">
    <div class="p-6">

        <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-bold text-gray-900 dark:text-white">
                Pesanan Terbaru
            </h3>

            <a href="{{ route('admin.orders.index') }}"
               class="text-pink-500 hover:text-pink-700 dark:hover:text-pink-400 font-medium text-sm transition transition-colors">
                Lihat Semua &rarr;
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">

                <thead>
                    <tr class="bg-gray-50 dark:bg-gray-700/50 text-gray-500 dark:text-gray-400 uppercase text-xs font-semibold">
                        <th class="py-3 px-6 rounded-tl-lg">Invoice</th>
                        <th class="py-3 px-6">Pelanggan</th>
                        <th class="py-3 px-6">Total</th>
                        <th class="py-3 px-6">Status</th>
                        <th class="py-3 px-6 rounded-tr-lg text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody class="text-gray-600 dark:text-gray-300 text-sm">
                    @forelse ($recentOrders as $order)
                        <tr class="border-b border-gray-100 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition">

                            <td class="py-3 px-6 text-left whitespace-nowrap font-medium text-gray-900 dark:text-white">
                                {{ $order->invoice_number }}
                            </td>

                            <td class="py-3 px-6 text-left">
                                {{ $order->user->name }}
                            </td>

                            <td class="py-3 px-6 text-left font-semibold text-emerald-600 dark:text-emerald-400">
                                Rp {{ number_format($order->total_amount, 0, ',', '.') }}
                            </td>

                            <td class="py-3 px-6 text-left">
                                @if($order->status == 'pending')
                                    <span class="bg-yellow-100 dark:bg-yellow-900/30 text-yellow-800 dark:text-yellow-300 py-1 px-3 rounded-full text-xs font-medium">
                                        Pending
                                    </span>
                                @elseif($order->status == 'processing')
                                    <span class="bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-300 py-1 px-3 rounded-full text-xs font-medium">
                                        Processing
                                    </span>
                                @elseif($order->status == 'shipped')
                                    <span class="bg-purple-100 dark:bg-purple-900/30 text-purple-800 dark:text-purple-300 py-1 px-3 rounded-full text-xs font-medium">
                                        Shipped
                                    </span>
                                @elseif($order->status == 'completed')
                                    <span class="bg-green-100 dark:bg-green-900/30 text-green-800 dark:text-green-300 py-1 px-3 rounded-full text-xs font-medium">
                                        Completed
                                    </span>
                                @else
                                    <span class="bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-300 py-1 px-3 rounded-full text-xs font-medium">
                                        {{ ucfirst($order->status) }}
                                    </span>
                                @endif
                            </td>

                            <td class="py-3 px-6 text-center">
                                <a href="{{ route('admin.orders.show', $order->id) }}"
                                   class="inline-flex items-center text-teal-600 dark:text-teal-400 hover:text-teal-800 dark:hover:text-teal-300 font-medium transition">
                                    Detail
                                </a>
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="py-8 text-center text-gray-500 dark:text-gray-400">
                                Belum ada pesanan.
                            </td>
                        </tr>
                    @endforelse
                </tbody>

            </table>
        </div>

    </div>
</div>
@endsection