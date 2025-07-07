<nav class="bg-transparent border-b">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-1">
        <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{asset('bg-images/logo.png')}}" class="h-20" alt="Writerity Logo" />
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-red-700 rounded-lg md:hidden hover:bg-gray-100 dark:text-red-700 dark:hover:bg-white " aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-bold flex flex-col p-4 md:p-0 mt-4N rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0">
                <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                    {{ __('Home') }}
                </x-nav-link>
                <x-nav-link href="{{ route('about-us') }}" :active="request()->routeIs('about-us')">
                    {{ __('About us') }}
                </x-nav-link>
                <x-nav-link href="{{ route('service') }}" :active="request()->routeIs('service')">
                    {{ __('Service') }}
                </x-nav-link>
                <x-nav-link href="{{ route('blog.index') }}" :active="request()->routeIs('blog.index')">
                    {{ __('Blog') }}
                </x-nav-link>
                <x-nav-link href="{{ route('career.index') }}" :active="request()->routeIs('career.index')">
                    {{ __('Careers') }}
                </x-nav-link>
            </ul>
        </div>
        <div id="header-right" class="flex items-center md:space-x-6">
            @guest()
                <div class="flex space-x-5">
                    <x-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')" class="flex space-x-2 items-center hover:text-red-700 text-sm text-red-700">
                        {{ __('Login') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('register') }}" :active="request()->routeIs('register')" class="flex space-x-2 items-center hover:text-red-700 text-sm text-red-700">
                        {{ __('Register') }}
                    </x-nav-link>
                </div>
            @endguest
            @auth()
                <div class="ms-3 relative flex space-x-6">
                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="font-bold flex space-x-2 items-center hover:text-red-700 text-sm text-red-700">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    @can('viewAdminPanel', \App\Models\User::class)
                        <x-nav-link :navigate="false" href="{{ route('filament.admin.auth.login') }}" :active="request()->routeIs('filament.admin.auth.login')" class="flex space-x-2 items-center hover:text-yellow-500 text-sm text-gray-500">
                            {{ __('Admin') }}
                        </x-nav-link>
                    @endcan
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        {{ Auth::user()->name }}

                                        <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div wire:navigate class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-dropdown-link wire:navigate href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-dropdown-link wire:navigate href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-dropdown-link>
                            @endif

                            <div class="border-t border-gray-200"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>

                        </x-slot>
                    </x-dropdown>
                </div>
            @endauth
        </div>
    </div>
</nav>
