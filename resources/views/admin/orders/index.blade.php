@extends('layouts.app')

@section('title', 'Manajemen Pesanan')

@section('content') <div class="mb-6"> <h2 class="text-2xl font-bold text-gray-800 dark:text-white">
Manajemen Pesanan </h2> <p class="text-gray-600 dark:text-gray-400">
Kelola semua transaksi yang masuk. </p> </div>

<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-xl border border-gray-100 dark:border-gray-700">
    <div class="p-6">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50 dark:bg-gray-700/50 text-gray-500 dark:text-gray-400 uppercase text-xs font-semibold">
                        <th class="py-4 px-6 rounded-tl-lg">Tanggal</th>
                        <th class="py-4 px-6">Invoice</th>
                        <th class="py-4 px-6">Pelanggan</th>
                        <th class="py-4 px-6">Total</th>
                        <th class="py-4 px-6">Status</th>
                        <th class="py-4 px-6 text-center rounded-tr-lg">Aksi</th>
                    </tr>
                </thead>

                <tbody class="text-gray-600 dark:text-gray-300 text-sm">
                    @forelse ($orders as $order)
                        <tr class="border-b border-gray-100 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition">
                            <td class="py-4 px-6 text-left whitespace-nowrap">
                                {{ $order->created_at->format('d M Y H:i') }}
                            </td>

                            <td class="py-4 px-6 text-left font-medium text-gray-900 dark:text-white">
                                {{ $order->invoice_number }}
                            </td>

                            <td class="py-4 px-6 text-left">
                                {{ $order->user->name }}
                            </td>

                            <td class="py-4 px-6 text-left font-semibold text-emerald-600 dark:text-emerald-400">
                                Rp {{ number_format($order->total_amount, 0, ',', '.') }}
                            </td>

                            <td class="py-4 px-6 text-left">
                                @if ($order->status == 'pending')
                                    <span class="bg-yellow-100 dark:bg-yellow-900/30 text-yellow-800 dark:text-yellow-300 py-1.5 px-3 rounded-full text-xs font-medium">
                                        Pending
                                    </span>
                                @elseif ($order->status == 'processing')
                                    <span class="bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-300 py-1.5 px-3 rounded-full text-xs font-medium">
                                        Processing
                                    </span>
                                @elseif ($order->status == 'shipped')
                                    <span class="bg-cyan-100 text-cyan-800 dark:bg-cyan-900/30 dark:text-cyan-400 py-1.5 px-3 rounded-full text-xs font-medium">
                                        Shipped
                                    </span>
                                @elseif ($order->status == 'completed')
                                    <span class="bg-green-100 dark:bg-green-900/30 text-green-800 dark:text-green-300 py-1.5 px-3 rounded-full text-xs font-medium">
                                        Completed
                                    </span>
                                @else
                                    <span class="bg-red-100 dark:bg-red-900/30 text-red-800 dark:text-red-300 py-1.5 px-3 rounded-full text-xs font-medium">
                                        {{ ucfirst($order->status) }}
                                    </span>
                                @endif
                            </td>

                            <td class="py-4 px-6 text-center">
                                <a
                                    href="{{ route('admin.orders.show', $order->id) }}"
                                    class="inline-flex items-center justify-center bg-teal-600 hover:bg-teal-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition shadow-sm"
                                >
                                    Detail
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="py-12 text-center text-gray-500 dark:text-gray-400">
                                Belum ada pesanan terdaftar.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="mt-6">
            {{ $orders->links() }}
        </div>
    </div>
</div>

@endsection
