<!DOCTYPE html>
<html lang="id">
<head>
    {{-- ===================================================== --}}
    {{-- META --}}
    {{-- ===================================================== --}}
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <meta
        name="csrf-token"
        content="{{ csrf_token() }}"
    >

    {{-- ===================================================== --}}
    {{-- TITLE --}}
    {{-- ===================================================== --}}
    <title>
        YuzaStore - @yield('title', 'Flower Boutique')
    </title>

    {{-- ===================================================== --}}
    {{-- ASSETS --}}
    {{-- ===================================================== --}}
    @vite([
        'resources/css/app.css',
        'resources/js/app.js',
    ])

    {{-- ===================================================== --}}
    {{-- DARK MODE --}}
    {{-- ===================================================== --}}
    <script>
        if (
            localStorage.getItem('theme') === 'dark' ||
            (
                !localStorage.getItem('theme') &&
                window.matchMedia('(prefers-color-scheme: dark)').matches
            )
        ) {
            document.documentElement.classList.add('dark');
        }
    </script>
</head>

<body class="bg-rose-50 font-sans antialiased transition-colors duration-300 dark:bg-gray-950">

    <div class="flex min-h-screen">

        {{-- ===================================================== --}}
        {{-- LEFT SIDE --}}
        {{-- ===================================================== --}}
        <div class="relative hidden overflow-hidden lg:flex lg:w-1/2">

            {{-- Background Image --}}
            <img
                src="https://i.pinimg.com/736x/65/fd/23/65fd239132051c6cb38231d9e448b9f6.jpg"
                alt="YuzaStore Florist"
                class="absolute inset-0 h-full w-full object-cover"
            >

           {{-- Overlay --}}
<div class="absolute inset-0 bg-gradient-to-br from-pink-200/70 via-rose-100/50 to-pink-300/60"></div>

{{-- Decorative --}}
<div class="absolute -left-10 top-20 h-72 w-72 rounded-full bg-pink-300/30"></div>

<div class="absolute right-0 bottom-0 h-80 w-80 rounded-full bg-rose-200/20"></div>

            {{-- Content --}}
            <div class="relative z-10 flex w-full items-center px-16">

                <div class="max-w-xl">

                    {{-- ===================================================== --}}
                    {{-- LOGO --}}
                    {{-- ===================================================== --}}
                    <a
                        href="{{ route('home') }}"
                        class="mb-12 flex items-center gap-4"
                    >

                        {{-- Logo --}}
                        <div class="flex h-16 w-16 items-center justify-center rounded-3xl border border-white/10 bg-white/10 shadow-2xl backdrop-blur-xl">

                            <svg
                                class="h-11 w-11"
                                viewBox="0 0 300 300"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                {{-- Circle --}}
                                <circle
                                    cx="150"
                                    cy="150"
                                    r="118"
                                    fill="none"
                                    stroke="#f9a8d4"
                                    stroke-width="6"
                                />

                                {{-- Top Petal --}}
                                <path
                                    d="
                                        M150 85
                                        C170 110, 170 140, 150 160
                                        C130 140, 130 110, 150 85Z
                                    "
                                    fill="#ef63b5"
                                />

                                {{-- Left Petal --}}
                                <path
                                    d="
                                        M95 130
                                        C120 120, 145 130, 150 160
                                        C120 165, 100 155, 95 130Z
                                    "
                                    fill="#d475a9"
                                />

                                {{-- Right Petal --}}
                                <path
                                    d="
                                        M205 130
                                        C180 120, 155 130, 150 160
                                        C180 165, 200 155, 205 130Z
                                    "
                                    fill="#e36cae"
                                />

                                {{-- Bottom Left --}}
                                <path
                                    d="
                                        M110 175
                                        C130 165, 145 175, 150 160
                                        C140 195, 120 195, 110 175Z
                                    "
                                    fill="#fda4af"
                                />

                                {{-- Bottom Right --}}
                                <path
                                    d="
                                        M190 175
                                        C170 165, 155 175, 150 160
                                        C160 195, 180 195, 190 175Z
                                    "
                                    fill="#fda4af"
                                />

                                {{-- Stem --}}
                                <path
                                    d="
                                        M150 160
                                        C145 200, 145 220, 150 245
                                    "
                                    fill="none"
                                    stroke="#67db92"
                                    stroke-width="6"
                                    stroke-linecap="round"
                                />
                            </svg>
                        </div>

                        {{-- Brand --}}
                        <div class="flex flex-col">
                            <span class="text-3xl font-extrabold tracking-wide text-[#f5f0f1] drop-shadow-[0_0_10px_#f5f0f1]">
                                YuzaStore
                            </span>

                            <span class="text-xs uppercase tracking-[0.3em] text-[#e84676]">
                                Flower Boutique
                            </span>
                        </div>
                    </a>

                    {{-- ===================================================== --}}
                    {{-- HERO TEXT --}}
                    {{-- ===================================================== --}}
                    <h1 class="mb-6 text-5xl font-extrabold leading-tight text-white">
                        Buket Cantik
                        <br>
                        Untuk Momen
                        <span class="text-pink-300">
                        Spesialmu
                        </span>
                    </h1>

                    {{-- ===================================================== --}}
                    {{-- FEATURES --}}
                    {{-- ===================================================== --}}
                    <div class="mt-8 flex flex-wrap gap-4">

                        <div class="rounded-full border border-white/10 bg-white/10 px-4 py-2 text-sm text-white backdrop-blur-md">
                            🌸 Fresh Flower
                        </div>

                        <div class="rounded-full border border-white/10 bg-white/10 px-4 py-2 text-sm text-white backdrop-blur-md">
                            🎁 Custom Bouquet
                        </div>

                        <div class="rounded-full border border-white/10 bg-white/10 px-4 py-2 text-sm text-white backdrop-blur-md">
                            🚚 Fast Delivery
                        </div>

                    </div>

                   {{-- ===================================================== --}}
{{-- STATS --}}
{{-- ===================================================== --}}
<div class="mt-12 grid grid-cols-3 gap-4">

    {{-- CARD --}}
    <div class="rounded-2xl border border-white/10 bg-white/10 p-5 backdrop-blur-xl">
        <div class="mb-2 flex items-center gap-2">
            <div class="h-2 w-2 rounded-full bg-emerald-300"></div>

            <span class="text-xs uppercase tracking-[0.2em] text-rose-100/60">
                Customers
            </span>
        </div>

        <p class="text-3xl font-bold text-white">
            10K+
        </p>

        <p class="mt-1 text-xs text-rose-100/50">
            Happy Clients
        </p>
    </div>

    {{-- CARD --}}
    <div class="rounded-2xl border border-white/10 bg-white/10 p-5 backdrop-blur-xl">
        <div class="mb-2 flex items-center gap-2">
            <div class="h-2 w-2 rounded-full bg-pink-300"></div>

            <span class="text-xs uppercase tracking-[0.2em] text-rose-100/60">
                Bouquet
            </span>
        </div>

        <p class="text-3xl font-bold text-white">
            5K+
        </p>

        <p class="mt-1 text-xs text-rose-100/50">
            Sold Product
        </p>
    </div>

    {{-- CARD --}}
    <div class="rounded-2xl border border-white/10 bg-white/10 p-5 backdrop-blur-xl">
        <div class="mb-2 flex items-center gap-2">
            <div class="h-2 w-2 rounded-full bg-yellow-300"></div>

            <span class="text-xs uppercase tracking-[0.2em] text-rose-100/60">
                Rating
            </span>
        </div>

        <p class="text-3xl font-bold text-white">
            4.9★
        </p>

        <p class="mt-1 text-xs text-rose-100/50">
            Store Review
        </p>
    </div>

</div>

                </div>
            </div>
        </div>

        {{-- ===================================================== --}}
        {{-- RIGHT SIDE --}}
        {{-- ===================================================== --}}
        <div class="flex w-full items-center justify-center bg-white px-6 py-10 dark:bg-[#FFF2FA] sm:px-10 lg:w-1/2 lg:px-16">

            <div class="w-full max-w-md">

                {{-- ===================================================== --}}
                {{-- MOBILE LOGO --}}
                {{-- ===================================================== --}}
                <a
                    href="{{ route('home') }}"
                    class="mb-10 flex items-center gap-4 lg:hidden"
                >

                    {{-- Mobile Logo --}}
                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-gradient-to-br from-pink-100 to-rose-100 shadow-md">

                        <svg
                            class="h-10 w-10"
                            viewBox="0 0 300 300"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <circle
                                cx="150"
                                cy="150"
                                r="118"
                                fill="none"
                                stroke="#f9a8d4"
                                stroke-width="6"
                            />

                            <path
                                d="
                                    M150 85
                                    C170 110, 170 140, 150 160
                                    C130 140, 130 110, 150 85Z
                                "
                                fill="#fbcfe8"
                            />

                            <path
                                d="
                                    M95 130
                                    C120 120, 145 130, 150 160
                                    C120 165, 100 155, 95 130Z
                                "
                                fill="#f9a8d4"
                            />

                            <path
                                d="
                                    M205 130
                                    C180 120, 155 130, 150 160
                                    C180 165, 200 155, 205 130Z
                                "
                                fill="#f9a8d4"
                            />

                            <path
                                d="
                                    M110 175
                                    C130 165, 145 175, 150 160
                                    C140 195, 120 195, 110 175Z
                                "
                                fill="#fda4af"
                            />

                            <path
                                d="
                                    M190 175
                                    C170 165, 155 175, 150 160
                                    C160 195, 180 195, 190 175Z
                                "
                                fill="#fda4af"
                            />

                            <path
                                d="
                                    M150 160
                                    C145 200, 145 220, 150 245
                                "
                                fill="none"
                                stroke="#86efac"
                                stroke-width="6"
                                stroke-linecap="round"
                            />
                        </svg>
                    </div>

                    {{-- Brand --}}
                    <div class="flex flex-col leading-tight">

                        <span class="text-2xl font-bold text-gray-900 dark:text-white">
                            YuzaStore
                        </span>

                        <span class="text-xs uppercase tracking-[0.3em] text-[#e84676]">
                            Flower Boutique
                        </span>

                    </div>
                </a>

                {{-- ===================================================== --}}
                {{-- FORM SLOT --}}
                {{-- ===================================================== --}}
                <div class="rounded-3xl border border-gray-100 bg-white p-8 shadow-xl shadow-rose-100/40 dark:border-gray-800 dark:bg-[#FFF2FA] dark:shadow-none">

                    {{ $slot }}

                </div>

                {{-- ===================================================== --}}
                {{-- FOOTER --}}
                {{-- ===================================================== --}}
                <p class="mt-10 text-center text-xs text-gray-400">
                    &copy; {{ date('Y') }} YuzaStore.
                    Made with 🌸 for flower lovers.
                </p>

            </div>
        </div>
    </div>

</body>
</html>