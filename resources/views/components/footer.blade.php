<footer class="mt-12 border-t border-gray-200 bg-white transition-colors duration-300 dark:border-gray-700 dark:bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 py-10 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 gap-10 md:grid-cols-4">

            {{-- Brand --}}
            <div class="md:col-span-1">

                <div class="mb-4 flex items-center gap-3">

                    <svg
                        class="h-10 w-10 shrink-0"
                        viewBox="0 0 300 300"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        aria-label="YuzaStore Logo"
                    >
                        {{-- Outer Circle --}}
                        <circle
                            cx="150"
                            cy="150"
                            r="118"
                            fill="none"
                            stroke="#f8b6c1"
                            stroke-width="6"
                        />

                        {{-- Top Petal --}}
                        <path
                            fill="#f8b6c1"
                            d="M150 85
                               C170 110, 170 140, 150 160
                               C130 140, 130 110, 150 85Z"
                        />

                        {{-- Left Petal --}}
                        <path
                            fill="#f4a6b5"
                            d="M95 130
                               C120 120, 145 130, 150 160
                               C120 165, 100 155, 95 130Z"
                        />

                        {{-- Right Petal --}}
                        <path
                            fill="#f4a6b5"
                            d="M205 130
                               C180 120, 155 130, 150 160
                               C180 165, 200 155, 205 130Z"
                        />

                        {{-- Bottom Left Petal --}}
                        <path
                            fill="#f7b0bc"
                            d="M110 175
                               C130 165, 145 175, 150 160
                               C140 195, 120 195, 110 175Z"
                        />

                        {{-- Bottom Right Petal --}}
                        <path
                            fill="#f7b0bc"
                            d="M190 175
                               C170 165, 155 175, 150 160
                               C160 195, 180 195, 190 175Z"
                        />

                        {{-- Stem --}}
                        <path
                            fill="none"
                            stroke="#7d8b5a"
                            stroke-width="6"
                            stroke-linecap="round"
                            d="M150 160
                               C145 200, 145 220, 150 245"
                        />
                    </svg>

                    <div>
                        <h2 class="text-lg font-bold text-gray-900 dark:text-white">
                            YuzaStore
                        </h2>

                        <p class="text-xs uppercase tracking-[0.3em] text-pink-500">
                            Flower Boutique
                        </p>
                    </div>

                </div>

                <p class="text-sm leading-relaxed text-gray-500 dark:text-gray-400">
                    “Flowers that speak louder than words.” 
                     Buket cantik untuk orang tersayang ✨💐
                </p>

            </div>

            {{-- Belanja --}}
            <div>

                <h3 class="mb-4 text-sm font-semibold uppercase tracking-wider text-gray-700 dark:text-gray-300">
                    Belanja
                </h3>

                <ul class="space-y-3 text-sm text-gray-500 dark:text-gray-400">

                    <li>
                        <a href="#" class="transition hover:text-pink-500">
                            Buket Wisuda
                        </a>
                    </li>

                    <li>
                        <a href="#" class="transition hover:text-pink-500">
                            Buket Ulang Tahun
                        </a>
                    </li>

                    <li>
                        <a href="#" class="transition hover:text-pink-500">
                            Buket Anniversary
                        </a>
                    </li>

                    <li>
                        <a href="#" class="transition hover:text-pink-500">
                            Buket Custom
                        </a>
                    </li>

                </ul>

            </div>

            {{-- Bantuan --}}
            <div>

                <h3 class="mb-4 text-sm font-semibold uppercase tracking-wider text-gray-700 dark:text-gray-300">
                    Bantuan
                </h3>

                <ul class="space-y-3 text-sm text-gray-500 dark:text-gray-400">

                    <li>
                        <a href="#" class="transition hover:text-pink-500">
                            Kontak Kami
                        </a>
                    </li>

                    <li>
                        <a href="#" class="transition hover:text-pink-500">
                            FAQ
                        </a>
                    </li>

                    <li>
                        <a href="#" class="transition hover:text-pink-500">
                            Kebijakan Retur
                        </a>
                    </li>

                </ul>

            </div>

            {{-- Informasi --}}
            <div>

                <h3 class="mb-4 text-sm font-semibold uppercase tracking-wider text-gray-700 dark:text-gray-300">
                    Informasi
                </h3>

                <ul class="space-y-3 text-sm text-gray-500 dark:text-gray-400">

                    <li>
                        <a href="#" class="transition hover:text-pink-500">
                            Tentang Kami
                        </a>
                    </li>

                    <li>
                        <a href="#" class="transition hover:text-pink-500">
                            Syarat & Ketentuan
                        </a>
                    </li>

                    <li>
                        <a href="#" class="transition hover:text-pink-500">
                            Kebijakan Privasi
                        </a>
                    </li>

                </ul>

            </div>

        </div>

        {{-- Copyright --}}
        <div class="mt-10 border-t border-gray-200 pt-6 text-center dark:border-gray-700">

            <p class="text-sm text-gray-500 dark:text-gray-400">
                &copy; {{ date('Y') }} YuzaStore. All rights reserved.
            </p>

        </div>

    </div>
</footer>