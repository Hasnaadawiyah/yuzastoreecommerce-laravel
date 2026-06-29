@extends('layouts.app')

@section('title', 'Laporan Penjualan')

@section('content')
<div class="mb-6">
    <h2 class="text-2xl font-bold text-gray-800 dark:text-white">Laporan Penjualan</h2>
    <p class="text-gray-600 dark:text-gray-400">Filter dan cetak riwayat transaksi toko (Pesanan Selesai).</p>
</div>

<div class="bg-white dark:bg-gray-800 p-6 shadow-sm rounded-xl border border-gray-100 dark:border-gray-700 mb-6 transition-colors">
    <form action="{{ route('admin.reports.index') }}" method="GET" class="flex flex-col md:flex-row items-end gap-4">
        <div class="flex-1">
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Tanggal Mulai</label>
            <input type="date" name="start_date" value="{{ request('start_date') }}" class="w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:border-teal-500 focus:ring-teal-500">
        </div>
        <div class="flex-1">
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Tanggal Akhir</label>
            <input type="date" name="end_date" value="{{ request('end_date') }}" class="w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:border-teal-500 focus:ring-teal-500">
        </div>
        <div class="flex gap-2 w-full md:w-auto mt-4 md:mt-0">
            <button type="submit" class="flex-1 md:flex-none bg-teal-600 text-white px-6 py-2.5 rounded-lg hover:bg-teal-700 font-medium transition shadow-sm">
                Filter Data
            </button>
            <a href="{{ route('admin.reports.index') }}" class="flex-1 md:flex-none text-center bg-gray-100 hover:bg-gray-200 text-gray-700 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-gray-200 px-4 py-2.5 rounded-lg font-medium transition">
                Reset
            </a>
        </div>
    </form>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
    <div class="bg-teal-50 dark:bg-teal-900/20 p-6 rounded-xl border border-teal-100 dark:border-teal-800/50 flex justify-between items-center transition-colors">
        <div>
            <div class="text-teal-800 dark:text-teal-400 text-sm font-semibold uppercase tracking-wider">Total Penjualan Selesai</div>
            <div class="text-3xl font-bold text-teal-600 dark:text-teal-300 mt-1">Rp {{ number_format($totalRevenue, 0, ',', '.') }}</div>
        </div>
        <div class="bg-white dark:bg-teal-800 p-3 rounded-full shadow-sm text-pink-500 dark:text-teal-200">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
    </div>

    <div class="bg-blue-50 dark:bg-blue-900/20 p-6 rounded-xl border border-blue-100 dark:border-blue-800/50 flex justify-between items-center transition-colors">
        <div>
            <div class="text-blue-800 dark:text-blue-400 text-sm font-semibold uppercase tracking-wider">Jumlah Transaksi</div>
            <div class="text-3xl font-bold text-blue-600 dark:text-blue-300 mt-1">{{ $totalOrders }} <span class="text-lg">Pesanan</span></div>
        </div>
        <div class="bg-white dark:bg-blue-800 p-3 rounded-full shadow-sm text-blue-500 dark:text-blue-200">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/></svg>
        </div>
    </div>
</div>

<div class="bg-white dark:bg-gray-800 p-6 shadow-sm rounded-xl border border-gray-100 dark:border-gray-700 transition-colors">
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-4">
        <div>
            <h3 class="text-lg font-bold text-gray-900 dark:text-white">Rincian Transaksi Selesai</h3>
            @if($startDate && $endDate)
                <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                    Periode: {{ \Carbon\Carbon::parse($startDate)->format('d M Y') }} s/d {{ \Carbon\Carbon::parse($endDate)->format('d M Y') }}
                </p>
            @endif
        </div>

        <a href="{{ route('admin.reports.print', ['start_date' => request('start_date'), 'end_date' => request('end_date')]) }}" target="_blank" class="bg-gray-800 dark:bg-gray-100 text-white dark:text-gray-900 px-4 py-2.5 rounded-lg font-bold text-sm flex items-center gap-2 hover:bg-black dark:hover:bg-white shadow-md transition transform hover:-translate-y-0.5">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"/></svg>
            Print PDF Laporan
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-50 dark:bg-gray-700/50 text-gray-500 dark:text-gray-400 uppercase text-xs font-semibold">
                    <th class="py-4 px-4 rounded-tl-lg">No</th>
                    <th class="py-4 px-4">Tanggal Order</th>
                    <th class="py-4 px-4">Invoice</th>
                    <th class="py-4 px-4">Pelanggan</th>
                    <th class="py-4 px-4 text-right rounded-tr-lg">Nominal (Rp)</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 dark:text-gray-300 text-sm">
                @forelse($orders as $idx => $order)
                    <tr class="border-b border-gray-100 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700/30 transition">
                        <td class="py-4 px-4 font-medium">
                            {{ method_exists($orders, 'firstItem') && $orders->firstItem() ? $orders->firstItem() + $idx : $idx + 1 }}
                        </td>
                        <td class="py-4 px-4">{{ $order->created_at->format('d/m/Y H:i') }}</td>
                        <td class="py-4 px-4 font-medium text-gray-900 dark:text-white">{{ $order->invoice_number }}</td>
                        <td class="py-4 px-4">{{ $order->user->name }}</td>
                        <td class="py-4 px-4 text-right font-semibold text-emerald-600 dark:text-emerald-400">{{ number_format($order->total_amount, 0, ',', '.') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="py-12 text-center text-gray-500">Tidak ada transaksi selesai pada periode ini.</td>
                    </tr>
                @endforelse
            </tbody>
            @if(count($orders) > 0)
                <tfoot>
                    <tr class="font-bold bg-gray-50 dark:bg-gray-700/50">
                        <td colspan="4" class="py-4 px-4 text-right text-gray-700 dark:text-gray-300">TOTAL KESELURUHAN:</td>
                        <td class="py-4 px-4 text-right text-teal-600 dark:text-teal-400 text-lg">Rp {{ number_format($totalRevenue, 0, ',', '.') }}</td>
                    </tr>
                </tfoot>
            @endif
        </table>
    </div>
</div>
@endsection