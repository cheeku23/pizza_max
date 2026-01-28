<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Pizza Max</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50">
    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <a href="{{ route('home') }}" class="text-2xl font-bold text-orange-600">
                    🍕 Pizza Max
                </a>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-orange-600">Home</a>
                    <a href="{{ route('products') }}" class="text-gray-700 hover:text-orange-600">Products</a>
                    <span class="text-gray-700 font-semibold">{{ Auth::user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Welcome Banner -->
        <div class="bg-gradient-to-r from-orange-500 to-orange-600 rounded-2xl shadow-xl p-8 mb-8 text-white">
            <h1 class="text-4xl font-bold mb-2">Welcome back, {{ Auth::user()->name }}! 👋</h1>
            <p class="text-orange-100 text-lg">Ready to order some delicious pizzas?</p>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm font-semibold">Total Orders</p>
                        <h3 class="text-3xl font-bold text-gray-800 mt-2">24</h3>
                    </div>
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center">
                        <span class="text-3xl">📦</span>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm font-semibold">Total Spent</p>
                        <h3 class="text-3xl font-bold text-gray-800 mt-2">Rs. 8,450</h3>
                    </div>
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center">
                        <span class="text-3xl">💰</span>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm font-semibold">Favorites</p>
                        <h3 class="text-3xl font-bold text-gray-800 mt-2">8</h3>
                    </div>
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center">
                        <span class="text-3xl">❤️</span>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm font-semibold">Reward Points</p>
                        <h3 class="text-3xl font-bold text-gray-800 mt-2">340</h3>
                    </div>
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center">
                        <span class="text-3xl">⭐</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Recent Orders -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Recent Orders</h2>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                            <div class="flex items-center space-x-4">
                                <div class="w-16 h-16 bg-gradient-to-br from-orange-400 to-red-500 rounded-lg flex items-center justify-center">
                                    <span class="text-3xl">🍕</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800">Margherita Pizza</h4>
                                    <p class="text-sm text-gray-500">Order #12345 • 2 days ago</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="font-bold text-gray-800">Rs. 899</p>
                                <span class="text-xs px-3 py-1 bg-green-100 text-green-600 rounded-full">Delivered</span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                            <div class="flex items-center space-x-4">
                                <div class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-lg flex items-center justify-center">
                                    <span class="text-3xl">🍕</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800">Pepperoni Pizza</h4>
                                    <p class="text-sm text-gray-500">Order #12344 • 5 days ago</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="font-bold text-gray-800">Rs. 1,099</p>
                                <span class="text-xs px-3 py-1 bg-green-100 text-green-600 rounded-full">Delivered</span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                            <div class="flex items-center space-x-4">
                                <div class="w-16 h-16 bg-gradient-to-br from-red-400 to-pink-500 rounded-lg flex items-center justify-center">
                                    <span class="text-3xl">🍕</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800">BBQ Chicken Pizza</h4>
                                    <p class="text-sm text-gray-500">Order #12343 • 1 week ago</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="font-bold text-gray-800">Rs. 1,199</p>
                                <span class="text-xs px-3 py-1 bg-green-100 text-green-600 rounded-full">Delivered</span>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('products') }}" class="block mt-6 text-center px-6 py-3 bg-orange-600 text-white font-semibold rounded-lg hover:bg-orange-700 transition">
                        Order Now
                    </a>
                </div>
            </div>

            <!-- Account Info -->
            <div class="space-y-6">
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">Account Info</h2>
                    <div class="space-y-4">
                        <div>
                            <p class="text-sm text-gray-500 font-semibold">Name</p>
                            <p class="text-gray-800 font-medium">{{ Auth::user()->name }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500 font-semibold">Email</p>
                            <p class="text-gray-800 font-medium">{{ Auth::user()->email }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500 font-semibold">Member Since</p>
                            <p class="text-gray-800 font-medium">{{ Auth::user()->created_at->format('M d, Y') }}</p>
                        </div>
                    </div>
                    <a href="{{ route('profile.edit') }}" class="block mt-6 text-center px-6 py-2 border-2 border-orange-600 text-orange-600 font-semibold rounded-lg hover:bg-orange-50 transition">
                        Edit Profile
                    </a>
                </div>

                <div class="bg-gradient-to-br from-orange-500 to-red-500 rounded-xl shadow-lg p-6 text-white">
                    <h3 class="text-xl font-bold mb-2">Special Offer! 🎉</h3>
                    <p class="text-orange-100 mb-4">Get 20% off on your next order. Use code: <span class="font-bold">PIZZA20</span></p>
                    <a href="{{ route('products') }}" class="block text-center px-6 py-2 bg-white text-orange-600 font-semibold rounded-lg hover:bg-orange-50 transition">
                        Order Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>