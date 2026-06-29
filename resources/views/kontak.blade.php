@extends('layouts.app')

@section('title', 'Hubungi Kami')

@section('content')

<div class="max-w-7xl mx-auto py-10">

    {{-- HEADER --}}
    <div class="text-center mb-14">

        <h1 class="text-5xl font-bold text-pink-500">
            Hubungi Kami 📞
        </h1>

        <p class="mt-4 text-gray-500 max-w-2xl mx-auto">
            Kami siap membantu Anda memilih rangkaian bunga terbaik untuk setiap
            momen spesial. Jangan ragu menghubungi tim YuzaStore.
        </p>

    </div>

    <div class="grid lg:grid-cols-2 gap-10">

        {{-- INFORMASI --}}
        <div class="space-y-6">

            <div class="bg-white rounded-3xl shadow-lg border border-pink-100 p-8">

                <h2 class="text-2xl font-bold text-gray-800 mb-6">
                    Informasi Toko
                </h2>

                <div class="space-y-5">

                    <div class="flex items-start gap-4">

                        <div class="w-12 h-12 rounded-2xl bg-pink-100 flex items-center justify-center text-2xl">
                            📍
                        </div>

                        <div>
                            <h3 class="font-semibold text-gray-800">
                                Alamat
                            </h3>

                            <p class="text-gray-500">
                                Jl. Mawar Indah No. 25,
                                Bandung, Jawa Barat
                            </p>

                        </div>

                    </div>

                    <div class="flex items-start gap-4">

                        <div class="w-12 h-12 rounded-2xl bg-pink-100 flex items-center justify-center text-2xl">
                            📞
                        </div>

                        <div>

                            <h3 class="font-semibold text-gray-800">
                                Telepon
                            </h3>

                            <p class="text-gray-500">
                                +62 812-3456-7890
                            </p>

                        </div>

                    </div>

                    <div class="flex items-start gap-4">

                        <div class="w-12 h-12 rounded-2xl bg-pink-100 flex items-center justify-center text-2xl">
                            ✉️
                        </div>

                        <div>

                            <h3 class="font-semibold text-gray-800">
                                Email
                            </h3>

                            <p class="text-gray-500">
                                yuzastore@gmail.com
                            </p>

                        </div>

                    </div>

                    <div class="flex items-start gap-4">

                        <div class="w-12 h-12 rounded-2xl bg-pink-100 flex items-center justify-center text-2xl">
                            🕒
                        </div>

                        <div>

                            <h3 class="font-semibold text-gray-800">
                                Jam Operasional
                            </h3>

                            <p class="text-gray-500">
                                Senin - Minggu
                            </p>

                            <p class="text-gray-500">
                                08.00 - 21.00 WIB
                            </p>

                        </div>

                    </div>

                </div>

            </div>

            {{-- MAP --}}
            <div class="overflow-hidden rounded-3xl shadow-lg border border-pink-100">

                <iframe
                    src="https://www.google.com/maps?q=Bandung&output=embed"
                    width="100%"
                    height="320"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy">
                </iframe>

            </div>

        </div>

        {{-- FORM --}}
        <div class="bg-white rounded-3xl shadow-lg border border-pink-100 p-8">

            <h2 class="text-2xl font-bold text-gray-800 mb-6">
                Kirim Pesan
            </h2>

            <form class="space-y-5">

                <div>

                    <label class="block mb-2 font-medium text-gray-700">
                        Nama
                    </label>

                    <input
                        type="text"
                        placeholder="Masukkan nama"
                        class="w-full rounded-xl border border-pink-200 px-4 py-3 focus:ring-2 focus:ring-pink-300 outline-none">

                </div>

                <div>

                    <label class="block mb-2 font-medium text-gray-700">
                        Email
                    </label>

                    <input
                        type="email"
                        placeholder="Masukkan email"
                        class="w-full rounded-xl border border-pink-200 px-4 py-3 focus:ring-2 focus:ring-pink-300 outline-none">

                </div>

                <div>

                    <label class="block mb-2 font-medium text-gray-700">
                        Subjek
                    </label>

                    <input
                        type="text"
                        placeholder="Subjek pesan"
                        class="w-full rounded-xl border border-pink-200 px-4 py-3 focus:ring-2 focus:ring-pink-300 outline-none">

                </div>

                <div>

                    <label class="block mb-2 font-medium text-gray-700">
                        Pesan
                    </label>

                    <textarea
                        rows="6"
                        placeholder="Tulis pesan Anda..."
                        class="w-full rounded-xl border border-pink-200 px-4 py-3 focus:ring-2 focus:ring-pink-300 outline-none"></textarea>

                </div>

                <button
                    type="submit"
                    class="w-full py-3 rounded-xl bg-pink-500 hover:bg-pink-600 text-white font-semibold transition">

                    Kirim Pesan

                </button>

            </form>

        </div>

    </div>

</div>

@endsection