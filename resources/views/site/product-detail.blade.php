<x-custom.layout>

    <main class="flex-grow">
        <!-- Breadcrumb -->
        <div class="bg-white border-b">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
                <div class="flex items-center space-x-2 text-sm text-gray-600">
                    <a href="{{ route('home') }}" class="hover:text-orange-600">Home</a>
                    <span>/</span>
                    <a href="{{ route('products') }}" class="hover:text-orange-600">Products</a>
                    <span>/</span>
                    <span class="text-gray-800 font-semibold">{{ $pizza->name }}</span>
                </div>
            </div>
        </div>

        <!-- Product Detail Section -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Product Image Gallery -->
                <div>
                    <!-- Main Image -->
                    <div class="rounded-xl h-96 overflow-hidden mb-4 shadow-lg">
                        <img src="https://picsum.photos/seed/{{ $pizza->slug }}/800/600" alt="{{ $pizza->name }}" class="w-full h-full object-cover">
                    </div>

                    <!-- Thumbnail Images -->
                    <div class="grid grid-cols-4 gap-4">
                        <div class="rounded-lg h-24 overflow-hidden cursor-pointer border-2 border-orange-600 shadow">
                            <img src="https://picsum.photos/seed/{{ $pizza->slug }}/800/600" alt="{{ $pizza->name }}" class="w-full h-full object-cover">
                        </div>
                        <div class="rounded-lg h-24 overflow-hidden cursor-pointer hover:border-2 hover:border-orange-600 shadow">
                            <img src="https://picsum.photos/seed/{{ $pizza->slug }}-2/800/600" alt="{{ $pizza->name }}" class="w-full h-full object-cover">
                        </div>
                        <div class="rounded-lg h-24 overflow-hidden cursor-pointer hover:border-2 hover:border-orange-600 shadow">
                            <img src="https://picsum.photos/seed/{{ $pizza->slug }}-3/800/600" alt="{{ $pizza->name }}" class="w-full h-full object-cover">
                        </div>
                        <div class="rounded-lg h-24 overflow-hidden cursor-pointer hover:border-2 hover:border-orange-600 shadow">
                            <img src="https://picsum.photos/seed/{{ $pizza->slug }}-4/800/600" alt="{{ $pizza->name }}" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>

                <!-- Product Information -->
                <div>
                    <!-- Product Title & Rating -->
                    <div class="mb-6">
                        <h1 class="text-4xl font-bold text-gray-800 mb-3">{{ $pizza->name }}</h1>
                        <div class="flex items-center space-x-4 mb-4">
                            <div class="flex items-center">
                                <span class="text-yellow-500 text-xl">⭐⭐⭐⭐⭐</span>
                                <span class="ml-2 text-gray-600 font-semibold">4.8</span>
                            </div>
                            <span class="text-gray-500">(125 reviews)</span>
                            <span class="px-3 py-1 bg-green-100 text-green-800 text-sm font-semibold rounded-full">In Stock</span>
                        </div>
                    </div>

                    <!-- Price -->
                    <div class="mb-6">
                        <div class="flex items-baseline space-x-3">
                            <span class="text-4xl font-bold text-orange-600">{{ $pizza->price }}</span>
                            <span class="text-2xl text-gray-400 line-through">Rs. 1099</span>
                            <span class="px-3 py-1 bg-red-100 text-red-600 text-sm font-bold rounded">18% OFF</span>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="mb-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Description</h3>
                        <p class="text-gray-600 leading-relaxed">
                            {{ $pizza->description }}
                        </p>
                    </div>

                    <!-- Size Selection -->
                    <div class="mb-6">
                        <h3 class="text-lg font-bold text-gray-800 mb-3">Select Size</h3>
                        <div class="flex space-x-3">
                            <button class="px-6 py-3 border-2 border-gray-300 rounded-lg hover:border-orange-600 hover:bg-orange-50 transition">
                                <div class="font-semibold">Small</div>
                                <div class="text-sm text-gray-500">8"</div>
                            </button>
                            <button class="px-6 py-3 border-2 border-orange-600 bg-orange-50 rounded-lg transition">
                                <div class="font-semibold">Medium</div>
                                <div class="text-sm text-gray-500">12"</div>
                            </button>
                            <button class="px-6 py-3 border-2 border-gray-300 rounded-lg hover:border-orange-600 hover:bg-orange-50 transition">
                                <div class="font-semibold">Large</div>
                                <div class="text-sm text-gray-500">16"</div>
                            </button>
                        </div>
                    </div>

                    <!-- Crust Type -->
                    <div class="mb-6">
                        <h3 class="text-lg font-bold text-gray-800 mb-3">Crust Type</h3>
                        <div class="flex space-x-3">
                            <button class="px-6 py-3 border-2 border-orange-600 bg-orange-50 rounded-lg transition font-semibold">
                                Thin Crust
                            </button>
                            <button class="px-6 py-3 border-2 border-gray-300 rounded-lg hover:border-orange-600 hover:bg-orange-50 transition font-semibold">
                                Thick Crust
                            </button>
                            <button class="px-6 py-3 border-2 border-gray-300 rounded-lg hover:border-orange-600 hover:bg-orange-50 transition font-semibold">
                                Stuffed Crust
                            </button>
                        </div>
                    </div>

                    <!-- Quantity -->
                    <div class="mb-6">
                        <h3 class="text-lg font-bold text-gray-800 mb-3">Quantity</h3>
                        <div class="flex items-center space-x-4">
                            <button class="w-12 h-12 bg-gray-200 rounded-lg font-bold text-xl hover:bg-gray-300 transition">-</button>
                            <span class="text-2xl font-bold w-16 text-center">1</span>
                            <button class="w-12 h-12 bg-gray-200 rounded-lg font-bold text-xl hover:bg-gray-300 transition">+</button>
                        </div>
                    </div>

                    <!-- Add to Cart & Buy Now -->
                    <div class="mb-8 flex space-x-4">
                        <button class="flex-1 px-8 py-4 bg-orange-600 text-white font-bold text-lg rounded-lg hover:bg-orange-700 transition shadow-lg">
                            🛒 Add to Cart
                        </button>
                        <button class="flex-1 px-8 py-4 bg-gray-800 text-white font-bold text-lg rounded-lg hover:bg-gray-900 transition shadow-lg">
                            Buy Now
                        </button>
                    </div>

                    <!-- Additional Info -->
                    <div class="border-t pt-6">
                        <div class="grid grid-cols-2 gap-4 text-sm">
                            <div class="flex items-center space-x-2">
                                <span class="text-2xl">🚚</span>
                                <div>
                                    <div class="font-semibold">Free Delivery</div>
                                    <div class="text-gray-500">On orders above Rs. 500</div>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="text-2xl">⏱️</span>
                                <div>
                                    <div class="font-semibold">30 Min Delivery</div>
                                    <div class="text-gray-500">Hot & Fresh</div>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="text-2xl">🔄</span>
                                <div>
                                    <div class="font-semibold">Easy Returns</div>
                                    <div class="text-gray-500">7 days return policy</div>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="text-2xl">✅</span>
                                <div>
                                    <div class="font-semibold">Quality Assured</div>
                                    <div class="text-gray-500">100% Fresh ingredients</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Details Tabs -->
            <div class="mt-16">
                <div class="border-b">
                    <div class="flex space-x-8">
                        <button class="pb-4 px-2 border-b-2 border-orange-600 text-orange-600 font-semibold">
                            Ingredients
                        </button>
                        <button class="pb-4 px-2 text-gray-600 hover:text-orange-600 font-semibold">
                            Nutritional Info
                        </button>
                        <button class="pb-4 px-2 text-gray-600 hover:text-orange-600 font-semibold">
                            Reviews (125)
                        </button>
                    </div>
                </div>

                <div class="py-8">
                    <!-- Ingredients Tab -->
                    <div class="bg-white rounded-xl shadow-lg p-8">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6">Ingredients</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <h4 class="font-semibold text-gray-700 mb-3">Base & Cheese:</h4>
                                <ul class="space-y-2 text-gray-600">
                                    <li>✓ Hand-tossed Pizza Dough</li>
                                    <li>✓ Fresh Mozzarella Cheese</li>
                                    <li>✓ Parmesan Cheese</li>
                                    <li>✓ Premium Tomato Sauce</li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-700 mb-3">Toppings:</h4>
                                <ul class="space-y-2 text-gray-600">
                                    <li>✓ Fresh Basil Leaves</li>
                                    <li>✓ Ripe Cherry Tomatoes</li>
                                    <li>✓ Extra Virgin Olive Oil</li>
                                    <li>✓ Sea Salt & Black Pepper</li>
                                </ul>
                            </div>
                        </div>
                        <div class="mt-6 p-4 bg-yellow-50 rounded-lg">
                            <p class="text-sm text-gray-700">
                                <span class="font-semibold">⚠️ Allergen Information:</span> Contains dairy (milk, cheese) and gluten (wheat flour). Processed in a facility that also handles nuts and soy.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Related Products -->
            <div class="mt-16">
                <h2 class="text-3xl font-bold text-gray-800 mb-8">You May Also Like</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Related Product 1 -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                        <div class="h-48 overflow-hidden">
                            <img src="https://picsum.photos/seed/related1/500/300" alt="Pepperoni Pizza" class="w-full h-full object-cover">
                        </div>
                        <div class="p-5">
                            <h3 class="text-lg font-bold text-gray-800 mb-2">Pepperoni</h3>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-orange-600">Rs. 1099</span>
                                <span class="text-sm text-gray-500">⭐ 4.9</span>
                            </div>
                        </div>
                    </div>

                    <!-- Related Product 2 -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                        <div class="h-48 overflow-hidden">
                            <img src="https://picsum.photos/seed/related2/500/300" alt="Veggie Supreme Pizza" class="w-full h-full object-cover">
                        </div>
                        <div class="p-5">
                            <h3 class="text-lg font-bold text-gray-800 mb-2">Veggie Supreme</h3>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-orange-600">Rs. 999</span>
                                <span class="text-sm text-gray-500">⭐ 4.7</span>
                            </div>
                        </div>
                    </div>

                    <!-- Related Product 3 -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                        <div class="h-48 overflow-hidden">
                            <img src="https://picsum.photos/seed/related3/500/300" alt="BBQ Chicken Pizza" class="w-full h-full object-cover">
                        </div>
                        <div class="p-5">
                            <h3 class="text-lg font-bold text-gray-800 mb-2">BBQ Chicken</h3>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-orange-600">Rs. 1199</span>
                                <span class="text-sm text-gray-500">⭐ 4.9</span>
                            </div>
                        </div>
                    </div>

                    <!-- Related Product 4 -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                        <div class="h-48 overflow-hidden">
                            <img src="https://picsum.photos/seed/related4/500/300" alt="Hawaiian Pizza" class="w-full h-full object-cover">
                        </div>
                        <div class="p-5">
                            <h3 class="text-lg font-bold text-gray-800 mb-2">Hawaiian</h3>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-orange-600">Rs. 1099</span>
                                <span class="text-sm text-gray-500">⭐ 4.6</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-custom.layout>