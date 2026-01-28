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