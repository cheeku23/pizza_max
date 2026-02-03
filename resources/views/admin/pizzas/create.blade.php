@extends('admin.layout')

@section('title', 'Create Pizza')
@section('page-title', 'Create New Pizza')
@section('page-subtitle', 'Add a new pizza to your menu')

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="bg-white rounded-xl shadow-lg p-8">
        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Pizza Name -->
            <div class="mb-6">
                <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
                    Pizza Name <span class="text-red-500">*</span>
                </label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent"
                    placeholder="e.g. Margherita Pizza"
                    required>
            </div>

            <!-- Slug -->
            <div class="mb-6">
                <label for="slug" class="block text-sm font-semibold text-gray-700 mb-2">
                    Slug <span class="text-red-500">*</span>
                </label>
                <input
                    type="text"
                    id="slug"
                    name="slug"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent"
                    placeholder="e.g. margherita-pizza"
                    required>
                <p class="text-xs text-gray-500 mt-1">URL-friendly version of the name (e.g. margherita-pizza)</p>
            </div>

            <!-- Description -->
            <div class="mb-6">
                <label for="description" class="block text-sm font-semibold text-gray-700 mb-2">
                    Description <span class="text-red-500">*</span>
                </label>
                <textarea
                    id="description"
                    name="description"
                    rows="4"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent"
                    placeholder="Describe the pizza ingredients and taste..."
                    required></textarea>
            </div>

            <!-- Price -->
            <div class="mb-6">
                <label for="price" class="block text-sm font-semibold text-gray-700 mb-2">
                    Price (Rs.) <span class="text-red-500">*</span>
                </label>
                <input
                    type="text"
                    id="price"
                    name="price"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent"
                    placeholder="e.g. 899"
                    required>
            </div>

            <!-- Pizza Image -->
            <div class="mb-6">
                <label for="image" class="block text-sm font-semibold text-gray-700 mb-2">
                    Pizza Image <span class="text-red-500">*</span>
                </label>
                <div class="flex items-center space-x-4">
                    <div class="flex-1">
                        <input
                            type="file"
                            id="image"
                            name="image"
                            accept="image/*"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent"
                            required>
                        <p class="text-xs text-gray-500 mt-1">Upload an image of the pizza (JPG, PNG, max 2MB)</p>
                    </div>
                </div>

                <!-- Image Preview -->
                <div id="imagePreview" class="mt-4 hidden">
                    <p class="text-sm font-semibold text-gray-700 mb-2">Preview:</p>
                    <img id="previewImg" src="" alt="Pizza preview" class="w-48 h-48 object-cover rounded-lg border border-gray-300">
                </div>
            </div>

            <!-- Rating -->
            <div class="mb-6">
                <label for="rating" class="block text-sm font-semibold text-gray-700 mb-2">
                    Rating <span class="text-red-500">*</span>
                </label>
                <input
                    type="text"
                    id="rating"
                    name="rating"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent"
                    placeholder="e.g. 4.5"
                    required>
                <p class="text-xs text-gray-500 mt-1">Enter rating between 0 and 5</p>
            </div>

            <!-- Reviews Count -->
            <div class="mb-6">
                <label for="reviews_count" class="block text-sm font-semibold text-gray-700 mb-2">
                    Reviews Count <span class="text-red-500">*</span>
                </label>
                <input
                    type="text"
                    id="reviews_count"
                    name="reviews_count"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent"
                    placeholder="e.g. 124"
                    required>
                <p class="text-xs text-gray-500 mt-1">Number of customer reviews</p>
            </div>

            <!-- Action Buttons -->
            <div class="flex items-center justify-end space-x-4 pt-6 border-t border-gray-200">
                <a href="{{ route('admin.pizzas.index') }}" class="px-6 py-3 border-2 border-gray-300 text-gray-700 font-semibold rounded-lg hover:bg-gray-50 transition">
                    Cancel
                </a>
                <button type="submit" class="px-6 py-3 bg-orange-600 text-white font-semibold rounded-lg hover:bg-orange-700 transition shadow-lg">
                    Create Pizza
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Image Preview JavaScript -->
<script>
    document.getElementById('image').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('previewImg').src = e.target.result;
                document.getElementById('imagePreview').classList.remove('hidden');
            }
            reader.readAsDataURL(file);
        }
    });
</script>
@endsection