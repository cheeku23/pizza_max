@extends('admin.layout')

@section('title', 'Settings')
@section('page-title', 'Settings')
@section('page-subtitle', 'Manage application settings')

@section('content')
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <!-- Settings Navigation -->
    <div class="bg-white rounded-xl shadow-lg p-6">
        <h2 class="text-xl font-bold text-gray-800 mb-4">Settings Menu</h2>
        <nav class="space-y-2">
            <a href="#general" class="block px-4 py-3 bg-orange-50 text-orange-700 rounded-lg font-semibold">
                General Settings
            </a>
            <a href="#payment" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-lg font-semibold">
                Payment Settings
            </a>
            <a href="#delivery" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-lg font-semibold">
                Delivery Settings
            </a>
            <a href="#notifications" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-lg font-semibold">
                Notifications
            </a>
            <a href="#security" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-lg font-semibold">
                Security
            </a>
        </nav>
    </div>

    <!-- Settings Content -->
    <div class="lg:col-span-2">
        <!-- General Settings -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-6">
            <h2 class="text-xl font-bold text-gray-800 mb-6">General Settings</h2>

            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Store Name</label>
                    <input type="text" value="Pizza Max" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Store Email</label>
                    <input type="email" value="info@pizzamax.com" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Store Phone</label>
                    <input type="text" value="+92 300 1234567" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Store Address</label>
                    <textarea rows="3" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">123 Main Street, Karachi, Pakistan</textarea>
                </div>

                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                    <div>
                        <p class="font-semibold text-gray-800">Store Status</p>
                        <p class="text-sm text-gray-500">Enable or disable online orders</p>
                    </div>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer" checked>
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-orange-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-orange-600"></div>
                    </label>
                </div>

                <div class="pt-4">
                    <button class="px-6 py-3 bg-orange-600 text-white font-semibold rounded-lg hover:bg-orange-700 transition">
                        Save Changes
                    </button>
                </div>
            </div>
        </div>

        <!-- Business Hours -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-xl font-bold text-gray-800 mb-6">Business Hours</h2>

            <div class="space-y-4">
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                    <div>
                        <p class="font-semibold text-gray-800">Monday - Friday</p>
                        <p class="text-sm text-gray-500">10:00 AM - 11:00 PM</p>
                    </div>
                    <button class="text-blue-600 hover:text-blue-800 font-semibold text-sm">Edit</button>
                </div>

                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                    <div>
                        <p class="font-semibold text-gray-800">Saturday - Sunday</p>
                        <p class="text-sm text-gray-500">11:00 AM - 12:00 AM</p>
                    </div>
                    <button class="text-blue-600 hover:text-blue-800 font-semibold text-sm">Edit</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection