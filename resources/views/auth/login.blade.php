<x-guest-layout>
    @section('title', 'Masuk')

    {{-- ================= HEADING ================= --}}
<div class="mb-8 text-center">

    {{-- Logo --}}
    <div class="mb-4 flex justify-center">

        <div class="flex h-16 w-16 items-center justify-center rounded-full bg-rose-100 shadow-sm dark:bg-rose-500/10">

            <svg
                class="h-9 w-9"
                viewBox="0 0 300 300"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <circle
                    cx="150"
                    cy="150"
                    r="118"
                    fill="none"
                    stroke="#d6a5ad"
                    stroke-width="6"
                />

                <path
                    fill="#d6a5ad"
                    d="M150 85
                       C170 110, 170 140, 150 160
                       C130 140, 130 110, 150 85Z"
                />

                <path
                    fill="#c98d98"
                    d="M95 130
                       C120 120, 145 130, 150 160
                       C120 165, 100 155, 95 130Z"
                />

                <path
                    fill="#c98d98"
                    d="M205 130
                       C180 120, 155 130, 150 160
                       C180 165, 200 155, 205 130Z"
                />

                <path
                    fill="#ddb1b9"
                    d="M110 175
                       C130 165, 145 175, 150 160
                       C140 195, 120 195, 110 175Z"
                />

                <path
                    fill="#ddb1b9"
                    d="M190 175
                       C170 165, 155 175, 150 160
                       C160 195, 180 195, 190 175Z"
                />

                <path
                    fill="none"
                    stroke="#7d8b5a"
                    stroke-width="6"
                    stroke-linecap="round"
                    d="M150 160
                       C145 200, 145 220, 150 245"
                />
            </svg>

        </div>

    </div>

    <h1 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-white">
        YuzaStore
    </h1>

    <p class="mt-1 text-xs uppercase tracking-[0.3em] text-rose-400">
        Flower Boutique
    </p>

    <div class="mt-5 space-y-2">
        <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-100">
            Selamat Datang 🌸
        </h2>

        <p class="mx-auto max-w-sm text-sm leading-relaxed text-gray-500 dark:text-gray-400">
            Masuk ke akun kamu dan temukan buket bunga terbaik
            untuk wisuda, ulang tahun, anniversary,
            dan momen spesial lainnya.
        </p>
    </div>
</div>

    {{-- Session Status --}}
    @if (session('status'))
        <div class="mb-4 rounded-xl bg-pink-50 px-4 py-3 text-sm font-medium text-pink-600 dark:bg-pink-900/20">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        {{-- ================= EMAIL ================= --}}
        <div class="mb-5">
            <label
                for="email"
                class="mb-2 block text-sm font-semibold text-gray-700 dark:text-gray-300"
            >
                Email
            </label>

            <div class="relative">

                <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 text-pink-400">
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
                    autofocus
                    autocomplete="username"
                    placeholder="nama@email.com"
                    class="w-full rounded-2xl border border-pink-100 bg-pink-50/40 py-3 pr-4 pl-11 text-sm text-gray-900 outline-none transition placeholder:text-pink-300 focus:border-pink-300 focus:ring-2 focus:ring-pink-300 dark:border-gray-600 dark:bg-gray-700/50 dark:text-white dark:placeholder:text-gray-500"
                >
            </div>

            @error('email')
                <p class="mt-1.5 text-xs text-red-500">
                    {{ $message }}
                </p>
            @enderror
        </div>

        {{-- ================= PASSWORD ================= --}}
        <div class="mb-5">
            <label
                for="password"
                class="mb-2 block text-sm font-semibold text-gray-700 dark:text-gray-300"
            >
                Password
            </label>

            <div class="relative">

                <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 text-pink-400">
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
                    autocomplete="current-password"
                    placeholder="••••••••"
                    class="w-full rounded-2xl border border-pink-100 bg-pink-50/40 py-3 pr-4 pl-11 text-sm text-gray-900 outline-none transition placeholder:text-pink-300 focus:border-pink-300 focus:ring-2 focus:ring-pink-300 dark:border-gray-600 dark:bg-gray-700/50 dark:text-white dark:placeholder:text-gray-500"
                >
            </div>

            @error('password')
                <p class="mt-1.5 text-xs text-red-500">
                    {{ $message }}
                </p>
            @enderror
        </div>

        {{-- Remember & Forgot --}}
        <div class="mb-6 flex items-center justify-between">

            <label
                for="remember_me"
                class="inline-flex cursor-pointer items-center"
            >
                <input
                    id="remember_me"
                    type="checkbox"
                    name="remember"
                    class="h-4 w-4 rounded border-pink-300 text-pink-500 focus:ring-pink-400"
                >

                <span class="ms-2 text-sm text-gray-500 dark:text-gray-400">
                    Ingat saya
                </span>
            </label>

            @if (Route::has('password.request'))
                <a
                    href="{{ route('password.request') }}"
                    class="text-sm font-medium text-pink-500 transition hover:text-pink-600"
                >
                    Lupa password?
                </a>
            @endif

        </div>

        {{-- ================= LOGIN BUTTON ================= --}}
        <button
            type="submit"
            class="w-full rounded-2xl bg-gradient-to-r from-pink-400 to-pink-500 px-4 py-3 text-sm font-bold text-white shadow-lg shadow-pink-400/30 transition-all duration-200 hover:scale-[1.01] hover:from-pink-500 hover:to-pink-600"
        >
            Masuk ke YuzaStore
        </button>

        {{-- Divider --}}
        <div class="my-6 flex items-center">
            <div class="h-px flex-1 bg-gray-200 dark:bg-gray-700"></div>

            <span class="px-4 text-xs text-gray-400">
                atau
            </span>

            <div class="h-px flex-1 bg-gray-200 dark:bg-gray-700"></div>
        </div>

        {{-- Google Button --}}
        <button
    type="button"
    disabled
    class="w-full flex items-center justify-center gap-3 py-3 px-4 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-600 rounded-xl text-sm font-medium text-gray-600 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors opacity-50 cursor-not-allowed"
>
    {{-- Logo Google --}}
    <svg
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 48 48"
        class="w-5 h-5 flex-shrink-0"
    >
        <path fill="#EA4335"
            d="M24 9.5c3.54 0 6.69 1.22 9.18 3.6l6.85-6.85C35.91 2.38 30.4 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/>

        <path fill="#4285F4"
            d="M46.98 24.55c0-1.57-.14-3.09-.39-4.55H24v9.02h12.94c-.58 2.96-2.25 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/>

        <path fill="#FBBC05"
            d="M10.54 28.41A14.97 14.97 0 019.5 24c0-1.53.26-3.01.74-4.41l-7.98-6.19A23.93 23.93 0 000 24c0 3.84.92 7.47 2.56 10.59l7.98-6.18z"/>

        <path fill="#34A853"
            d="M24 48c6.48 0 11.91-2.13 15.88-5.81l-7.73-6c-2.15 1.45-4.92 2.31-8.15 2.31-6.26 0-11.57-4.22-13.46-9.91l-7.98 6.18C6.51 42.62 14.62 48 24 48z"/>
    </svg>

    <span>Masuk dengan Google (Segera Hadir)</span>
</button>

        {{-- Register --}}
        <p class="mt-6 text-center text-sm text-gray-500 dark:text-gray-400">
            Belum punya akun?

            <a
                href="{{ route('register') }}"
                class="font-semibold text-pink-500 transition hover:text-pink-600"
            >
                Daftar sekarang
            </a>
        </p>
    </form>
</x-guest-layout>