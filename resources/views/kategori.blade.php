@extends('layouts.app')

@section('title', 'Kategori Bunga')

@section('content')

<div class="max-w-7xl mx-auto py-10">

    {{-- Header --}}
    <div class="text-center mb-14">
        <h1 class="text-5xl font-bold text-pink-500">
            🌸 Kategori Bunga 🌸
        </h1>

        <p class="mt-4 text-gray-500 max-w-2xl mx-auto">
            Temukan berbagai koleksi bunga terbaik untuk setiap momen spesial.
            Dari buket romantis hingga rangkaian bunga wisuda dan pernikahan.
        </p>
    </div>

    {{-- Kategori --}}
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

        {{-- Romantic --}}
        <div class="group bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl hover:-translate-y-2 transition duration-500">

            <div class="overflow-hidden">
                <img src="https://i.pinimg.com/736x/4a/84/f9/4a84f9ea84c34984c5eb655522aeb547.jpg"
                    class="w-full h-72 object-cover group-hover:scale-110 transition duration-700">
            </div>

            <div class="p-6 text-center">

                <div class="text-5xl mb-4">
                    🌹
                </div>

                <h2 class="text-2xl font-bold text-gray-800">
                    Romantic
                </h2>

                <p class="text-gray-500 mt-3">
                    Buket bunga mawar cantik untuk menyatakan cinta dan kasih sayang.
                </p>

                <a href="{{ route('products.index') }}"
                    class="inline-block mt-6 bg-pink-500 hover:bg-pink-600 text-white px-6 py-3 rounded-full transition">
                    Lihat Produk
                </a>

            </div>

        </div>

        {{-- Graduation --}}
        <div class="group bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl hover:-translate-y-2 transition duration-500">

            <div class="overflow-hidden">
                <img src="https://i.pinimg.com/736x/35/17/22/3517225d77bc96bd19bafdad740808e8.jpg"
                    class="w-full h-72 object-cover group-hover:scale-110 transition duration-700">
            </div>

            <div class="p-6 text-center">

                <div class="text-5xl mb-4">
                    🎓
                </div>

                <h2 class="text-2xl font-bold text-gray-800">
                    Graduation
                </h2>

                <p class="text-gray-500 mt-3">
                    Buket bunga wisuda elegan sebagai hadiah untuk merayakan pencapaian.
                </p>

                <a href="{{ route('products.index') }}"
                    class="inline-block mt-6 bg-pink-500 hover:bg-pink-600 text-white px-6 py-3 rounded-full transition">
                    Lihat Produk
                </a>

            </div>

        </div>

        {{-- Wedding --}}
        <div class="group bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl hover:-translate-y-2 transition duration-500">

            <div class="overflow-hidden">
                <img src="https://i.pinimg.com/1200x/04/d1/a3/04d1a39ab597558289c28e7a312110c1.jpg"
                    class="w-full h-72 object-cover group-hover:scale-110 transition duration-700">
            </div>

            <div class="p-6 text-center">

                <div class="text-5xl mb-4">
                    💍
                </div>

                <h2 class="text-2xl font-bold text-gray-800">
                    Wedding
                </h2>

                <p class="text-gray-500 mt-3">
                    Rangkaian bunga eksklusif untuk melengkapi hari bahagia pernikahan.
                </p>

                <a href="{{ route('products.index') }}"
                    class="inline-block mt-6 bg-pink-500 hover:bg-pink-600 text-white px-6 py-3 rounded-full transition">
                    Lihat Produk
                </a>

            </div>

        </div>

        {{-- Anniversary --}}
        <div class="group bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl hover:-translate-y-2 transition duration-500">

            <div class="overflow-hidden">
                <img src="https://i.pinimg.com/1200x/8f/76/00/8f7600dd757c1035e8f811288d7434a3.jpg"
                    class="w-full h-72 object-cover group-hover:scale-110 transition duration-700">
            </div>

            <div class="p-6 text-center">

                <div class="text-5xl mb-4">
                    💖
                </div>

                <h2 class="text-2xl font-bold text-gray-800">
                    Anniversary
                </h2>

                <p class="text-gray-500 mt-3">
                    Buket spesial untuk merayakan ulang tahun pernikahan maupun hubungan.
                </p>

                <a href="{{ route('products.index') }}"
                    class="inline-block mt-6 bg-pink-500 hover:bg-pink-600 text-white px-6 py-3 rounded-full transition">
                    Lihat Produk
                </a>

            </div>

        </div>

        {{-- Birthday --}}
        <div class="group bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl hover:-translate-y-2 transition duration-500">

            <div class="overflow-hidden">
                <img src="https://i.pinimg.com/1200x/98/60/38/9860384458aea7cfaa403655580cfc83.jpg"
                    class="w-full h-72 object-cover group-hover:scale-110 transition duration-700">
            </div>

            <div class="p-6 text-center">

                <div class="text-5xl mb-4">
                    🎂
                </div>

                <h2 class="text-2xl font-bold text-gray-800">
                    Birthday
                </h2>

                <p class="text-gray-500 mt-3">
                    Bunga cantik sebagai hadiah ulang tahun yang berkesan.
                </p>

                <a href="{{ route('products.index') }}"
                    class="inline-block mt-6 bg-pink-500 hover:bg-pink-600 text-white px-6 py-3 rounded-full transition">
                    Lihat Produk
                </a>

            </div>

        </div>

        {{-- Custom Bouquet --}}
        <div class="group bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl hover:-translate-y-2 transition duration-500">

            <div class="overflow-hidden">
                <img src="https://i.pinimg.com/1200x/55/b3/f0/55b3f0e81d08f170d61a89736209aacf.jpg"
                    class="w-full h-72 object-cover group-hover:scale-110 transition duration-700">
            </div>

            <div class="p-6 text-center">

                <div class="text-5xl mb-4">
                    💐
                </div>

                <h2 class="text-2xl font-bold text-gray-800">
                    Custom Bouquet
                </h2>

                <p class="text-gray-500 mt-3">
                    Rangkai sendiri buket impian sesuai warna, jenis bunga, dan budget.
                </p>

                <a href="{{ route('products.index') }}"
                    class="inline-block mt-6 bg-pink-500 hover:bg-pink-600 text-white px-6 py-3 rounded-full transition">
                    Lihat Produk
                </a>

            </div>

        </div>

    </div>

</div>

@endsection