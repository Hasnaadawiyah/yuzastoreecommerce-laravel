@extends('layouts.app')

@section('title', 'Edit Stok Produk')

@section('content')

<div class="max-w-xl mx-auto bg-white dark:bg-gray-800 p-6 rounded-xl shadow">

    <h2 class="text-2xl font-bold mb-6">
        Edit Stok Produk
    </h2>

    <form action="{{ route('admin.products.update', $product) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block font-medium mb-2">
                Nama Produk
            </label>

            <input
                type="text"
                value="{{ $product->name }}"
                disabled
                class="w-full border rounded-lg p-2 bg-gray-100"
            >
        </div>

        <div class="mb-6">
            <label class="block font-medium mb-2">
                Stok
            </label>

            <input
                type="number"
                name="stock"
                value="{{ $product->stock }}"
                class="w-full border rounded-lg p-2"
            >
        </div>

        <button
            type="submit"
            class="bg-pink-500 hover:bg-pink-600 text-white px-5 py-2 rounded-lg"
        >
            Simpan
        </button>

    </form>

</div>

@endsection