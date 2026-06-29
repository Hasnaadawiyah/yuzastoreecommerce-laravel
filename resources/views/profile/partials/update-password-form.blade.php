<section>
    <header>
        <h2 class="text-xl font-bold text-gray-800">
            Ubah Password
        </h2>

        <p class="mt-2 text-sm text-gray-500">
            Gunakan password yang kuat agar akun Anda tetap aman.
        </p>
    </header>

    <form method="POST" action="{{ route('password.update') }}" class="mt-8 space-y-6">
        @csrf
        @method('PUT')

        {{-- Password Lama --}}
        <div>
            <x-input-label
                for="update_password_current_password"
                value="Password Lama"
                class="font-semibold text-gray-700"
            />

            <x-text-input
                id="update_password_current_password"
                name="current_password"
                type="password"
                class="mt-2 block w-full rounded-xl border-pink-200 shadow-sm px-4 py-3 focus:border-pink-500 focus:ring-pink-500"
                autocomplete="current-password"
            />

            <x-input-error
                :messages="$errors->updatePassword->get('current_password')"
                class="mt-2"
            />
        </div>

        {{-- Password Baru --}}
        <div>
            <x-input-label
                for="update_password_password"
                value="Password Baru"
                class="font-semibold text-gray-700"
            />

            <x-text-input
                id="update_password_password"
                name="password"
                type="password"
                class="mt-2 block w-full rounded-xl border-pink-200 shadow-sm px-4 py-3 focus:border-pink-500 focus:ring-pink-500"
                autocomplete="new-password"
            />

            <x-input-error
                :messages="$errors->updatePassword->get('password')"
                class="mt-2"
            />
        </div>

        {{-- Konfirmasi Password --}}
        <div>
            <x-input-label
                for="update_password_password_confirmation"
                value="Konfirmasi Password Baru"
                class="font-semibold text-gray-700"
            />

            <x-text-input
                id="update_password_password_confirmation"
                name="password_confirmation"
                type="password"
                class="mt-2 block w-full rounded-xl border-pink-200 shadow-sm px-4 py-3 focus:border-pink-500 focus:ring-pink-500"
                autocomplete="new-password"
            />

            <x-input-error
                :messages="$errors->updatePassword->get('password_confirmation')"
                class="mt-2"
            />
        </div>

        <div class="flex items-center gap-4 pt-2">
            <button
                type="submit"
                class="px-6 py-3 rounded-xl bg-pink-500 hover:bg-pink-600 active:bg-pink-700 text-white font-semibold shadow-lg shadow-pink-500/25 hover:shadow-xl hover:scale-105 transition-all duration-300"
            >
                Simpan Password
            </button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-green-600 font-medium"
                >
                    ✓ Password berhasil diperbarui.
                </p>
            @endif
        </div>
    </form>
</section>
