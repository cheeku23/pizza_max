<x-admin-layout>
    <x-slot:title>Pizzas Management</x-slot:title>
    <x-slot:pageTitle>Pizzas</x-slot:pageTitle>
    <x-slot:pageSubtitle>Manage all pizza products</x-slot:pageSubtitle>
    <!-- Action Bar -->
    <div class="mb-6 flex justify-between items-center">
        <div>
            <p class="text-gray-600">Total: <span class="font-bold text-gray-800">12 Pizzas</span></p>
        </div>
        <a href="{{ route('admin.pizzas.create') }}" class="px-6 py-3 bg-orange-600 text-white font-semibold rounded-lg hover:bg-orange-700 transition shadow-lg">
            + Create New Pizza
        </a>
    </div>

    <!-- Pizzas Table -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <div class="p-6 border-b border-gray-200 flex items-center justify-between">
            <h2 class="text-xl font-bold text-gray-800">All Pizzas</h2>
            <a href="{{ route('admin.pizzas.create') }}" class="px-4 py-2 bg-orange-600 text-white rounded-lg text-sm font-semibold">+ New</a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-gray-50 text-xs text-gray-600 uppercase">
                    <tr>
                        <th class="px-6 py-3 text-left">#</th>
                        <th class="px-6 py-3 text-left">Name</th>
                        <!-- <th class="px-6 py-3 text-left">Slug</th> -->
                        <th class="px-6 py-3 text-left">Price</th>
                        <th class="px-6 py-3 text-left">Rating</th>
                        <th class="px-6 py-3 text-left">Reviews</th>
                        <th class="px-6 py-3 text-left">Status</th>
                        <th class="px-6 py-3 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">

                    @if($pizzas->isEmpty())

                     <tr>
                        <td class="px-6 py-4" colspan="8">No pizzas found.</td>
                    </tr>

                    @else

                    @foreach($pizzas as $pizza)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4 font-semibold text-gray-800">{{ $pizza->name ?? '—' }}</td>
                        <!-- <td class="px-6 py-4 text-gray-600">{{ $pizza->slug ?? '—' }}</td> -->
                        <td class="px-6 py-4">Rs. {{ $pizza->price ?? '—' }}</td>
                        <td class="px-6 py-4">{{ $pizza->rating ?? '—' }}</td>
                        <td class="px-6 py-4">{{ $pizza->reviews_count ?? '—' }}</td>
                        <td class="px-6 py-4"><span class="px-2 py-1 bg-green-100 text-green-700 rounded-full text-xs">Active</span></td>
                        <td class="px-6 py-4 text-center">
                            <a href="{{ route('admin.pizzas.show', $pizza->slug) }}" class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-gray-100 hover:bg-gray-200" title="View">
                                <!-- eye icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                   
                  
                    @endforeach

                    @endif
                </tbody>
            </table>
        </div>
    </div>
</x-admin-layout>