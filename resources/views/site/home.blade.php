<x-custom.layout>

<main class="flex-grow">
        <!-- Hero Section -->
        <div class="bg-gradient-to-r from-orange-500 to-orange-600 text-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
                <div class="text-center">
                    <h1 class="text-5xl md:text-6xl font-bold mb-4">
                        Welcome to Pizza Max
                    </h1>
                    <p class="text-xl md:text-2xl mb-8 text-orange-100">
                        Fresh, Hot & Delicious Pizzas Delivered to Your Doorstep
                    </p>
                    <div class="flex justify-center gap-4">
                        <a href="{{ route('products') }}" class="px-8 py-3 bg-white text-orange-600 rounded-lg font-semibold hover:bg-gray-100 transition">
                            Order Now
                        </a>
                        <a href="{{ route('about') }}" class="px-8 py-3 bg-transparent border-2 border-white text-white rounded-lg font-semibold hover:bg-white hover:text-orange-600 transition">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Featured Products Section -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Featured Pizzas</h2>
                <p class="text-gray-600 text-lg">Our most popular and delicious pizzas</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Pizza Card 1 -->

                
                
                
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <a href="{{ route('products') }}" class="block h-64 overflow-hidden">
                        <img src="https://picsum.photos/seed/pizza1/600/400" alt="Margherita Pizza" class="w-full h-full object-cover">
                    </a>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <a href="{{ route('products') }}">
                                <h3 class="text-2xl font-bold text-gray-800 hover:text-orange-600">Margherita</h3>
                            </a>
                            <span class="text-2xl font-bold text-orange-600">Rs. 899</span>
                        </div>
                        <p class="text-gray-600 mb-4 h-20 overflow-hidden">
                            Classic Italian pizza with fresh mozzarella, tomatoes, and basil on our signature dough.
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">⭐ 4.8 (125 reviews)</span>
                            <a href="{{ route('products') }}" class="px-6 py-2 bg-orange-600 text-white rounded-lg hover:bg-orange-700 transition">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Pizza Card 2 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="h-64 overflow-hidden">
                        <img src="https://picsum.photos/seed/pizza2/600/400" alt="Pepperoni Pizza" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-2xl font-bold text-gray-800">Pepperoni</h3>
                            <span class="text-2xl font-bold text-orange-600">Rs. 1099</span>
                        </div>
                        <p class="text-gray-600 mb-4 h-20 overflow-hidden">
                            Loaded with premium pepperoni slices and extra cheese for the ultimate flavor experience.
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">⭐ 4.9 (203 reviews)</span>
                            <button class="px-6 py-2 bg-orange-600 text-white rounded-lg hover:bg-orange-700 transition">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Pizza Card 3 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="h-64 overflow-hidden">
                        <img src="https://picsum.photos/seed/pizza3/600/400" alt="Veggie Supreme Pizza" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-2xl font-bold text-gray-800">Veggie Supreme</h3>
                            <span class="text-2xl font-bold text-orange-600">Rs. 999</span>
                        </div>
                        <p class="text-gray-600 mb-4 h-20 overflow-hidden">
                            Fresh vegetables including bell peppers, mushrooms, onions, and olives on a crispy crust.
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">⭐ 4.7 (98 reviews)</span>
                            <button class="px-6 py-2 bg-orange-600 text-white rounded-lg hover:bg-orange-700 transition">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Pizza Card 4 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="h-64 overflow-hidden">
                        <img src="https://picsum.photos/seed/pizza4/600/400" alt="BBQ Chicken Pizza" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-2xl font-bold text-gray-800">BBQ Chicken</h3>
                            <span class="text-2xl font-bold text-orange-600">Rs. 1199</span>
                        </div>
                        <p class="text-gray-600 mb-4 h-20 overflow-hidden">
                            Tender chicken pieces with tangy BBQ sauce and red onions for a smoky taste.
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">⭐ 4.9 (187 reviews)</span>
                            <button class="px-6 py-2 bg-orange-600 text-white rounded-lg hover:bg-orange-700 transition">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Pizza Card 5 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="h-64 overflow-hidden">
                        <img src="https://picsum.photos/seed/pizza5/600/400" alt="Meat Lovers Pizza" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-2xl font-bold text-gray-800">Meat Lovers</h3>
                            <span class="text-2xl font-bold text-orange-600">Rs. 1299</span>
                        </div>
                        <p class="text-gray-600 mb-4 h-20 overflow-hidden">
                            Packed with pepperoni, sausage, bacon, and ham for meat enthusiasts.
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">⭐ 4.8 (156 reviews)</span>
                            <button class="px-6 py-2 bg-orange-600 text-white rounded-lg hover:bg-orange-700 transition">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Pizza Card 6 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="h-64 overflow-hidden">
                        <img src="https://picsum.photos/seed/pizza6/600/400" alt="Hawaiian Pizza" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-2xl font-bold text-gray-800">Hawaiian</h3>
                            <span class="text-2xl font-bold text-orange-600">Rs. 1099</span>
                        </div>
                        <p class="text-gray-600 mb-4 h-20 overflow-hidden">
                            Sweet and savory combination of ham and pineapple on mozzarella cheese.
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">⭐ 4.6 (142 reviews)</span>
                            <button class="px-6 py-2 bg-orange-600 text-white rounded-lg hover:bg-orange-700 transition">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- View All Button -->
            <div class="text-center mt-12">
                <a href="{{ route('products') }}" class="inline-block px-10 py-4 bg-orange-600 text-white text-lg font-semibold rounded-lg hover:bg-orange-700 transition">
                    View All Products
                </a>
            </div>
        </div>

        <!-- Features Section -->
        <div class="bg-gray-100 py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Feature 1 -->
                    <div class="text-center">
                        <div class="w-20 h-20 bg-orange-600 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-4xl">🚀</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Fast Delivery</h3>
                        <p class="text-gray-600">Get your pizza delivered hot and fresh in 30 minutes or less!</p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="text-center">
                        <div class="w-20 h-20 bg-orange-600 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-4xl">🌟</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Premium Quality</h3>
                        <p class="text-gray-600">We use only the freshest ingredients for the best taste.</p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="text-center">
                        <div class="w-20 h-20 bg-orange-600 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-4xl">💯</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">100% Satisfaction</h3>
                        <p class="text-gray-600">Your happiness is our priority. Love it or get your money back!</p>
                    </div>
                </div>
            </div>
        </div>
    </main>


</x-custom.layout>