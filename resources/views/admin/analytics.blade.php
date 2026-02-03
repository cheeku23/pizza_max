@extends('admin.layout')

@section('title', 'Analytics')
@section('page-title', 'Analytics')
@section('page-subtitle', 'Business performance metrics')

@section('content')
<!-- Revenue Stats -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
    <div class="bg-white rounded-xl shadow-lg p-6">
        <p class="text-sm text-gray-500 font-semibold">Today's Revenue</p>
        <h3 class="text-3xl font-bold text-gray-800 mt-2">Rs. 12,450</h3>
        <p class="text-green-600 text-sm mt-1">+8% from yesterday</p>
    </div>
    <div class="bg-white rounded-xl shadow-lg p-6">
        <p class="text-sm text-gray-500 font-semibold">This Week</p>
        <h3 class="text-3xl font-bold text-gray-800 mt-2">Rs. 84,500</h3>
        <p class="text-green-600 text-sm mt-1">+12% from last week</p>
    </div>
    <div class="bg-white rounded-xl shadow-lg p-6">
        <p class="text-sm text-gray-500 font-semibold">This Month</p>
        <h3 class="text-3xl font-bold text-gray-800 mt-2">Rs. 2,45,800</h3>
        <p class="text-green-600 text-sm mt-1">+18% from last month</p>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
    <!-- Sales Chart -->
    <div class="bg-white rounded-xl shadow-lg p-6">
        <h2 class="text-xl font-bold text-gray-800 mb-4">Sales Overview</h2>
        <div class="h-64 flex items-center justify-center border-2 border-dashed border-gray-300 rounded-lg">
            <p class="text-gray-500">Chart will be displayed here</p>
        </div>
    </div>

    <!-- Order Trends -->
    <div class="bg-white rounded-xl shadow-lg p-6">
        <h2 class="text-xl font-bold text-gray-800 mb-4">Order Trends</h2>
        <div class="h-64 flex items-center justify-center border-2 border-dashed border-gray-300 rounded-lg">
            <p class="text-gray-500">Chart will be displayed here</p>
        </div>
    </div>
</div>

<!-- Top Selling Products -->
<div class="bg-white rounded-xl shadow-lg p-6 mb-8">
    <h2 class="text-xl font-bold text-gray-800 mb-6">Top Selling Products</h2>
    <div class="space-y-4">
        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
            <div class="flex items-center space-x-4">
                <div class="w-12 h-12 bg-gradient-to-br from-orange-400 to-red-500 rounded-lg flex items-center justify-center">
                    <span class="text-2xl">🍕</span>
                </div>
                <div>
                    <h4 class="font-bold text-gray-800">Margherita Pizza</h4>
                    <p class="text-sm text-gray-500">48 orders this month</p>
                </div>
            </div>
            <div class="text-right">
                <p class="font-bold text-gray-800">Rs. 43,152</p>
                <p class="text-sm text-green-600">+24%</p>
            </div>
        </div>

        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
            <div class="flex items-center space-x-4">
                <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-lg flex items-center justify-center">
                    <span class="text-2xl">🍕</span>
                </div>
                <div>
                    <h4 class="font-bold text-gray-800">Pepperoni Pizza</h4>
                    <p class="text-sm text-gray-500">42 orders this month</p>
                </div>
            </div>
            <div class="text-right">
                <p class="font-bold text-gray-800">Rs. 46,158</p>
                <p class="text-sm text-green-600">+18%</p>
            </div>
        </div>

        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
            <div class="flex items-center space-x-4">
                <div class="w-12 h-12 bg-gradient-to-br from-red-400 to-pink-500 rounded-lg flex items-center justify-center">
                    <span class="text-2xl">🍕</span>
                </div>
                <div>
                    <h4 class="font-bold text-gray-800">BBQ Chicken Pizza</h4>
                    <p class="text-sm text-gray-500">38 orders this month</p>
                </div>
            </div>
            <div class="text-right">
                <p class="font-bold text-gray-800">Rs. 45,562</p>
                <p class="text-sm text-green-600">+15%</p>
            </div>
        </div>
    </div>
</div>

<!-- Performance Metrics -->
<div class="grid grid-cols-1 md:grid-cols-4 gap-6">
    <div class="bg-white rounded-lg shadow p-6">
        <p class="text-sm text-gray-500 font-semibold">Avg. Order Value</p>
        <h3 class="text-2xl font-bold text-gray-800 mt-2">Rs. 1,245</h3>
    </div>
    <div class="bg-white rounded-lg shadow p-6">
        <p class="text-sm text-gray-500 font-semibold">Orders/Day</p>
        <h3 class="text-2xl font-bold text-gray-800 mt-2">24</h3>
    </div>
    <div class="bg-white rounded-lg shadow p-6">
        <p class="text-sm text-gray-500 font-semibold">Customer Retention</p>
        <h3 class="text-2xl font-bold text-gray-800 mt-2">78%</h3>
    </div>
    <div class="bg-white rounded-lg shadow p-6">
        <p class="text-sm text-gray-500 font-semibold">Avg. Rating</p>
        <h3 class="text-2xl font-bold text-gray-800 mt-2">4.8 ⭐</h3>
    </div>
</div>
@endsection