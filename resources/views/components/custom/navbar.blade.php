<!-- Navbar -->
<nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="text-2xl font-bold text-orange-600">
                    🍕 Pizza Max
                </a>
            </div>

            <!-- Navigation Links -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-orange-600 transition {{ request()->routeIs('home') ? 'text-orange-600 font-semibold' : '' }}">
                    Home
                </a>
                <a href="{{ route('products') }}" class="text-gray-700 hover:text-orange-600 transition {{ request()->routeIs('products') ? 'text-orange-600 font-semibold' : '' }}">
                    Products
                </a>
                <a href="{{ route('contact') }}" class="text-gray-700 hover:text-orange-600 transition {{ request()->routeIs('contact') ? 'text-orange-600 font-semibold' : '' }}">
                    Contact
                </a>
                <a href="{{ route('about') }}" class="text-gray-700 hover:text-orange-600 transition {{ request()->routeIs('about') ? 'text-orange-600 font-semibold' : '' }}">
                    About Us
                </a>
            </div>

            <!-- Auth Buttons -->
            <div class="hidden md:flex items-center space-x-4">
                @auth
                <a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-orange-600 transition">
                    Dashboard
                </a>
                @else
                <a href="{{ route('login') }}" class="px-4 py-2 text-orange-600 border border-orange-600 rounded-lg hover:bg-orange-50 transition">
                    Login
                </a>
                <a href="{{ route('register') }}" class="px-4 py-2 bg-orange-600 text-white rounded-lg hover:bg-orange-700 transition">
                    Sign Up
                </a>
                @endauth
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="mobile-menu-btn" class="text-gray-700 hover:text-orange-600 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden pb-4">
            <div class="flex flex-col space-y-3">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-orange-600 transition">Home</a>
                <a href="{{ route('products') }}" class="text-gray-700 hover:text-orange-600 transition">Products</a>
                <a href="{{ route('contact') }}" class="text-gray-700 hover:text-orange-600 transition">Contact</a>
                <a href="{{ route('about') }}" class="text-gray-700 hover:text-orange-600 transition">About Us</a>
                @auth
                <a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-orange-600 transition">Dashboard</a>
                @else
                <a href="{{ route('login') }}" class="text-orange-600 hover:text-orange-700 transition">Login</a>
                <a href="{{ route('register') }}" class="text-orange-600 hover:text-orange-700 transition">Sign Up</a>
                @endauth
            </div>
        </div>
    </div>
</nav>

<script>
    // Mobile menu toggle
    document.addEventListener('DOMContentLoaded', function() {
        const menuBtn = document.getElementById('mobile-menu-btn');
        if (menuBtn) {
            menuBtn.addEventListener('click', function() {
                const menu = document.getElementById('mobile-menu');
                menu.classList.toggle('hidden');
            });
        }
    });
</script>