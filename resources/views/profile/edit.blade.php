@extends('layouts.app')

@section('title', 'Profil Saya')

@section('content')

<div class="max-w-5xl mx-auto">

    <div class="bg-white rounded-3xl shadow-xl overflow-hidden border border-pink-100">

        {{-- HEADER --}}
        <div class="relative overflow-hidden bg-gradient-to-r from-pink-100 via-pink-50 to-pink-100 px-10 py-10">

            {{-- Dekorasi bunga kanan --}}
            <div class="absolute -right-10 -top-6 opacity-20 pointer-events-none">
                <img
                    src="https://i.pinimg.com/736x/6e/f0/07/6ef007aa7cc396c71ea89417c65bfb93.jpg"
                    alt="Flower"
                    class="w-52 h-52 object-contain">
            </div>

            {{-- Dekorasi bunga kiri bawah --}}
            <div class="absolute -left-6 bottom-0 opacity-10 pointer-events-none">
                <img
                    src="https://i.pinimg.com/736x/6e/f0/07/6ef007aa7cc396c71ea89417c65bfb93.jpg"
                    alt="Flower"
                    class="w-24 h-24 rotate-180">
            </div>

            <div class="relative flex items-center gap-6 z-10">

    @if(Auth::user()->profile_photo)
        <img
            src="{{ asset('storage/' . Auth::user()->profile_photo) }}"
            alt="Foto Profil"
            class="w-20 h-20 rounded-full object-cover shadow-xl border-4 border-white">
    @else
        <img
            src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=ec4899&color=fff&size=128"
            alt="Foto Profil"
            class="w-20 h-20 rounded-full object-cover shadow-xl border-4 border-white">
    @endif

    <div>
        <h1 class="text-4xl font-bold text-gray-800">
            Profil Saya
        </h1>

                    <p class="text-gray-500 mt-2">
                        Kelola informasi akun dan keamanan Anda
                    </p>
                </div>

            </div>

        </div>

        <div class="p-10 space-y-8">

            {{-- PROFILE --}}
            <div class="rounded-3xl border border-pink-100 bg-white shadow-sm p-8">

                <div class="flex items-center gap-3 mb-6">

                    <div class="w-12 h-12 rounded-xl bg-pink-100 flex items-center justify-center text-2xl">
                        👤
                    </div>

                    <div>
                        <h2 class="text-2xl font-bold text-gray-800">
                            Informasi Profil
                        </h2>

                        <p class="text-gray-500 text-sm">
                            Perbarui nama dan email akun Anda.
                        </p>
                    </div>

                </div>

                @include('profile.partials.update-profile-information-form')

            </div>

            {{-- PASSWORD --}}
            <div class="rounded-3xl border border-pink-100 bg-white shadow-sm p-8">

                <div class="flex items-center gap-3 mb-6">

                    <div class="w-12 h-12 rounded-xl bg-pink-100 flex items-center justify-center text-2xl">
                        🔒
                    </div>

                    <div>
                        <h2 class="text-2xl font-bold text-gray-800">
                            Ubah Password
                        </h2>

                        <p class="text-gray-500 text-sm">
                            Gunakan password yang kuat untuk keamanan akun.
                        </p>
                    </div>

                </div>

                @include('profile.partials.update-password-form')

            </div>

            {{-- DELETE --}}
            <div class="rounded-3xl border border-pink-200 bg-pink-50 p-8">

                <div class="flex items-center gap-3 mb-6">

                    <div class="w-12 h-12 rounded-xl bg-pink-100 flex items-center justify-center text-2xl">
                        🗑️
                    </div>

                    <div>
                        <h2 class="text-2xl font-bold text-pink-600">
                            Hapus Akun
                        </h2>

                        <p class="text-pink-400 text-sm">
                            Setelah akun dihapus, semua data akan hilang permanen.
                        </p>
                    </div>

                </div>

                @include('profile.partials.delete-user-form')

            </div>

        </div>

    </div>

</div>

@endsection