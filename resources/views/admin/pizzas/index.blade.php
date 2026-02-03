@extends('admin.layout')

@section('title', 'Pizzas Management')
@section('page-title', 'Pizzas')
@section('page-subtitle', 'Manage all pizza products')

@section('content')
<!-- Action Bar -->
<div class="mb-6 flex justify-between items-center">
    <div>
        <p class="text-gray-600">Total: <span class="font-bold text-gray-800">12 Pizzas</span></p>
    </div>
    <a href="{{ route('admin.pizzas.create') }}" class="px-6 py-3 bg-orange-600 text-white font-semibold rounded-lg hover:bg-orange-700 transition shadow-lg">
        + Create New Pizza
    </a>
</div>

<!-- Pizza Cards Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <!-- Pizza Card 1 -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition">
        <div class="h-48 bg-gradient-to-br from-orange-400 to-red-500 flex items-center justify-center">
            <span class="text-6xl">🍕</span>
        </div>
        <div class="p-6">
            <div class="flex justify-between items-start mb-2">
                <h3 class="text-xl font-bold text-gray-800">Margherita Pizza</h3>
                <span class="px-3 py-1 bg-green-100 text-green-700 text-xs font-semibold rounded-full">Active</span>
            </div>
            <p class="text-gray-600 text-sm mb-4">Classic pizza with fresh mozzarella, tomatoes, and basil</p>

            <div class="flex items-center justify-between mb-4">
                <div>
                    <p class="text-2xl font-bold text-orange-600">Rs. 899</p>
                </div>
                <div class="flex items-center">
                    <span class="text-yellow-500 text-lg">⭐</span>
                    <span class="text-gray-700 font-semibold ml-1">4.8</span>
                    <span class="text-gray-500 text-sm ml-1">(124)</span>
                </div>
            </div>

            <div class="flex space-x-2">
                <a href="#" class="flex-1 px-4 py-2 bg-blue-600 text-white text-center rounded-lg hover:bg-blue-700 transition text-sm font-semibold">
                    Edit
                </a>
                <button class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition text-sm font-semibold">
                    Delete
                </button>
            </div>
        </div>
    </div>

    <!-- Pizza Card 2 -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition">
        <div class="h-48 bg-gradient-to-br from-yellow-400 to-orange-500 flex items-center justify-center">
            <span class="text-6xl">🍕</span>
        </div>
        <div class="p-6">
            <div class="flex justify-between items-start mb-2">
                <h3 class="text-xl font-bold text-gray-800">Pepperoni Pizza</h3>
                <span class="px-3 py-1 bg-green-100 text-green-700 text-xs font-semibold rounded-full">Active</span>
            </div>
            <p class="text-gray-600 text-sm mb-4">Loaded with pepperoni slices and mozzarella cheese</p>

            <div class="flex items-center justify-between mb-4">
                <div>
                    <p class="text-2xl font-bold text-orange-600">Rs. 1,099</p>
                </div>
                <div class="flex items-center">
                    <span class="text-yellow-500 text-lg">⭐</span>
                    <span class="text-gray-700 font-semibold ml-1">4.9</span>
                    <span class="text-gray-500 text-sm ml-1">(189)</span>
                </div>
            </div>

            <div class="flex space-x-2">
                <a href="#" class="flex-1 px-4 py-2 bg-blue-600 text-white text-center rounded-lg hover:bg-blue-700 transition text-sm font-semibold">
                    Edit
                </a>
                <button class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition text-sm font-semibold">
                    Delete
                </button>
            </div>
        </div>
    </div>

    <!-- Pizza Card 3 -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition">
        <div class="h-48 bg-gradient-to-br from-red-400 to-pink-500 flex items-center justify-center">
            <span class="text-6xl">🍕</span>
        </div>
        <div class="p-6">
            <div class="flex justify-between items-start mb-2">
                <h3 class="text-xl font-bold text-gray-800">BBQ Chicken Pizza</h3>
                <span class="px-3 py-1 bg-green-100 text-green-700 text-xs font-semibold rounded-full">Active</span>
            </div>
            <p class="text-gray-600 text-sm mb-4">Grilled chicken with BBQ sauce and onions</p>

            <div class="flex items-center justify-between mb-4">
                <div>
                    <p class="text-2xl font-bold text-orange-600">Rs. 1,199</p>
                </div>
                <div class="flex items-center">
                    <span class="text-yellow-500 text-lg">⭐</span>
                    <span class="text-gray-700 font-semibold ml-1">4.7</span>
                    <span class="text-gray-500 text-sm ml-1">(156)</span>
                </div>
            </div>

            <div class="flex space-x-2">
                <a href="#" class="flex-1 px-4 py-2 bg-blue-600 text-white text-center rounded-lg hover:bg-blue-700 transition text-sm font-semibold">
                    Edit
                </a>
                <button class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition text-sm font-semibold">
                    Delete
                </button>
            </div>
        </div>
    </div>

    <!-- Pizza Card 4 -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition">
        <div class="h-48 bg-gradient-to-br from-green-400 to-teal-500 flex items-center justify-center">
            <span class="text-6xl">🍕</span>
        </div>
        <div class="p-6">
            <div class="flex justify-between items-start mb-2">
                <h3 class="text-xl font-bold text-gray-800">Veggie Supreme</h3>
                <span class="px-3 py-1 bg-green-100 text-green-700 text-xs font-semibold rounded-full">Active</span>
            </div>
            <p class="text-gray-600 text-sm mb-4">Fresh vegetables with mozzarella and herbs</p>

            <div class="flex items-center justify-between mb-4">
                <div>
                    <p class="text-2xl font-bold text-orange-600">Rs. 999</p>
                </div>
                <div class="flex items-center">
                    <span class="text-yellow-500 text-lg">⭐</span>
                    <span class="text-gray-700 font-semibold ml-1">4.6</span>
                    <span class="text-gray-500 text-sm ml-1">(98)</span>
                </div>
            </div>

            <div class="flex space-x-2">
                <a href="#" class="flex-1 px-4 py-2 bg-blue-600 text-white text-center rounded-lg hover:bg-blue-700 transition text-sm font-semibold">
                    Edit
                </a>
                <button class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition text-sm font-semibold">
                    Delete
                </button>
            </div>
        </div>
    </div>

    <!-- Pizza Card 5 -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition">
        <div class="h-48 bg-gradient-to-br from-purple-400 to-indigo-500 flex items-center justify-center">
            <span class="text-6xl">🍕</span>
        </div>
        <div class="p-6">
            <div class="flex justify-between items-start mb-2">
                <h3 class="text-xl font-bold text-gray-800">Meat Lovers</h3>
                <span class="px-3 py-1 bg-green-100 text-green-700 text-xs font-semibold rounded-full">Active</span>
            </div>
            <p class="text-gray-600 text-sm mb-4">Loaded with pepperoni, sausage, and bacon</p>

            <div class="flex items-center justify-between mb-4">
                <div>
                    <p class="text-2xl font-bold text-orange-600">Rs. 1,299</p>
                </div>
                <div class="flex items-center">
                    <span class="text-yellow-500 text-lg">⭐</span>
                    <span class="text-gray-700 font-semibold ml-1">4.9</span>
                    <span class="text-gray-500 text-sm ml-1">(201)</span>
                </div>
            </div>

            <div class="flex space-x-2">
                <a href="#" class="flex-1 px-4 py-2 bg-blue-600 text-white text-center rounded-lg hover:bg-blue-700 transition text-sm font-semibold">
                    Edit
                </a>
                <button class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition text-sm font-semibold">
                    Delete
                </button>
            </div>
        </div>
    </div>

    <!-- Pizza Card 6 -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition">
        <div class="h-48 bg-gradient-to-br from-blue-400 to-cyan-500 flex items-center justify-center">
            <span class="text-6xl">🍕</span>
        </div>
        <div class="p-6">
            <div class="flex justify-between items-start mb-2">
                <h3 class="text-xl font-bold text-gray-800">Hawaiian Pizza</h3>
                <span class="px-3 py-1 bg-yellow-100 text-yellow-700 text-xs font-semibold rounded-full">Draft</span>
            </div>
            <p class="text-gray-600 text-sm mb-4">Ham, pineapple, and mozzarella cheese</p>

            <div class="flex items-center justify-between mb-4">
                <div>
                    <p class="text-2xl font-bold text-orange-600">Rs. 1,099</p>
                </div>
                <div class="flex items-center">
                    <span class="text-yellow-500 text-lg">⭐</span>
                    <span class="text-gray-700 font-semibold ml-1">4.5</span>
                    <span class="text-gray-500 text-sm ml-1">(87)</span>
                </div>
            </div>

            <div class="flex space-x-2">
                <a href="#" class="flex-1 px-4 py-2 bg-blue-600 text-white text-center rounded-lg hover:bg-blue-700 transition text-sm font-semibold">
                    Edit
                </a>
                <button class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition text-sm font-semibold">
                    Delete
                </button>
            </div>
        </div>
    </div>
</div>
@endsection