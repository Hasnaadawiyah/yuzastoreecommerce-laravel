@extends('layouts.app')

@section('title', 'Tambah Produk')

@section('content')

<div class="max-w-5xl mx-auto">

    <div class="flex items-center justify-between mb-8">
        <h1 class="text-3xl font-bold text-gray-800">
            Tambah Produk
        </h1>

        <a href="{{ route('admin.products.index') }}"
            class="px-5 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition">
            Kembali
        </a>
    </div>

    <div class="bg-white rounded-2xl shadow-lg p-8">

        <form action="{{ route('admin.products.store') }}" method="POST">

            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                {{-- Nama Produk --}}
                <div>
                    <label class="block text-sm font-semibold mb-2">
                        Nama Produk
                    </label>

                    <input
                        type="text"
                        name="name"
                        class="w-full h-12 px-4 rounded-xl border border-gray-300 bg-white shadow-sm
                        focus:border-pink-500 focus:ring-2 focus:ring-pink-200 transition"
                        required>
                </div>

                {{-- Kategori --}}
                <div>
                    <label class="block text-sm font-semibold mb-2">
                        Kategori
                    </label>

                    <select
                        name="category_id"
                        class="w-full h-12 px-4 rounded-xl border border-gray-300 bg-white shadow-sm
                        focus:border-pink-500 focus:ring-2 focus:ring-pink-200 transition"

                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">
                                {{ $category->name }}
                            </option>
                        @endforeach

                    </select>
                </div>

                {{-- Harga --}}
                <div>
                    <label class="block text-sm font-semibold mb-2">
                        Harga
                    </label>

                    <input
                        type="number"
                        name="price"
                        class="w-full h-12 px-4 rounded-xl border border-gray-300 bg-white shadow-sm
                        focus:border-pink-500 focus:ring-2 focus:ring-pink-200 transition"
                        required>
                </div>

                {{-- Stok --}}
                <div>
                    <label class="block text-sm font-semibold mb-2">
                        Stok
                    </label>

                    <input
                        type="number"
                        name="stock"
                        value="0"
                        class="w-full h-12 px-4 rounded-xl border border-gray-300 bg-white shadow-sm
                        focus:border-pink-500 focus:ring-2 focus:ring-pink-200 transition">
                </div>

            </div>

            {{-- URL Gambar --}}
            <div class="mt-6">
                <label class="block text-sm font-semibold mb-2">
                    Gambar (URL)
                </label>

                <input
                    type="text"
                    name="image"
                    id="image"
                    placeholder="https://i.pinimg.com/....jpg"
                    class="w-full h-12 px-4 rounded-xl border border-gray-300 bg-white shadow-sm
                        focus:border-pink-500 focus:ring-2 focus:ring-pink-200 transition">

                <div class="mt-5 flex justify-center">
                    <img
                        id="imagePreview"
                        src="https://placehold.co/500x350?text=Preview+Gambar"
                        class="w-72 h-72 object-cover rounded-xl border-2 border-dashed border-pink-300 shadow-sm"
                        alt="Preview Gambar">
                </div>
            </div>

            {{-- Deskripsi --}}
            <div class="mt-6">
                <label class="block text-sm font-semibold mb-2">
                    Deskripsi
                </label>

                <textarea
                    name="description"
                    rows="5"
                    class="w-full px-4 py-3 rounded-xl border border-gray-300 bg-white shadow-sm
                    focus:border-pink-500 focus:ring-2 focus:ring-pink-200 transition resize-none"></textarea>
            </div>

            {{-- Tombol --}}
            <div class="mt-8">

                <button
                    type="submit"
                    class="bg-pink-500 hover:bg-pink-600 text-white px-8 py-3 rounded-lg font-semibold transition">

                    Simpan Produk

                </button>

            </div>

        </form>

    </div>

</div>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const imageInput = document.getElementById('image');
    const imagePreview = document.getElementById('imagePreview');

    imageInput.addEventListener('input', function () {

        let url = this.value.trim();

        if (url === "") {
            imagePreview.src = "https://placehold.co/500x350?text=Preview+Gambar";
            return;
        }

        imagePreview.src = url;

        imagePreview.onerror = function () {
            this.src = "https://placehold.co/500x350?text=Gambar+Tidak+Ditemukan";
        };

    });

});
</script>

@endsection