@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')

<div class="space-y-20">

    {{-- HERO --}}
    <section class="grid lg:grid-cols-2 gap-10 items-center">

        <div>

            <p class="text-pink-500 font-semibold mb-2">
                Tentang Kami
            </p>

            <h1 class="text-5xl font-extrabold text-gray-800 leading-tight">
                YuzaStore
                <span class="block text-pink-400">
                    Flower Boutique
                </span>
            </h1>

            <p class="mt-6 text-gray-600 leading-8 text-lg">
                YuzaStore Flower Boutique hadir untuk menghadirkan keindahan
                dalam setiap momen spesial Anda. Kami percaya bahwa bunga
                bukan sekadar hadiah, tetapi bahasa yang mampu menyampaikan
                cinta, rasa syukur, kebahagiaan, dan harapan.
            </p>

            <p class="mt-4 text-gray-600 leading-8">
                Dengan rangkaian bunga premium yang dirancang oleh florist
                profesional, kami berkomitmen memberikan kualitas terbaik
                untuk setiap pelanggan.
            </p>

            <a href="{{ route('products.index') }}"
                class="inline-block mt-8 bg-pink-500 hover:bg-pink-600 text-white px-8 py-3 rounded-full font-semibold shadow-lg transition">
                Belanja Sekarang
            </a>

        </div>

        <div>

            <img src="https://i.pinimg.com/736x/d8/e8/f7/d8e8f7d1b8b0681818a7a25c689bacc7.jpg"
                class="rounded-3xl shadow-2xl w-full h-[520px] object-cover">

        </div>

    </section>


    {{-- STORY --}}
    <section class="grid lg:grid-cols-2 gap-12 items-center">

        <div>

            <img src="https://i.pinimg.com/736x/0d/44/4f/0d444f29e704a74ed96f5533ed124792.jpg"
                class="rounded-3xl shadow-xl w-full">

        </div>

        <div>

            <h2 class="text-4xl font-bold text-gray-800 mb-5">
                Lebih dari Sekadar Bunga 💖
            </h2>

            <p class="text-gray-600 leading-8 mb-5">

                Sejak berdiri, YuzaStore berkomitmen menghadirkan rangkaian
                bunga premium yang dibuat dengan penuh ketelitian,
                kreativitas, dan sentuhan cinta.

            </p>

            <p class="text-gray-600 leading-8">

                Kami menggunakan bunga segar pilihan setiap hari sehingga
                menghasilkan bouquet yang elegan, tahan lama, dan mampu
                memberikan kesan terbaik untuk setiap momen berharga Anda.

            </p>

        </div>

    </section>


  {{-- KEUNGGULAN --}}
<section class="py-8">

    <div class="text-center mb-14">
        <h2 class="text-4xl font-bold text-gray-800">
            Mengapa Memilih YuzaStore?
        </h2>

        <p class="mt-3 text-gray-500 max-w-2xl mx-auto">
            Kami menghadirkan rangkaian bunga premium dengan kualitas terbaik,
            pelayanan ramah, dan pengiriman yang cepat agar setiap momen spesial
            menjadi lebih berkesan.
        </p>
    </div>

    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4">

        {{-- CARD 1 --}}
        <div
            class="group overflow-hidden rounded-3xl bg-white border border-pink-100 shadow-md hover:shadow-2xl hover:-translate-y-3 transition-all duration-500">

            <div class="overflow-hidden">
                <img
                    src="https://i.pinimg.com/736x/79/08/57/790857f56b940951408d7c692e18e844.jpg"
                    class="w-full h-56 object-cover group-hover:scale-110 transition duration-700">
            </div>

            <div class="relative px-6 pb-8 pt-12 text-center">

                <div
                    class="absolute left-1/2 -top-8 -translate-x-1/2 w-16 h-16 rounded-full bg-pink-100 border-4 border-white shadow-lg flex items-center justify-center text-3xl group-hover:rotate-12 group-hover:scale-110 transition duration-500">
                    🌸
                </div>

                <h3 class="text-xl font-bold text-gray-800">
                    Bunga Segar
                </h3>

                <p class="mt-3 text-gray-500 leading-relaxed">
                    Menggunakan bunga pilihan yang dipetik segar setiap hari agar
                    tetap cantik dan tahan lama.
                </p>

            </div>
        </div>

        {{-- CARD 2 --}}
        <div
            class="group overflow-hidden rounded-3xl bg-white border border-pink-100 shadow-md hover:shadow-2xl hover:-translate-y-3 transition-all duration-500">

            <div class="overflow-hidden">
                <img
                    src="https://i.pinimg.com/736x/5e/bc/bd/5ebcbd376a2f79e9f4808f0343f0fcf9.jpg"
                    class="w-full h-56 object-cover group-hover:scale-110 transition duration-700">
            </div>

            <div class="relative px-6 pb-8 pt-12 text-center">

                <div
                    class="absolute left-1/2 -top-8 -translate-x-1/2 w-16 h-16 rounded-full bg-pink-100 border-4 border-white shadow-lg flex items-center justify-center text-3xl group-hover:rotate-12 group-hover:scale-110 transition duration-500">
                    💐
                </div>

                <h3 class="text-xl font-bold text-gray-800">
                    Handmade Bouquet
                </h3>

                <p class="mt-3 text-gray-500 leading-relaxed">
                    Dirangkai langsung oleh florist profesional dengan sentuhan
                    elegan dan penuh cinta.
                </p>

            </div>
        </div>

        {{-- CARD 3 --}}
        <div
            class="group overflow-hidden rounded-3xl bg-white border border-pink-100 shadow-md hover:shadow-2xl hover:-translate-y-3 transition-all duration-500">

            <div class="overflow-hidden">
                <img
                    src="https://i.pinimg.com/736x/f9/b4/86/f9b486bc218b1517bed7b7ee1f04e8a0.jpg"
                    class="w-full h-56 object-cover group-hover:scale-110 transition duration-700">
            </div>

            <div class="relative px-6 pb-8 pt-12 text-center">

                <div
                    class="absolute left-1/2 -top-8 -translate-x-1/2 w-16 h-16 rounded-full bg-pink-100 border-4 border-white shadow-lg flex items-center justify-center text-3xl group-hover:rotate-12 group-hover:scale-110 transition duration-500">
                    🚚
                </div>

                <h3 class="text-xl font-bold text-gray-800">
                    Pengiriman Cepat
                </h3>

                <p class="mt-3 text-gray-500 leading-relaxed">
                    Pengiriman aman, cepat, dan tepat waktu sehingga bunga tiba
                    dalam kondisi terbaik.
                </p>

            </div>
        </div>

        {{-- CARD 4 --}}
        <div
            class="group overflow-hidden rounded-3xl bg-white border border-pink-100 shadow-md hover:shadow-2xl hover:-translate-y-3 transition-all duration-500">

            <div class="overflow-hidden">
                <img
                    src="https://i.pinimg.com/1200x/c9/fa/87/c9fa87c45e53da2fba50806b96c54c3e.jpg"
                    class="w-full h-56 object-cover group-hover:scale-110 transition duration-700">
            </div>

            <div class="relative px-6 pb-8 pt-12 text-center">

                <div
                    class="absolute left-1/2 -top-8 -translate-x-1/2 w-16 h-16 rounded-full bg-pink-100 border-4 border-white shadow-lg flex items-center justify-center text-3xl group-hover:rotate-12 group-hover:scale-110 transition duration-500">
                    ❤️
                </div>

                <h3 class="text-xl font-bold text-gray-800">
                    Pelayanan Terbaik
                </h3>

                <p class="mt-3 text-gray-500 leading-relaxed">
                    Tim kami siap membantu dengan pelayanan yang ramah dan
                    responsif demi kepuasan pelanggan.
                </p>

            </div>
        </div>

    </div>

</section>

    {{-- STATISTIK --}}
    <section class="grid md:grid-cols-4 gap-6">

        <div class="text-center bg-white rounded-3xl shadow p-8">

            <h2 class="text-4xl font-bold text-pink-500">
                5.000+
            </h2>

            <p class="mt-2 text-gray-600">
                Pelanggan Bahagia
            </p>

        </div>

        <div class="text-center bg-white rounded-3xl shadow p-8">

            <h2 class="text-4xl font-bold text-pink-500">
                15.000+
            </h2>

            <p class="mt-2 text-gray-600">
                Bouquet Terjual
            </p>

        </div>

        <div class="text-center bg-white rounded-3xl shadow p-8">

            <h2 class="text-4xl font-bold text-pink-500">
                5+
            </h2>

            <p class="mt-2 text-gray-600">
                Tahun Pengalaman
            </p>

        </div>

        <div class="text-center bg-white rounded-3xl shadow p-8">

            <h2 class="text-4xl font-bold text-pink-500">
                100%
            </h2>

            <p class="mt-2 text-gray-600">
                Kepuasan Pelanggan
            </p>

        </div>

    </section>

    {{-- TESTIMONI PELANGGAN --}}
<section class="py-10">

    <div class="text-center mb-12">

        <h2 class="text-4xl font-bold text-gray-800">
            Apa Kata Pelanggan Kami?
        </h2>

        <p class="mt-3 text-gray-500">
            Ribuan pelanggan telah mempercayakan momen spesial mereka kepada YuzaStore.
        </p>

    </div>

    <div class="grid md:grid-cols-3 gap-8">

        {{-- Testimoni 1 --}}
        <div class="bg-white rounded-3xl border border-pink-100 shadow-md hover:shadow-xl hover:-translate-y-2 transition duration-300 p-8">

            <div class="flex items-center gap-4">

                <img
                    src="https://randomuser.me/api/portraits/women/65.jpg"
                    class="w-16 h-16 rounded-full object-cover border-4 border-pink-200">

                <div>

                    <h3 class="font-bold text-lg text-gray-800">
                        May Anderson
                    </h3>

                    <p class="text-gray-500 text-sm">
                        Bandung
                    </p>

                </div>

            </div>

            <div class="mt-5 text-yellow-400 text-xl">
                ⭐⭐⭐⭐⭐
            </div>

            <p class="mt-4 text-gray-600 leading-7 italic">
                "Bouquet yang saya pesan sangat cantik dan segar.
                Pengirimannya cepat, bunganya masih fresh,
                dan pelayanan adminnya ramah sekali."
            </p>

        </div>

        {{-- Testimoni 2 --}}
        <div class="bg-white rounded-3xl border border-pink-100 shadow-md hover:shadow-xl hover:-translate-y-2 transition duration-300 p-8">

            <div class="flex items-center gap-4">

                <img
                    src="https://randomuser.me/api/portraits/men/42.jpg"
                    class="w-16 h-16 rounded-full object-cover border-4 border-pink-200">

                <div>

                    <h3 class="font-bold text-lg text-gray-800">
                        Robert
                    </h3>

                    <p class="text-gray-500 text-sm">
                        Jakarta
                    </p>

                </div>

            </div>

            <div class="mt-5 text-yellow-400 text-xl">
                ⭐⭐⭐⭐⭐
            </div>

            <p class="mt-4 text-gray-600 leading-7 italic">
                "Saya membeli bunga anniversary.
                Hasilnya jauh lebih bagus daripada foto katalog.
                Istri saya sangat menyukainya."
            </p>

        </div>

        {{-- Testimoni 3 --}}
        <div class="bg-white rounded-3xl border border-pink-100 shadow-md hover:shadow-xl hover:-translate-y-2 transition duration-300 p-8">

            <div class="flex items-center gap-4">

                <img
                    src="https://randomuser.me/api/portraits/women/22.jpg"
                    class="w-16 h-16 rounded-full object-cover border-4 border-pink-200">

                <div>

                    <h3 class="font-bold text-lg text-gray-800">
                        Jennifer tan
                    </h3>

                    <p class="text-gray-500 text-sm">
                        Surabaya
                    </p>

                </div>

            </div>

            <div class="mt-5 text-yellow-400 text-xl">
                ⭐⭐⭐⭐⭐
            </div>

            <p class="mt-4 text-gray-600 leading-7 italic">
                "Bouquet wisuda yang saya pesan sangat elegan.
                Bunganya harum, segar, dan dikemas dengan sangat rapi.
                Sangat recommended!"
            </p>

        </div>

    </div>

</section>

    {{-- VISI MISI --}}
    <section class="grid lg:grid-cols-2 gap-10">

        <div>

            <h2 class="text-3xl font-bold mb-5">
                Visi Kami
            </h2>

            <p class="text-gray-600 leading-8">

                Menjadi Flower Boutique terpercaya di Indonesia yang mampu
                menghadirkan kebahagiaan melalui setiap rangkaian bunga
                berkualitas premium.

            </p>

        </div>

        <div>

            <h2 class="text-3xl font-bold mb-5">
                Misi Kami
            </h2>

            <ul class="space-y-4 text-gray-600">

                <li>🌸 Menyediakan bunga segar berkualitas tinggi.</li>

                <li>💐 Menghasilkan bouquet yang elegan dan eksklusif.</li>

                <li>❤️ Memberikan pelayanan terbaik kepada pelanggan.</li>

                <li>🚚 Menjamin pengiriman cepat dan aman.</li>

            </ul>

        </div>

    </section>


    {{-- QUOTE --}}
    <section class="bg-pink-50 rounded-3xl p-12 text-center">

        <h2 class="text-3xl font-bold text-gray-800">

            "Setiap bunga memiliki cerita, dan kami membantu Anda
            menyampaikannya dengan indah."

        </h2>

        <p class="mt-6 text-gray-500">
            — Tim YuzaStore Flower Boutique
        </p>

    </section>

</div>

@endsection