@extends('layouts.app')
@section('title', 'Detail Pesanan ' . $order->invoice_number)

@section('content')
    <div class="mb-6 flex items-center gap-3">
        <a href="{{ route('admin.orders.index') }}" class="text-pink-500 hover:text-pink-700 dark:hover:text-pink-400 bg-white dark:bg-gray-800 p-2 rounded-full shadow-sm transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
            </svg>
        </a>
        <h2 class="text-2xl font-bold text-gray-800 dark:text-white">Detail Pesanan <span class="text-pink-600 dark:text-pink-400">#{{ $order->invoice_number }}</span></h2>
    </div>

    @if(session('success'))
        <div class="mb-6 bg-pink-50border-pink-200
text-pink-700
dark:bg-pink-900/20
dark:border-pink-700
dark:text-pink-400 px-4 py-3 rounded-lg relative flex items-center gap-2" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
            </svg>
            <span class="block sm:inline font-medium">{{ session('success') }}</span>
        </div>
    @endif

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Kolom Kiri: Detail Informasi -->
        <div class="lg:col-span-2 space-y-8">
            <!-- Item Pesanan -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-xl border border-gray-100 dark:border-gray-700">
                <div class="p-6">
                    <h3 class="text-lg font-bold mb-6 text-gray-900 dark:text-white border-b border-gray-100 dark:border-gray-700 pb-4">Daftar Produk yang Dipesan</h3>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-gray-50 dark:bg-gray-700/50 text-gray-500 dark:text-gray-400 uppercase text-xs font-semibold">
                                    <th class="py-3 px-4 rounded-tl-lg">Produk</th>
                                    <th class="py-3 px-4 text-right">Harga</th>
                                    <th class="py-3 px-4 text-center">Qty</th>
                                    <th class="py-3 px-4 text-right rounded-tr-lg">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 dark:text-gray-300 text-sm">
                                @foreach ($order->items as $item)
                                    <tr class="border-b border-gray-100 dark:border-gray-700">
                                        <td class="py-4 px-4">
                                            <div class="font-medium text-gray-900 dark:text-white">{{ $item->product_name ?? ($item->product->name ?? 'Produk Dihapus') }}</div>
                                        </td>
                                        <td class="py-4 px-4 text-right">Rp {{ number_format($item->price, 0, ',', '.') }}</td>
                                        <td class="py-4 px-4 text-center bg-gray-50 dark:bg-gray-700/30 rounded font-medium">{{ $item->quantity }}</td>
                                        <td class="py-4 px-4 text-right font-semibold text-gray-900 dark:text-white">Rp {{ number_format($item->price * $item->quantity, 0, ',', '.') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr class="font-bold">
                                    <td colspan="3" class="py-6 px-4 text-right text-gray-500 dark:text-gray-400 uppercase text-xs tracking-wider">Total Pembayaran :</td>
                                    <td class="py-6 px-4 text-right text-xl font-bold text-pink-600 dark:text-pink-400">Rp {{ number_format($order->total_amount, 0, ',', '.') }}</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kolom Kanan: Customer & Status -->
        <div class="space-y-8">
            <!-- Update Status -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-xl border border-gray-100 dark:border-gray-700">
                <div class="p-6">
                    <h3 class="text-lg font-bold mb-4 text-gray-900 dark:text-white flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-pink-500" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1。533 0 01.947-2。２８７c１。５６１－．３７９ １。５６１－２。６ ０－２。９７８a１。５３２ １。５３２ ０ ０１－．９４７－２。２８７c．８３６－１。３７２－．７３４－２。９４２－２。１０６－２。１０６a１。５３２ １。５３２ ０ ０１－２。２８７－．９４７zM１０ １３a３ ３ ０ １００－６ ３ ３ ０ ０００６z" clip-rule="evenodd" />
                        </svg>
                        Ubah Status Pesanan
                    </h3>

                    <form action="{{ route('admin.orders.update', $order->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-5">
                            <label for="status" class="block text-sm font-medium text-gray-600 dark:text-gray-400 mb-2">Pilih Status Baru</label>
                            <select name="status" id="status" class="w-full rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white shadow-sm focus:border-pink-500 focus:ring-pink-500 transition">
                                <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending (Belum Dibayar)</option>
                                <option value="processing" {{ $order->status == 'processing' ? 'selected' : '' }}>Processing (Sedang Diproses)</option>
                                <option value="shipped" {{ $order->status == 'shipped' ? 'selected' : '' }}>Shipped (Sedang Dikirim)</option>
                                <option value="completed" {{ $order->status == 'completed' ? 'selected' : '' }}>Completed (Selesai)</option>
                                <option value="cancelled" {{ $order->status == 'cancelled' ? 'selected' : '' }}>Cancelled (Dibatalkan)</option>
                            </select>
                        </div>

                        <button type="submit" class="w-full bg-gradient-to-r from-pink-500 to-fuchsia-500 text-white py-2.5 px-4 rounded-lg hover:from-pink-600 hover:to-fuchsia-600 transition shadow-lg shadow-pink-300/40 font-semibold flex justify-center items-center gap-2"
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            Perbarui Status
                        </button>
                    </form>
                </div>
            </div>

            <!-- Informasi Pelanggan -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-xl border border-gray-100 dark:border-gray-700">
                <div class="p-6">
                    <h3 class="text-lg font-bold mb-4 text-gray-900 dark:text-white flex items-center gap-2 border-b border-gray-100 dark:border-gray-700 pb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                        </svg>
                        Informasi Pengiriman
                    </h3>

                    <div class="space-y-4 text-sm mt-4">
                        <div class="bg-gray-50 dark:bg-gray-700/30 p-3 rounded-lg">
                            <span class="block text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-1">Nama Pemesan</span>
                            <span class="font-medium text-gray-900 dark:text-white text-base">{{ $order->user->name }}</span>
                            <div class="text-xs text-gray-500 mt-0.5">{{ $order->user->email }}</div>
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-gray-50 dark:bg-gray-700/30 p-3 rounded-lg">
                                <span class="block text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-1">Nomor HP/WA</span>
                                <span class="font-medium text-gray-900 dark:text-white">{{ $order->phone }}</span>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-700/30 p-3 rounded-lg">
                                <span class="block text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-1">Tanggal Pesanan</span>
                                <span class="font-medium text-gray-900 dark:text-white">{{ $order->created_at->format('d M Y') }}</span>
                            </div>
                        </div>

                        <div class="bg-gray-50 dark:bg-gray-700/30 p-3 rounded-lg">
                            <span class="block text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-1">Alamat Tujuan</span>
                            <span class="font-medium text-gray-900 dark:text-white leading-relaxed block mt-1">{{ $order->shipping_address }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection