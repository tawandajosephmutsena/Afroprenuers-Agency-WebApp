<nav x-data="{ mobileMenuOpen: false }" class="bg-gray-800 sticky top-0 z-50 shadow-md">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ url('/') }}">
                    <img class="h-14 w-auto" src="{{ asset('storage/assets/site_logo.png') }}" alt="Site Logo">
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden sm:flex sm:space-x-4 sm:flex-1 sm:justify-center">
                <a href="{{ url('/') }}" class="rounded-md px-3 py-2 text-sm font-medium {{ request()->is('/') ? 'bg-gray-900 text-yellow-500' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}" aria-current="{{ request()->is('/') ? 'page' : 'false' }}">Home</a>
                <a href="{{ url('/about') }}" class="rounded-md px-3 py-2 text-sm font-medium {{ request()->is('about') ? 'bg-gray-900 text-yellow-500' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">About</a>
                <a href="{{ url('/services') }}" class="rounded-md px-3 py-2 text-sm font-medium {{ request()->is('services') ? 'bg-gray-900 text-yellow-500' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">Services</a>
                <a href="{{ url('/portfolio') }}" class="rounded-md px-3 py-2 text-sm font-medium {{ request()->is('portfolio') ? 'bg-gray-900 text-yellow-500' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">Portfolio</a>
                <a href="{{ url('/articles') }}" class="rounded-md px-3 py-2 text-sm font-medium {{ request()->is('articles*') ? 'bg-gray-900 text-yellow-500' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">Articles</a>
                <a href="{{ url('/contact') }}" class="rounded-md px-3 py-2 text-sm font-medium {{ request()->is('contact') ? 'bg-gray-900 text-yellow-500' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">Say Hello</a>
            </div>

            <!-- Login Button -->
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <a href="{{ url('/admin') }}" class="rounded-md bg-yellow-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-yellow-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Login</a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="absolute inset-y-0 right-0 flex items-center sm:hidden pr-2">
                <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" :class="{'hidden': mobileMenuOpen, 'block': !mobileMenuOpen }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg class="h-6 w-6" :class="{'block': mobileMenuOpen, 'hidden': !mobileMenuOpen }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-cloak 
         x-show="mobileMenuOpen" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 transform -translate-y-2"
         x-transition:enter-end="opacity-100 transform translate-y-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 transform translate-y-0"
         x-transition:leave-end="opacity-0 transform -translate-y-2"
         class="mobile-menu sm:hidden bg-gray-800">
        <div class="space-y-1 px-2 pb-3 pt-2">
            <a href="{{ url('/') }}" class="block rounded-md px-3 py-2 text-base font-medium {{ request()->is('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">Home</a>
            <a href="{{ url('/about') }}" class="block rounded-md px-3 py-2 text-base font-medium {{ request()->is('about') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">About</a>
            <a href="{{ url('/services') }}" class="block rounded-md px-3 py-2 text-base font-medium {{ request()->is('services') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">Services</a>
            <a href="{{ url('/portfolio') }}" class="block rounded-md px-3 py-2 text-base font-medium {{ request()->is('portfolio') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">Portfolio</a>
            <a href="{{ url('/articles') }}" class="block rounded-md px-3 py-2 text-base font-medium {{ request()->is('articles*') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">Articles</a>
            <a href="{{ url('/contact') }}" class="block rounded-md px-3 py-2 text-base font-medium {{ request()->is('contact') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">Say Hello</a>
        </div>
    </div>
</nav>
