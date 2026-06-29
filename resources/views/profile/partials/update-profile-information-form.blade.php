<section>

    <form id="send-verification" method="POST" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PATCH')

        {{-- Foto Profil --}}
<div>
    <label for="profile_photo" class="block mb-2 text-sm font-semibold text-gray-700">
        Foto Profil
    </label>

    @if($user->profile_photo)
        <img
            src="{{ asset('storage/' . $user->profile_photo) }}"
            alt="Foto Profil"
            class="w-24 h-24 rounded-full object-cover mb-4 border-4 border-pink-200 shadow">
    @else
        <img
            src="https://ui-avatars.com/api/?name={{ urlencode($user->name) }}&background=ec4899&color=fff&size=128"
            alt="Foto Profil"
            class="w-24 h-24 rounded-full object-cover mb-4 border-4 border-pink-200 shadow">
    @endif

    <div class="flex items-center gap-4">

        <!-- Tombol Upload -->
        <label for="profile_photo"
            class="inline-flex items-center gap-2 px-5 py-3 rounded-xl bg-pink-500 hover:bg-pink-600 active:bg-pink-700 text-white font-semibold cursor-pointer shadow-lg shadow-pink-500/25 hover:shadow-xl hover:scale-105 transition-all duration-300">

            <svg xmlns="http://www.w3.org/2000/svg"
                class="w-5 h-5"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 16v1a2 2 0 002 2h12a2 2 0 002-2v-1M12 4v12m0-12l-3 3m3-3l3 3"/>
            </svg>

            Upload Foto
        </label>

        <!-- Nama File -->
        <span id="file-name" class="text-sm text-gray-500">
            Belum ada file dipilih
        </span>

        <!-- Input File (disembunyikan) -->
        <input
            id="profile_photo"
            name="profile_photo"
            type="file"
            accept="image/*"
            class="hidden"
            onchange="document.getElementById('file-name').textContent = this.files.length ? this.files[0].name : 'Belum ada file dipilih';">
    </div>

    @error('profile_photo')
        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
    @enderror
</div>

        {{-- Nama --}}
        <div>
            <label for="name" class="block mb-2 text-sm font-semibold text-gray-700">
                Nama
            </label>

            <input
                id="name"
                name="name"
                type="text"
                value="{{ old('name', $user->name) }}"
                required
                autofocus
                autocomplete="name"
                class="w-full rounded-xl border border-pink-200 bg-white px-4 py-3 focus:border-pink-500 focus:ring-4 focus:ring-pink-100 transition"
            >

            @error('name')
                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>

        {{-- Email --}}
        <div>
            <label for="email" class="block mb-2 text-sm font-semibold text-gray-700">
                Email
            </label>

            <input
                id="email"
                name="email"
                type="email"
                value="{{ old('email', $user->email) }}"
                required
                autocomplete="username"
                class="w-full rounded-xl border border-pink-200 bg-white px-4 py-3 focus:border-pink-500 focus:ring-4 focus:ring-pink-100 transition"
            >

            @error('email')
                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
            @enderror

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())

                <div class="mt-4">

                    <p class="text-sm text-gray-500">
                        Email Anda belum diverifikasi.
                    </p>

                    <button
                        form="send-verification"
                        class="mt-2 text-pink-600 font-semibold hover:underline"
                    >
                        Kirim ulang email verifikasi
                    </button>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 text-green-600 text-sm">
                            Link verifikasi berhasil dikirim.
                        </p>
                    @endif

                </div>

            @endif
        </div>

        {{-- Tombol --}}
        <div class="flex items-center gap-4">

            <button
                type="submit"
                class="px-6 py-3 rounded-xl bg-pink-500 hover:bg-pink-600 active:bg-pink-700 text-white font-semibold shadow-lg shadow-pink-500/25 hover:scale-105 transition-all duration-300"
            >
                Simpan Perubahan
            </button>

            @if (session('status') === 'profile-updated')

                <span
                    x-data="{ show:true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(()=>show=false,2000)"
                    class="text-green-600 text-sm font-medium"
                >
                    ✓ Berhasil disimpan
                </span>

            @endif

        </div>

    </form>

</section>
