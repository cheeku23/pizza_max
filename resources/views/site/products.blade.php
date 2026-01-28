<x-custom.layout>
    <main class="flex-grow">
        <!-- Page Header -->
        <div class="bg-gradient-to-r from-orange-500 to-orange-600 text-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
                <div class="text-center">
                    <h1 class="text-5xl font-bold mb-4">Our Menu</h1>
                    <p class="text-xl text-orange-100">Choose from our wide variety of delicious pizzas</p>
                </div>
            </div>
        </div>

        <!-- Filters -->
        <div class="bg-white border-b">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
                <div class="flex flex-wrap gap-4 justify-center">
                    <button class="px-6 py-2 bg-orange-600 text-white rounded-lg hover:bg-orange-700 transition">
                        All Pizzas
                    </button>
                    <button class="px-6 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition">
                        Vegetarian
                    </button>
                    <button class="px-6 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition">
                        Non-Veg
                    </button>
                    <button class="px-6 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition">
                        Bestsellers
                    </button>
                </div>
            </div>
        </div>

        <!-- Products Grid -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <!-- Product Card 1 -->

                @foreach ($pizzas as $items)

                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 flex flex-col">
                    <a href="{{ route('product.detail', ['pizza' => $items->slug]) }}" class="h-48 overflow-hidden flex-shrink-0">
                        <img src="https://picsum.photos/seed/{{ $items->slug }}/500/300" alt="{{ $items->name }}" class="w-full h-full object-cover">
                    </a>
                    <div class="p-5 flex flex-col flex-grow">
                        <div class="flex justify-between items-start mb-2">
                            <a href="{{ route('product.detail', ['pizza' => $items->slug]) }}">
                                <h3 class="text-xl font-bold text-gray-800 line-clamp-1 hover:text-orange-600">{{ $items->name }}</h3>
                            </a>
                            <span class="text-lg font-bold text-orange-600 whitespace-nowrap ml-2">Rs. {{ $items->price }}</span>
                        </div>
                        <p class="text-gray-600 text-sm mb-3 h-16 overflow-hidden line-clamp-3">
                            {{ $items->description }}
                        </p>
                        <div class="mt-auto">
                            <div class="text-xs text-gray-500 mb-3">⭐ 4.8 (125 reviews)</div>
                            <a href="{{ route('product.detail', ['pizza' => $items->slug]) }}" class="block w-full px-4 py-2 bg-orange-600 text-white rounded-lg hover:bg-orange-700 transition text-sm font-semibold text-center">
                                Buy Now
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach



            </div>
        </div>
    </main>
</x-custom.layout>