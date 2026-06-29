@extends('layouts.app')

@section('title', 'Kelola Stok Produk')

@section('content') <div class="mb-6 flex justify-between items-center"> <div> <h2 class="text-2xl font-bold text-gray-800 dark:text-white">
Kelola Stok Produk </h2> <p class="text-sm text-gray-500 mt-1">
Daftar semua produk beserta informasi stok saat ini. </p> </div>

    <a href="{{ route('admin.products.create') }}"
    class="bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 rounded-lg text-sm font-medium flex items-center gap-2">

    <svg xmlns="http://www.w3.org/2000/svg"
         class="h-4 w-4"
         fill="none"
         viewBox="0 0 24 24"
         stroke="currentColor">
        <path stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M12 4v16m8-8H4"/>
    </svg>

    Tambah Produk
</a>
</div>

<div class="bg-white dark:bg-gray-800 shadow-sm rounded-xl border border-gray-100 dark:border-gray-700 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-50 dark:bg-gray-700/50 text-gray-500 dark:text-gray-400 uppercase text-xs font-semibold">
                    <th class="py-4 px-6">Produk</th>
                    <th class="py-4 px-6">Harga</th>
                    <th class="py-4 px-6 text-center">Stok</th>
                    <th class="py-4 px-6 text-center">Aksi</th>
                </tr>
            </thead>

            <tbody class="text-gray-600 dark:text-gray-300 text-sm divide-y divide-gray-100 dark:divide-gray-700">
                @forelse ($products as $product)
                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors">
                        <td class="py-4 px-6">
                            <div class="flex items-center gap-3">
                                @if ($product->image)
                                    <img
                                    src="{{ $product->image }}"
                                    alt="{{ $product->name }}"
                                    class="w-12 h-12 rounded-lg object-cover"
                                    onerror="this.src='https: //placehold.co/80x80?text=No+Image'"
                                >
                                @else
                                    <div class="w-10 h-10 rounded bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-400">
                                        <svg
                                            class="h-5 w-5"
                                            fill="none"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"
                                            />
                                        </svg>
                                    </div>
                                @endif

                                <span class="font-medium text-gray-900 dark:text-white">
                                    {{ $product->name }}
                                </span>
                            </div>
                        </td>

                        <td class="py-4 px-6 font-medium text-gray-900 dark:text-white">
                            Rp {{ number_format($product->price, 0, ',', '.') }}
                        </td>

                        <td class="py-4 px-6 text-center">
                            <span
                                class="px-2.5 py-1 text-xs font-semibold rounded-full {{ $product->stock > 5
                                    ? 'bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400'
                                    : 'bg-red-100 text-red-800 dark:bg-red-900/30 dark:text-red-400' }}"
                            >
                                {{ $product->stock }}
                            </span>
                        </td>

                        <td class="py-4 px-6">
    <div class="flex justify-center items-center gap-3">

        <a href="{{ route('admin.products.edit', $product) }}"
            class="text-blue-500 hover:text-blue-700 font-medium">
            Edit
        </a>

        <form action="{{ route('admin.products.destroy', $product) }}"
              method="POST"
              onsubmit="return confirm('Yakin ingin menghapus produk ini?')">

            @csrf
            @method('DELETE')

            <button
                type="submit"
                class="text-red-500 hover:text-red-700 font-medium">
                Hapus
            </button>

        </form>

    </div>
</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="py-8 text-center text-gray-500">
                            Belum ada produk saat ini.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="p-4 border-t border-gray-100 dark:border-gray-700">
        {{ $products->links() }}
    </div>
</div>

@endsection
