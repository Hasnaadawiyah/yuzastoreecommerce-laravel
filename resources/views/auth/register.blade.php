<x-guest-layout>
    @section('title', 'Daftar Akun')

    <h2 class="mb-1 text-3xl font-extrabold text-gray-900 dark:text-white">
        Buat Akun Baru 🌸
    </h2>

    <p class="mb-8 text-sm leading-6 text-gray-500 dark:text-gray-400">
        Bergabung dan nikmati pengalaman belanja bunga premium di YuzaStore
    </p>

    <form
        method="POST"
        action="{{ route('register') }}"
        class="space-y-5"
    >
        @csrf

        {{-- ===================================================== --}}
        {{-- NAME --}}
        {{-- ===================================================== --}}
        <div>

            <label
                for="name"
                class="mb-2 block text-sm font-semibold text-gray-700 dark:text-gray-300"
            >
                Nama Lengkap
            </label>

            <div class="relative">

                <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-pink-400">
                    <svg
                        class="h-5 w-5"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.5"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                        />
                    </svg>
                </span>

                <input
                    id="name"
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    required
                    autofocus
                    autocomplete="name"
                    placeholder="Masukkan nama lengkap"
                    class="w-full rounded-2xl border border-pink-100 bg-pink-50/50 py-3 pl-12 pr-4 text-sm text-gray-900 outline-none transition-all duration-300 placeholder:text-gray-400 focus:border-pink-400 focus:bg-white focus:ring-4 focus:ring-pink-100 dark:border-gray-700 dark:bg-gray-800/70 dark:text-white dark:placeholder:text-gray-500 dark:focus:border-pink-500 dark:focus:ring-pink-500/20"
                >
            </div>

            @error('name')
                <p class="mt-2 text-xs text-red-500">
                    {{ $message }}
                </p>
            @enderror

        </div>

        {{-- ===================================================== --}}
        {{-- EMAIL --}}
        {{-- ===================================================== --}}
        <div>

            <label
                for="email"
                class="mb-2 block text-sm font-semibold text-gray-700 dark:text-gray-300"
            >
                Email
            </label>

            <div class="relative">

                <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-pink-400">
                    <svg
                        class="h-5 w-5"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.5"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                        />
                    </svg>
                </span>

                <input
                    id="email"
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    autocomplete="username"
                    placeholder="nama@email.com"
                    class="w-full rounded-2xl border border-pink-100 bg-pink-50/50 py-3 pl-12 pr-4 text-sm text-gray-900 outline-none transition-all duration-300 placeholder:text-gray-400 focus:border-pink-400 focus:bg-white focus:ring-4 focus:ring-pink-100 dark:border-gray-700 dark:bg-gray-800/70 dark:text-white dark:placeholder:text-gray-500 dark:focus:border-pink-500 dark:focus:ring-pink-500/20"
                >
            </div>

            @error('email')
                <p class="mt-2 text-xs text-red-500">
                    {{ $message }}
                </p>
            @enderror

        </div>

        {{-- ===================================================== --}}
        {{-- PASSWORD --}}
        {{-- ===================================================== --}}
        <div>

            <label
                for="password"
                class="mb-2 block text-sm font-semibold text-gray-700 dark:text-gray-300"
            >
                Password
            </label>

            <div class="relative">

                <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-pink-400">
                    <svg
                        class="h-5 w-5"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.5"
                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"
                        />
                    </svg>
                </span>

                <input
                    id="password"
                    type="password"
                    name="password"
                    required
                    autocomplete="new-password"
                    placeholder="Minimal 8 karakter"
                    class="w-full rounded-2xl border border-pink-100 bg-pink-50/50 py-3 pl-12 pr-4 text-sm text-gray-900 outline-none transition-all duration-300 placeholder:text-gray-400 focus:border-pink-400 focus:bg-white focus:ring-4 focus:ring-pink-100 dark:border-gray-700 dark:bg-gray-800/70 dark:text-white dark:placeholder:text-gray-500 dark:focus:border-pink-500 dark:focus:ring-pink-500/20"
                >
            </div>

            @error('password')
                <p class="mt-2 text-xs text-red-500">
                    {{ $message }}
                </p>
            @enderror

        </div>

        {{-- ===================================================== --}}
        {{-- CONFIRM PASSWORD --}}
        {{-- ===================================================== --}}
        <div>

            <label
                for="password_confirmation"
                class="mb-2 block text-sm font-semibold text-gray-700 dark:text-gray-300"
            >
                Konfirmasi Password
            </label>

            <div class="relative">

                <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-pink-400">
                    <svg
                        class="h-5 w-5"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.5"
                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"
                        />
                    </svg>
                </span>

                <input
                    id="password_confirmation"
                    type="password"
                    name="password_confirmation"
                    required
                    autocomplete="new-password"
                    placeholder="Ulangi password"
                    class="w-full rounded-2xl border border-pink-100 bg-pink-50/50 py-3 pl-12 pr-4 text-sm text-gray-900 outline-none transition-all duration-300 placeholder:text-gray-400 focus:border-pink-400 focus:bg-white focus:ring-4 focus:ring-pink-100 dark:border-gray-700 dark:bg-gray-800/70 dark:text-white dark:placeholder:text-gray-500 dark:focus:border-pink-500 dark:focus:ring-pink-500/20"
                >
            </div>

        </div>

        {{-- ===================================================== --}}
        {{-- BUTTON --}}
        {{-- ===================================================== --}}
        <button
            type="submit"
            class="w-full rounded-2xl bg-gradient-to-r from-pink-500 via-rose-500 to-pink-500 px-4 py-3 text-sm font-bold text-white shadow-xl shadow-pink-500/20 transition-all duration-300 hover:-translate-y-0.5 hover:shadow-pink-500/40 active:scale-[0.98]"
        >
            Daftar Sekarang
        </button>

        {{-- ===================================================== --}}
        {{-- LOGIN --}}
        {{-- ===================================================== --}}
        <p class="pt-2 text-center text-sm text-gray-500 dark:text-gray-400">

            Sudah punya akun?

            <a
                href="{{ route('login') }}"
                class="font-semibold text-pink-500 transition-colors hover:text-rose-500"
            >
                Masuk di sini
            </a>

        </p>

    </form>
</x-guest-layout>