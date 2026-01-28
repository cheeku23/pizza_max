<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Pizza Max</title>
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
                    <a href="{{ route('contact') }}" class="text-gray-700 hover:text-orange-600 transition">
                        Contact
                    </a>
                    <a href="{{ route('about') }}" class="text-orange-600 font-semibold">
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
                    <a href="{{ route('about') }}" class="text-orange-600 font-semibold">About Us</a>
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
                    <h1 class="text-5xl font-bold mb-4">About Us</h1>
                    <p class="text-xl text-orange-100">The story behind Pizza Max</p>
                </div>
            </div>
        </div>

        <!-- Story Section -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
                <div>
                    <h2 class="text-4xl font-bold text-gray-800 mb-6">Our Story</h2>
                    <div class="space-y-4 text-gray-600 text-lg leading-relaxed">
                        <p>
                            Pizza Max was founded in 2020 with a simple mission: to deliver the most delicious, authentic pizzas made with the finest ingredients right to your doorstep.
                        </p>
                        <p>
                            What started as a small pizzeria in Karachi has now grown into a beloved brand known for its commitment to quality, freshness, and customer satisfaction. We believe that every pizza should be a masterpiece, crafted with care and passion.
                        </p>
                        <p>
                            Our secret? We use only premium ingredients, traditional recipes with a modern twist, and never compromise on quality. Every pizza is made fresh to order, ensuring you get the best taste experience every single time.
                        </p>
                    </div>
                </div>
                <div class="bg-gradient-to-br from-orange-400 to-red-500 rounded-xl h-96 flex items-center justify-center shadow-lg">
                    <span class="text-9xl">🍕</span>
                </div>
            </div>

            <!-- Values Section -->
            <div class="mb-16">
                <h2 class="text-4xl font-bold text-gray-800 text-center mb-12">Our Values</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white rounded-xl shadow-lg p-8 text-center">
                        <div class="w-20 h-20 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-4xl">🌟</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-3">Quality First</h3>
                        <p class="text-gray-600">We never compromise on the quality of our ingredients. Only the best makes it to your plate.</p>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg p-8 text-center">
                        <div class="w-20 h-20 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-4xl">❤️</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-3">Made with Love</h3>
                        <p class="text-gray-600">Every pizza is crafted with passion and care by our experienced chefs.</p>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg p-8 text-center">
                        <div class="w-20 h-20 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-4xl">⚡</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-3">Fast & Fresh</h3>
                        <p class="text-gray-600">Hot, fresh pizzas delivered quickly to ensure the best taste experience.</p>
                    </div>
                </div>
            </div>

            <!-- Stats Section -->
            <div class="bg-gradient-to-r from-orange-500 to-orange-600 rounded-xl py-12 px-8 mb-16">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center text-white">
                    <div>
                        <div class="text-5xl font-bold mb-2">5+</div>
                        <div class="text-orange-100">Years Experience</div>
                    </div>
                    <div>
                        <div class="text-5xl font-bold mb-2">50K+</div>
                        <div class="text-orange-100">Happy Customers</div>
                    </div>
                    <div>
                        <div class="text-5xl font-bold mb-2">100K+</div>
                        <div class="text-orange-100">Pizzas Delivered</div>
                    </div>
                    <div>
                        <div class="text-5xl font-bold mb-2">4.8</div>
                        <div class="text-orange-100">Average Rating</div>
                    </div>
                </div>
            </div>

            <!-- Team Section -->
            <div class="mb-16">
                <h2 class="text-4xl font-bold text-gray-800 text-center mb-12">Meet Our Team</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden text-center">
                        <div class="h-64 bg-gradient-to-br from-orange-400 to-red-500 flex items-center justify-center">
                            <span class="text-8xl">👨‍🍳</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Chef Ahmad</h3>
                            <p class="text-orange-600 font-semibold mb-2">Head Chef</p>
                            <p class="text-gray-600 text-sm">15 years of culinary excellence</p>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg overflow-hidden text-center">
                        <div class="h-64 bg-gradient-to-br from-yellow-400 to-orange-500 flex items-center justify-center">
                            <span class="text-8xl">👩‍💼</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Sara Khan</h3>
                            <p class="text-orange-600 font-semibold mb-2">Operations Manager</p>
                            <p class="text-gray-600 text-sm">Ensuring smooth operations daily</p>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg overflow-hidden text-center">
                        <div class="h-64 bg-gradient-to-br from-green-400 to-teal-500 flex items-center justify-center">
                            <span class="text-8xl">👨‍💻</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Ali Raza</h3>
                            <p class="text-orange-600 font-semibold mb-2">Customer Support Lead</p>
                            <p class="text-gray-600 text-sm">Here to help you 24/7</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="text-center">
                <h2 class="text-4xl font-bold text-gray-800 mb-6">Ready to Try Our Pizzas?</h2>
                <p class="text-gray-600 text-lg mb-8">Join thousands of satisfied customers and experience the Pizza Max difference today!</p>
                <a href="{{ route('products') }}" class="inline-block px-10 py-4 bg-orange-600 text-white text-lg font-semibold rounded-lg hover:bg-orange-700 transition">
                    Order Now
                </a>
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