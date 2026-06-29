<div class="group bg-white rounded-2xl overflow-hidden border border-pink-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">

    <a href="{{ route('products.show', $product['slug'] ?? '#') }}"
       class="block aspect-square overflow-hidden bg-[#FFF7FA]">

        <img src="{{ $product['image'] }}"
             alt="{{ $product['name'] }}"
             class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
    </a>

    <div class="p-4">

        <p class="text-[11px] uppercase tracking-widest text-pink-400 font-semibold">
            {{ $product['category'] ?? 'Bouquet' }}
        </p>

        <h3 class="mt-1 text-base font-bold text-gray-800 line-clamp-2">
            {{ $product['name'] }}
        </h3>

        <p class="mt-3 text-xl font-bold text-pink-500">
            Rp {{ number_format($product['price'],0,',','.') }}
        </p>

    </div>

</div>