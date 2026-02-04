<x-admin-layout>
    <x-slot:title>Orders Management</x-slot:title>
    <x-slot:pageTitle>Orders</x-slot:pageTitle>
    <x-slot:pageSubtitle>Manage customer orders</x-slot:pageSubtitle>
    <!-- Stats Overview -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6">
            <p class="text-sm text-gray-500 font-semibold">Pending Orders</p>
            <h3 class="text-3xl font-bold text-yellow-600 mt-2">8</h3>
        </div>
        <div class="bg-white rounded-lg shadow p-6">
            <p class="text-sm text-gray-500 font-semibold">Processing</p>
            <h3 class="text-3xl font-bold text-blue-600 mt-2">12</h3>
        </div>
        <div class="bg-white rounded-lg shadow p-6">
            <p class="text-sm text-gray-500 font-semibold">Completed</p>
            <h3 class="text-3xl font-bold text-green-600 mt-2">142</h3>
        </div>
        <div class="bg-white rounded-lg shadow p-6">
            <p class="text-sm text-gray-500 font-semibold">Total Revenue</p>
            <h3 class="text-3xl font-bold text-orange-600 mt-2">Rs. 84.5k</h3>
        </div>
    </div>

    <!-- Orders Table -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <div class="p-6 border-b border-gray-200">
            <h2 class="text-xl font-bold text-gray-800">All Orders</h2>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase">Order ID</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase">Customer</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase">Items</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase">Total</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase">Status</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase">Date</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <span class="font-semibold text-gray-800">#1234</span>
                        </td>
                        <td class="px-6 py-4">
                            <div>
                                <p class="font-semibold text-gray-800">John Doe</p>
                                <p class="text-sm text-gray-500">john@example.com</p>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <p class="text-gray-800">2 Items</p>
                        </td>
                        <td class="px-6 py-4">
                            <span class="font-bold text-gray-800">Rs. 1,299</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full text-xs font-semibold">Pending</span>
                        </td>
                        <td class="px-6 py-4">
                            <p class="text-gray-600 text-sm">Jan 29, 2026</p>
                            <p class="text-gray-500 text-xs">2 mins ago</p>
                        </td>
                        <td class="px-6 py-4">
                            <button class="text-blue-600 hover:text-blue-800 font-semibold text-sm">View Details</button>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <span class="font-semibold text-gray-800">#1233</span>
                        </td>
                        <td class="px-6 py-4">
                            <div>
                                <p class="font-semibold text-gray-800">Jane Smith</p>
                                <p class="text-sm text-gray-500">jane@example.com</p>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <p class="text-gray-800">1 Item</p>
                        </td>
                        <td class="px-6 py-4">
                            <span class="font-bold text-gray-800">Rs. 899</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-semibold">Processing</span>
                        </td>
                        <td class="px-6 py-4">
                            <p class="text-gray-600 text-sm">Jan 29, 2026</p>
                            <p class="text-gray-500 text-xs">15 mins ago</p>
                        </td>
                        <td class="px-6 py-4">
                            <button class="text-blue-600 hover:text-blue-800 font-semibold text-sm">View Details</button>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <span class="font-semibold text-gray-800">#1232</span>
                        </td>
                        <td class="px-6 py-4">
                            <div>
                                <p class="font-semibold text-gray-800">Mike Johnson</p>
                                <p class="text-sm text-gray-500">mike@example.com</p>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <p class="text-gray-800">3 Items</p>
                        </td>
                        <td class="px-6 py-4">
                            <span class="font-bold text-gray-800">Rs. 1,499</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">Delivered</span>
                        </td>
                        <td class="px-6 py-4">
                            <p class="text-gray-600 text-sm">Jan 29, 2026</p>
                            <p class="text-gray-500 text-xs">1 hour ago</p>
                        </td>
                        <td class="px-6 py-4">
                            <button class="text-blue-600 hover:text-blue-800 font-semibold text-sm">View Details</button>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <span class="font-semibold text-gray-800">#1231</span>
                        </td>
                        <td class="px-6 py-4">
                            <div>
                                <p class="font-semibold text-gray-800">Sarah Wilson</p>
                                <p class="text-sm text-gray-500">sarah@example.com</p>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <p class="text-gray-800">2 Items</p>
                        </td>
                        <td class="px-6 py-4">
                            <span class="font-bold text-gray-800">Rs. 2,098</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">Delivered</span>
                        </td>
                        <td class="px-6 py-4">
                            <p class="text-gray-600 text-sm">Jan 28, 2026</p>
                            <p class="text-gray-500 text-xs">1 day ago</p>
                        </td>
                        <td class="px-6 py-4">
                            <button class="text-blue-600 hover:text-blue-800 font-semibold text-sm">View Details</button>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <span class="font-semibold text-gray-800">#1230</span>
                        </td>
                        <td class="px-6 py-4">
                            <div>
                                <p class="font-semibold text-gray-800">David Brown</p>
                                <p class="text-sm text-gray-500">david@example.com</p>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <p class="text-gray-800">1 Item</p>
                        </td>
                        <td class="px-6 py-4">
                            <span class="font-bold text-gray-800">Rs. 1,199</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 bg-red-100 text-red-700 rounded-full text-xs font-semibold">Cancelled</span>
                        </td>
                        <td class="px-6 py-4">
                            <p class="text-gray-600 text-sm">Jan 28, 2026</p>
                            <p class="text-gray-500 text-xs">2 days ago</p>
                        </td>
                        <td class="px-6 py-4">
                            <button class="text-blue-600 hover:text-blue-800 font-semibold text-sm">View Details</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="px-6 py-4 border-t border-gray-200 flex items-center justify-between">
            <p class="text-sm text-gray-600">Showing 1 to 5 of 162 orders</p>
            <div class="flex space-x-2">
                <button class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">Previous</button>
                <button class="px-4 py-2 bg-orange-600 text-white rounded-lg">1</button>
                <button class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">2</button>
                <button class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">3</button>
                <button class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">Next</button>
            </div>
        </div>
    </div>
</x-admin-layout>