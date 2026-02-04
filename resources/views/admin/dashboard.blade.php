<x-admin-layout>
    <x-slot:title>Admin Dashboard</x-slot:title>
    <x-slot:pageTitle>Dashboard</x-slot:pageTitle>
    <x-slot:pageSubtitle>Overview of your pizza business</x-slot:pageSubtitle>
    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-xl shadow-lg p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm font-semibold">Total Pizzas</p>
                    <h3 class="text-3xl font-bold text-gray-800 mt-2">12</h3>
                    <p class="text-green-600 text-sm mt-1">+2 this month</p>
                </div>
                <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center">
                    <span class="text-3xl">🍕</span>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-lg p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm font-semibold">Total Orders</p>
                    <h3 class="text-3xl font-bold text-gray-800 mt-2">148</h3>
                    <p class="text-green-600 text-sm mt-1">+18% from last month</p>
                </div>
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center">
                    <span class="text-3xl">📦</span>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-lg p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm font-semibold">Revenue</p>
                    <h3 class="text-3xl font-bold text-gray-800 mt-2">Rs. 84,500</h3>
                    <p class="text-green-600 text-sm mt-1">+12% from last month</p>
                </div>
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center">
                    <span class="text-3xl">💰</span>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-lg p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm font-semibold">Total Customers</p>
                    <h3 class="text-3xl font-bold text-gray-800 mt-2">89</h3>
                    <p class="text-green-600 text-sm mt-1">+7 new this week</p>
                </div>
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center">
                    <span class="text-3xl">👥</span>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Recent Orders -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Recent Orders</h2>
            <div class="space-y-3">
                <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                    <div class="flex items-center space-x-3">
                        <div class="w-12 h-12 bg-gradient-to-br from-orange-400 to-red-500 rounded-lg flex items-center justify-center">
                            <span class="text-2xl">🍕</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800">Order #1234</h4>
                            <p class="text-xs text-gray-500">John Doe • 2 mins ago</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="font-bold text-gray-800">Rs. 1,299</p>
                        <span class="text-xs px-2 py-1 bg-yellow-100 text-yellow-700 rounded-full">Pending</span>
                    </div>
                </div>

                <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                    <div class="flex items-center space-x-3">
                        <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-lg flex items-center justify-center">
                            <span class="text-2xl">🍕</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800">Order #1233</h4>
                            <p class="text-xs text-gray-500">Jane Smith • 15 mins ago</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="font-bold text-gray-800">Rs. 899</p>
                        <span class="text-xs px-2 py-1 bg-blue-100 text-blue-700 rounded-full">Processing</span>
                    </div>
                </div>

                <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                    <div class="flex items-center space-x-3">
                        <div class="w-12 h-12 bg-gradient-to-br from-red-400 to-pink-500 rounded-lg flex items-center justify-center">
                            <span class="text-2xl">🍕</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800">Order #1232</h4>
                            <p class="text-xs text-gray-500">Mike Johnson • 1 hour ago</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="font-bold text-gray-800">Rs. 1,499</p>
                        <span class="text-xs px-2 py-1 bg-green-100 text-green-700 rounded-full">Delivered</span>
                    </div>
                </div>
            </div>
            <a href="{{ route('admin.orders.index') }}" class="block mt-4 text-center text-orange-600 hover:text-orange-700 font-semibold">
                View All Orders →
            </a>
        </div>

        <!-- Popular Pizzas -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Popular Pizzas</h2>
            <div class="space-y-3">
                <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                    <div class="flex items-center space-x-3">
                        <div class="w-12 h-12 bg-orange-500 rounded-lg"></div>
                        <div>
                            <h4 class="font-semibold text-gray-800">Margherita Pizza</h4>
                            <p class="text-xs text-gray-500">48 orders this month</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-bold text-gray-800">Rs. 899</p>
                        <div class="flex items-center">
                            <span class="text-yellow-500">⭐</span>
                            <span class="text-xs text-gray-600 ml-1">4.8</span>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                    <div class="flex items-center space-x-3">
                        <div class="w-12 h-12 bg-red-500 rounded-lg"></div>
                        <div>
                            <h4 class="font-semibold text-gray-800">Pepperoni Pizza</h4>
                            <p class="text-xs text-gray-500">42 orders this month</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-bold text-gray-800">Rs. 1,099</p>
                        <div class="flex items-center">
                            <span class="text-yellow-500">⭐</span>
                            <span class="text-xs text-gray-600 ml-1">4.9</span>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                    <div class="flex items-center space-x-3">
                        <div class="w-12 h-12 bg-yellow-600 rounded-lg"></div>
                        <div>
                            <h4 class="font-semibold text-gray-800">BBQ Chicken Pizza</h4>
                            <p class="text-xs text-gray-500">38 orders this month</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-bold text-gray-800">Rs. 1,199</p>
                        <div class="flex items-center">
                            <span class="text-yellow-500">⭐</span>
                            <span class="text-xs text-gray-600 ml-1">4.7</span>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('admin.pizzas.index') }}" class="block mt-4 text-center text-orange-600 hover:text-orange-700 font-semibold">
                View All Pizzas →
            </a>
        </div>
    </div>
</x-admin-layout>