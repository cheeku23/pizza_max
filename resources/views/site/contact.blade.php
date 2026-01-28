<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Pizza Max</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 min-h-screen flex flex-col">
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
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-orange-600 transition">
                        Home
                    </a>
                    <a href="{{ route('products') }}" class="text-gray-700 hover:text-orange-600 transition">
                        Products
                    </a>
                    <a href="{{ route('contact') }}" class="text-orange-600 font-semibold">
                        Contact
                    </a>
                    <a href="{{ route('about') }}" class="text-gray-700 hover:text-orange-600 transition">
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
                    <a href="{{ route('contact') }}" class="text-orange-600 font-semibold">Contact</a>
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

    <!-- Main Content -->
    <main class="flex-grow">
        <!-- Page Header -->
        <div class="bg-gradient-to-r from-orange-500 to-orange-600 text-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
                <div class="text-center">
                    <h1 class="text-5xl font-bold mb-4">Contact Us</h1>
                    <p class="text-xl text-orange-100">We'd love to hear from you!</p>
                </div>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="bg-white rounded-xl shadow-lg p-8">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Send us a Message</h2>
                    <form class="space-y-6">
                        <div>
                            <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Full Name</label>
                            <input type="text" id="name" name="name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-600 focus:border-transparent outline-none transition" placeholder="Your name">
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email Address</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-600 focus:border-transparent outline-none transition" placeholder="your@email.com">
                        </div>

                        <div>
                            <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">Phone Number</label>
                            <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-600 focus:border-transparent outline-none transition" placeholder="+92 300 1234567">
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-semibold text-gray-700 mb-2">Subject</label>
                            <input type="text" id="subject" name="subject" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-600 focus:border-transparent outline-none transition" placeholder="How can we help?">
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">Message</label>
                            <textarea id="message" name="message" rows="5" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-600 focus:border-transparent outline-none transition resize-none" placeholder="Tell us more about your inquiry..."></textarea>
                        </div>

                        <button type="submit" class="w-full px-6 py-4 bg-orange-600 text-white font-semibold rounded-lg hover:bg-orange-700 transition">
                            Send Message
                        </button>
                    </form>
                </div>

                <!-- Contact Information -->
                <div class="space-y-8">
                    <div class="bg-white rounded-xl shadow-lg p-8">
                        <h2 class="text-3xl font-bold text-gray-800 mb-6">Get in Touch</h2>
                        <div class="space-y-6">
                            <!-- Phone -->
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center flex-shrink-0">
                                    <span class="text-2xl">📞</span>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold text-gray-800 mb-1">Phone</h3>
                                    <p class="text-gray-600">+92 300 1234567</p>
                                    <p class="text-gray-600">+92 321 9876543</p>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center flex-shrink-0">
                                    <span class="text-2xl">✉️</span>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold text-gray-800 mb-1">Email</h3>
                                    <p class="text-gray-600">info@pizzamax.com</p>
                                    <p class="text-gray-600">support@pizzamax.com</p>
                                </div>
                            </div>

                            <!-- Address -->
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center flex-shrink-0">
                                    <span class="text-2xl">📍</span>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold text-gray-800 mb-1">Address</h3>
                                    <p class="text-gray-600">123 Main Street</p>
                                    <p class="text-gray-600">Karachi, Pakistan</p>
                                </div>
                            </div>

                            <!-- Hours -->
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center flex-shrink-0">
                                    <span class="text-2xl">🕐</span>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold text-gray-800 mb-1">Opening Hours</h3>
                                    <p class="text-gray-600">Mon - Thu: 11am - 11pm</p>
                                    <p class="text-gray-600">Fri - Sat: 11am - 12am</p>
                                    <p class="text-gray-600">Sunday: 12pm - 11pm</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Map Placeholder -->
                    <div class="bg-white rounded-xl shadow-lg p-8">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">Find Us</h2>
                        <div class="w-full h-64 bg-gray-200 rounded-lg flex items-center justify-center">
                            <span class="text-gray-500 text-lg">🗺️ Map Location</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- About -->
                <div>
                    <h3 class="text-xl font-bold text-orange-500 mb-4">Pizza Max</h3>
                    <p class="text-gray-300 text-sm">
                        Fresh, delicious pizzas made with the finest ingredients. Order now and enjoy the best pizza experience!
                    </p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="{{ route('home') }}" class="text-gray-300 hover:text-orange-500 transition">Home</a></li>
                        <li><a href="{{ route('products') }}" class="text-gray-300 hover:text-orange-500 transition">Products</a></li>
                        <li><a href="{{ route('about') }}" class="text-gray-300 hover:text-orange-500 transition">About Us</a></li>
                        <li><a href="{{ route('contact') }}" class="text-gray-300 hover:text-orange-500 transition">Contact</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
                    <ul class="space-y-2 text-sm text-gray-300">
                        <li>📞 +92 300 1234567</li>
                        <li>✉️ info@pizzamax.com</li>
                        <li>📍 Karachi, Pakistan</li>
                    </ul>
                </div>

                <!-- Hours -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Opening Hours</h3>
                    <ul class="space-y-2 text-sm text-gray-300">
                        <li>Mon - Thu: 11am - 11pm</li>
                        <li>Fri - Sat: 11am - 12am</li>
                        <li>Sunday: 12pm - 11pm</li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-sm text-gray-400">
                <p>&copy; {{ date('Y') }} Pizza Max. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>
</body>

</html>