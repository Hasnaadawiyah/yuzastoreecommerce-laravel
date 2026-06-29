<nav x-data="{ open: false }"
    class="bg-white dark:bg-gray-900 border-b border-gray-200 dark:border-gray-700 sticky top-0 z-50 shadow-sm">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex justify-between h-16">

            {{-- LEFT --}}
            <div class="flex items-center">

                {{-- Logo --}}
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo
                            class="block h-9 w-auto fill-current text-gray-800 dark:text-white" />
                    </a>
                </div>

                {{-- Desktop Menu --}}
                <div class="hidden sm:flex sm:items-center sm:ms-10 space-x-8">

                    <x-nav-link
                        :href="route('dashboard')"
                        :active="request()->routeIs('dashboard')">
                        Dashboard
                    </x-nav-link>

                </div>
            </div>

            {{-- RIGHT --}}
            <div class="hidden sm:flex sm:items-center sm:ms-6">

                {{-- User Dropdown --}}
                <x-dropdown align="right" width="48">

                    <x-slot name="trigger">

                        <button
    class="inline-flex items-center gap-3 px-4 py-2 rounded-lg bg-pink-500 hover:bg-pink-600 text-white text-sm font-medium">

    @if(Auth::user()->profile_photo)
        <img
            src="{{ asset('storage/' . Auth::user()->profile_photo) }}"
            alt="Profile"
            class="w-8 h-8 rounded-full object-cover border border-white">
    @else
        <div class="w-8 h-8 rounded-full bg-white text-pink-500 flex items-center justify-center font-bold">
            {{ strtoupper(substr(Auth::user()->name,0,1)) }}
        </div>
    @endif

    <span class="max-w-[120px] truncate">
        {{ Auth::user()->name }}
    </span>
</button>

                    </x-slot>

                    <x-slot name="content">

                        <x-dropdown-link :href="route('profile.edit')">
                            Profile
                        </x-dropdown-link>

                        {{-- Logout --}}
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link
                                :href="route('logout')"
                                onclick="event.preventDefault();
                                this.closest('form').submit();">

                                Log Out

                            </x-dropdown-link>
                        </form>

                    </x-slot>

                </x-dropdown>

            </div>

            {{-- Hamburger --}}
            <div class="flex items-center sm:hidden">

                <button
                    @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-500 hover:bg-gray-100 dark:hover:bg-gray-800 transition">

                    <svg class="h-6 w-6"
                        stroke="currentColor"
                        fill="none"
                        viewBox="0 0 24 24">

                        <path
                            :class="{ 'hidden': open, 'inline-flex': !open }"
                            class="inline-flex"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />

                        <path
                            :class="{ 'hidden': !open, 'inline-flex': open }"
                            class="hidden"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />

                    </svg>

                </button>

            </div>

        </div>

    </div>

    {{-- Mobile Menu --}}
    <div
        :class="{ 'block': open, 'hidden': !open }"
        class="hidden sm:hidden bg-white dark:bg-gray-900 border-t border-gray-200 dark:border-gray-700">

        <div class="pt-2 pb-3 space-y-1">

            <x-responsive-nav-link
                :href="route('dashboard')"
                :active="request()->routeIs('dashboard')">

                Dashboard

            </x-responsive-nav-link>

        </div>

        {{-- Mobile User --}}
        <div class="pt-4 pb-3 border-t border-gray-200 dark:border-gray-700">

            <div class="px-4">

                <div class="font-medium text-base text-gray-800 dark:text-white">
                    {{ Auth::user()->name }}
                </div>

                <div class="font-medium text-sm text-gray-500">
                    {{ Auth::user()->email }}
                </div>

            </div>

            <div class="mt-3 space-y-1">

                <x-responsive-nav-link :href="route('profile.edit')">
                    Profile
                </x-responsive-nav-link>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link
                        :href="route('logout')"
                        onclick="event.preventDefault();
                        this.closest('form').submit();">

                        Log Out

                    </x-responsive-nav-link>

                </form>

            </div>

        </div>

    </div>

</nav>