<x-admin-layout>
    <x-slot:title>Pizza Details</x-slot:title>
    <x-slot:pageTitle>Pizza Details</x-slot:pageTitle>
    <x-slot:pageSubtitle>Details for {{ $pizza->name ?? 'Pizza' }}</x-slot:pageSubtitle>

    <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-lg p-6">
        <div class="flex items-start space-x-6">
            <div class="w-48 h-48 bg-gray-100 rounded-lg flex items-center justify-center text-6xl">🍕</div>
            <div class="flex-1">
                <h2 class="text-2xl font-bold text-gray-800">{{ $pizza->name ?? '—' }}</h2>
                <p class="text-sm text-gray-500 mb-4">Slug: {{ $pizza->slug ?? '—' }}</p>

                <p class="text-gray-700 mb-4">{{ $pizza->description ?? 'No description available.' }}</p>

                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div>
                        <p class="text-sm text-gray-500">Price</p>
                        <p class="font-semibold">Rs. {{ $pizza->price ?? '—' }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Rating</p>
                        <p class="font-semibold">{{ $pizza->rating ?? '—' }} ⭐</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Reviews</p>
                        <p class="font-semibold">{{ $pizza->reviews_count ?? '—' }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Created At</p>
                        <p class="font-semibold">{{ optional($pizza->created_at)->toDayDateTimeString() ?? '—' }}</p>
                    </div>
                </div>

                <div class="flex space-x-3">
                    <a href="{{ route('admin.pizzas.index') }}" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700">← Back</a>
                    <a href="#" class="px-4 py-2 bg-blue-600 text-white rounded-lg">Edit</a>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>