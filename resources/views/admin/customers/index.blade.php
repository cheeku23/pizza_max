<x-admin-layout>
    <x-slot:title>Customers Management</x-slot:title>
    <x-slot:pageTitle>Customers</x-slot:pageTitle>
    <x-slot:pageSubtitle>Manage customer accounts</x-slot:pageSubtitle>
    <!-- Stats Overview -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6">
            <p class="text-sm text-gray-500 font-semibold">Total Customers</p>
            <h3 class="text-3xl font-bold text-gray-800 mt-2">89</h3>
        </div>
        <div class="bg-white rounded-lg shadow p-6">
            <p class="text-sm text-gray-500 font-semibold">New This Month</p>
            <h3 class="text-3xl font-bold text-green-600 mt-2">12</h3>
        </div>
        <div class="bg-white rounded-lg shadow p-6">
            <p class="text-sm text-gray-500 font-semibold">Active Customers</p>
            <h3 class="text-3xl font-bold text-blue-600 mt-2">67</h3>
        </div>
        <div class="bg-white rounded-lg shadow p-6">
            <p class="text-sm text-gray-500 font-semibold">Avg. Orders</p>
            <h3 class="text-3xl font-bold text-orange-600 mt-2">3.4</h3>
        </div>
    </div>

    <!-- Customers Table -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <div class="p-6 border-b border-gray-200">
            <h2 class="text-xl font-bold text-gray-800">All Customers</h2>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase">Customer</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase">Email</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase">Orders</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase">Total Spent</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase">Joined</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-orange-500 rounded-full flex items-center justify-center text-white font-bold">
                                    JD
                                </div>
                                <p class="ml-3 font-semibold text-gray-800">John Doe</p>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <p class="text-gray-600">john@example.com</p>
                        </td>
                        <td class="px-6 py-4">
                            <span class="font-semibold text-gray-800">24</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="font-bold text-gray-800">Rs. 28,450</span>
                        </td>
                        <td class="px-6 py-4">
                            <p class="text-gray-600 text-sm">Jan 15, 2025</p>
                        </td>
                        <td class="px-6 py-4">
                            <button class="text-blue-600 hover:text-blue-800 font-semibold text-sm">View Profile</button>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-purple-500 rounded-full flex items-center justify-center text-white font-bold">
                                    JS
                                </div>
                                <p class="ml-3 font-semibold text-gray-800">Jane Smith</p>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <p class="text-gray-600">jane@example.com</p>
                        </td>
                        <td class="px-6 py-4">
                            <span class="font-semibold text-gray-800">18</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="font-bold text-gray-800">Rs. 19,280</span>
                        </td>
                        <td class="px-6 py-4">
                            <p class="text-gray-600 text-sm">Dec 20, 2024</p>
                        </td>
                        <td class="px-6 py-4">
                            <button class="text-blue-600 hover:text-blue-800 font-semibold text-sm">View Profile</button>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold">
                                    MJ
                                </div>
                                <p class="ml-3 font-semibold text-gray-800">Mike Johnson</p>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <p class="text-gray-600">mike@example.com</p>
                        </td>
                        <td class="px-6 py-4">
                            <span class="font-semibold text-gray-800">15</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="font-bold text-gray-800">Rs. 16,890</span>
                        </td>
                        <td class="px-6 py-4">
                            <p class="text-gray-600 text-sm">Nov 10, 2024</p>
                        </td>
                        <td class="px-6 py-4">
                            <button class="text-blue-600 hover:text-blue-800 font-semibold text-sm">View Profile</button>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center text-white font-bold">
                                    SW
                                </div>
                                <p class="ml-3 font-semibold text-gray-800">Sarah Wilson</p>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <p class="text-gray-600">sarah@example.com</p>
                        </td>
                        <td class="px-6 py-4">
                            <span class="font-semibold text-gray-800">12</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="font-bold text-gray-800">Rs. 14,200</span>
                        </td>
                        <td class="px-6 py-4">
                            <p class="text-gray-600 text-sm">Oct 5, 2024</p>
                        </td>
                        <td class="px-6 py-4">
                            <button class="text-blue-600 hover:text-blue-800 font-semibold text-sm">View Profile</button>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-red-500 rounded-full flex items-center justify-center text-white font-bold">
                                    DB
                                </div>
                                <p class="ml-3 font-semibold text-gray-800">David Brown</p>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <p class="text-gray-600">david@example.com</p>
                        </td>
                        <td class="px-6 py-4">
                            <span class="font-semibold text-gray-800">8</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="font-bold text-gray-800">Rs. 9,450</span>
                        </td>
                        <td class="px-6 py-4">
                            <p class="text-gray-600 text-sm">Sep 12, 2024</p>
                        </td>
                        <td class="px-6 py-4">
                            <button class="text-blue-600 hover:text-blue-800 font-semibold text-sm">View Profile</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="px-6 py-4 border-t border-gray-200 flex items-center justify-between">
            <p class="text-sm text-gray-600">Showing 1 to 5 of 89 customers</p>
            <div class="flex space-x-2">
                <button class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">Previous</button>
                <button class="px-4 py-2 bg-orange-600 text-white rounded-lg">1</button>
                <button class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">2</button>
                <button class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">Next</button>
            </div>
        </div>
    </div>
</x-admin-layout>