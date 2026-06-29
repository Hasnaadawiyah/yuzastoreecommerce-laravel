@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<div class="space-y-8">

    {{-- HERO --}}
    <div class="relative rounded-2xl overflow-hidden h-[340px]" id="heroCarousel">
        <div class="carousel-track h-full relative">

            {{-- Slide 1 --}}
<div class="carousel-slide absolute inset-0 opacity-100 transition-opacity duration-700">
    <img src="https://i.pinimg.com/1200x/8e/c5/cc/8ec5cc6b183b72c3aa7a5da232e9b575.jpg"
         class="absolute inset-0 w-full h-full object-cover">

    <div class="absolute inset-0 bg-gradient-to-r from-fuchsia-900/40 to-transparent"></div>

    <div class="relative z-10 flex items-center h-full px-12 md:px-16">
        <div class="max-w-md">
            <h2 class="text-3xl md:text-4xl font-extrabold text-white leading-tight">
                Anniversary<br>Bloom Collection
            </h2>

            <p class="text-pink-100 text-sm mt-2">
                Rayakan momen spesial dengan buket bunga premium yang dirangkai penuh cinta.
            </p>

            <span class="inline-block mt-5 px-4 py-2 rounded-full bg-pink-500 text-white font-semibold text-sm">
                🌸 Diskon 20%
            </span>

            <a href="{{ route('products.index') }}"
                class="inline-block mt-5 border border-white/70 text-white text-xs font-semibold rounded-full px-6 py-2 hover:bg-white hover:text-pink-600 transition-colors">
                Belanja Sekarang
            </a>
        </div>
    </div>
</div>

            {{-- Slide 2 --}}
<div class="carousel-slide absolute inset-0 opacity-0 transition-opacity duration-700">
    <img src="https://i.pinimg.com/1200x/41/d6/3f/41d63f290fe268936338a49e7d877d18.jpg"
         class="absolute inset-0 w-full h-full object-cover">

    <div class="absolute inset-0 bg-gradient-to-r from-fuchsia-900/40 to-transparent"></div>

    <div class="relative z-10 flex items-center h-full px-12 md:px-16">
        <div class="max-w-md">
            <h2 class="text-3xl md:text-4xl font-extrabold text-white leading-tight">
                Free Delivery<br>Special Offer
            </h2>

            <p class="text-pink-100 text-sm mt-2">
                Gratis ongkir untuk pembelian minimal Rp300.000 ke seluruh kota.
            </p>

            <span class="inline-block mt-5 px-4 py-2 rounded-full bg-pink-400 text-white font-semibold text-sm">
    🚚 GRATIS ONGKIR
</span>

            <a href="{{ route('products.index') }}"
                class="inline-block mt-5 border border-white/70 text-white text-xs font-semibold rounded-full px-6 py-2 hover:bg-white hover:text-pink-600 transition-colors">
                Belanja Sekarang
            </a>
        </div>
    </div>
</div>

            {{-- Slide 3 --}}
<div class="carousel-slide absolute inset-0 opacity-0 transition-opacity duration-700">
    <img src="https://i.pinimg.com/1200x/64/d2/a0/64d2a075f119fc1215dee39486bddc66.jpg"
         class="absolute inset-0 w-full h-full object-cover">

    <div class="absolute inset-0 bg-gradient-to-r from-fuchsia-900/40 to-transparent"></div>

    <div class="relative z-10 flex items-center h-full px-12 md:px-16">
        <div class="max-w-md">
            <h2 class="text-3xl md:text-4xl font-extrabold text-white leading-tight">
                Graduation<br>Special Bouquet
            </h2>

            <p class="text-pink-100 text-sm mt-2">
                Buket bunga elegan untuk merayakan wisuda dan setiap pencapaian istimewa.
            </p>

            <span class="inline-block mt-5 px-4 py-2 rounded-full bg-gradient-to-r from-yellow-400 to-amber-500 text-white font-semibold text-sm shadow-md">
    ⭐ Best Seller
</span>
            <a href="{{ route('products.index') }}"
                class="inline-block mt-5 border border-white/70 text-white text-xs font-semibold rounded-full px-6 py-2 hover:bg-white hover:text-pink-600 transition-colors">
                Lihat Koleksi
            </a>
        </div>
    </div>
</div>

        </div>

        {{-- Arrows --}}
            <button onclick="prevSlide()"
                class="absolute left-3 top-1/2 -translate-y-1/2 w-8 h-8 flex items-center justify-center rounded-full bg-white/20 hover:bg-white/40 text-white transition z-20">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <button onclick="nextSlide()"
                class="absolute right-3 top-1/2 -translate-y-1/2 w-8 h-8 flex items-center justify-center rounded-full bg-white/20 hover:bg-white/40 text-white transition z-20">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5l7 7-7 7" />
                </svg>
            </button>

            {{-- Dots --}}
            <div class="absolute bottom-3 left-1/2 -translate-x-1/2 flex gap-1.5 z-20" id="carouselDots">
                <button onclick="goToSlide(0)"
                    class="carousel-dot w-5 h-2 rounded-full bg-pink-500 transition-all"></button>

                <button onclick="goToSlide(1)"
                    class="carousel-dot w-2 h-2 rounded-full bg-white/50 transition-all"></button>

                <button onclick="goToSlide(2)"
                    class="carousel-dot w-2 h-2 rounded-full bg-white/50 transition-all"></button>
            </div>

        </div>

        
       {{-- ========== FEATURES ========== --}}
<div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-6">

    {{-- Gratis Ongkir --}}
    <div class="flex items-center gap-4 bg-white border border-pink-100 rounded-2xl px-5 py-4 shadow-sm hover:shadow-md hover:-translate-y-1 transition duration-300">

        <div class="w-12 h-12 rounded-2xl bg-pink-50 flex items-center justify-center shrink-0">
    <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke-width="1.8"
        stroke="currentColor"
        class="w-6 h-6 text-pink-500"
    >
        <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M8.25 18.75a1.5 1.5 0 100-3 1.5 1.5 0 000 3Zm7.5 0a1.5 1.5 0 100-3 1.5 1.5 0 000 3ZM3.75 4.5h9v10.5h-9V4.5Zm9 3h3l3 3v4.5h-1.5"
        />
    </svg>
</div>

        <div>
            <h3 class="text-sm font-semibold text-gray-800">
                Gratis Ongkir
            </h3>
            <p class="text-xs text-gray-500 mt-1">
                Min. belanja Rp120.000
            </p>
        </div>

    </div>

    {{-- Produk Original --}}
    <div class="flex items-center gap-4 bg-white border border-pink-100 rounded-2xl px-5 py-4 shadow-sm hover:shadow-md hover:-translate-y-1 transition duration-300">

        <div class="w-12 h-12 rounded-2xl bg-pink-50 flex items-center justify-center text-pink-500 shrink-0">
            <svg xmlns="http://www.w3.org/2000/svg"
                class="w-6 h-6"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2">
                <path stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M5 13l4 4L19 7" />
            </svg>
        </div>

        <div>
            <h3 class="text-sm font-semibold text-gray-800">
                Produk Original
            </h3>
            <p class="text-xs text-gray-500 mt-1">
                100% bunga berkualitas premium
            </p>
        </div>

    </div>

    {{-- Mudah Retur --}}
    <div class="flex items-center gap-4 bg-white border border-pink-100 rounded-2xl px-5 py-4 shadow-sm hover:shadow-md hover:-translate-y-1 transition duration-300">

        <div class="w-12 h-12 rounded-2xl bg-pink-50 flex items-center justify-center text-pink-500 shrink-0">
            <svg xmlns="http://www.w3.org/2000/svg"
                class="w-6 h-6"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2">
                <path stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M4 4v5h5M20 20v-5h-5M5 9a7 7 0 0112-3l3 3M19 15a7 7 0 01-12 3l-3-3" />
            </svg>
        </div>

        <div>
            <h3 class="text-sm font-semibold text-gray-800">
                Mudah Retur
            </h3>
            <p class="text-xs text-gray-500 mt-1">
                Garansi pengembalian 30 hari
            </p>
        </div>

    </div>

</div>
        
        </div>
        {{-- ========== CATEGORY PILLS ========== --}}
<div class="flex flex-wrap justify-center gap-3 my-6">

    <button
       class="category-btn bg-white dark:bg-gray-800 border border-pink-200 text-gray-700 dark:text-gray-200 px-5 py-2 rounded-full font-semibold hover:bg-pink-500 hover:text-white hover:border-pink-500 transition">
        💗 Romantic
    </button>

    <button
        class="category-btn bg-white dark:bg-gray-800 border border-pink-200 text-gray-700 dark:text-gray-200 px-5 py-2 rounded-full font-semibold hover:bg-pink-500 hover:text-white hover:border-pink-500 transition">
        💐 Anniversary
    </button>

    <button
        class="category-btn bg-white dark:bg-gray-800 border border-pink-200 text-gray-700 dark:text-gray-200 px-5 py-2 rounded-full font-semibold hover:bg-pink-500 hover:text-white hover:border-pink-500 transition">
        🎓 Graduation
    </button>

    <button
        class="category-btn bg-white dark:bg-gray-800 border border-pink-200 text-gray-700 dark:text-gray-200 px-5 py-2 rounded-full font-semibold hover:bg-pink-500 hover:text-white hover:border-pink-500 transition">
        💍 Wedding
    </button>

</div>

        {{-- ========== PRODUCT GRID ========== --}}
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-5">
            @foreach($featuredProducts as $item)
                @include('components.product-card', ['product' => $item])
            @endforeach
        </div>

    </div>

    {{-- Carousel JS --}}
    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.carousel-slide');
        const dots = document.querySelectorAll('.carousel-dot');
        const totalSlides = slides.length;
        let autoSlideTimer;

        function goToSlide(index) {
            slides.forEach((s, i) => {
                s.style.opacity = i === index ? '1' : '0';
            });

            dots.forEach((d, i) => {
                d.classList.toggle('w-5', i === index);
                d.classList.toggle('bg-pink-500', i === index);
                d.classList.toggle('w-2', i !== index);
                d.classList.toggle('bg-white/50', i !== index);
            });

            currentSlide = index;
            resetAutoSlide();
        }

        function nextSlide() {
            goToSlide((currentSlide + 1) % totalSlides);
        }

        function prevSlide() {
            goToSlide((currentSlide - 1 + totalSlides) % totalSlides);
        }

        function resetAutoSlide() {
            clearInterval(autoSlideTimer);
            autoSlideTimer = setInterval(nextSlide, 5000);
        }

        resetAutoSlide();
    </script>
@endsection