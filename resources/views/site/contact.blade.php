<x-custom.layout>

    <!-- Main Content -->
    <main class="flex-grow">
        <!-- Page Header -->
        <div class="bg-gradient-to-r from-orange-500 to-orange-600 text-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
                <div class="text-center">
                    <h1 class="text-5xl font-bold mb-4">Contact Us</h1>
                    <p class="text-xl text-orange-100">We'd love to hear from you!</p>
                </div>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="bg-white rounded-xl shadow-lg p-8">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Send us a Message</h2>
                    <form class="space-y-6">
                        <div>
                            <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Full Name</label>
                            <input type="text" id="name" name="name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-600 focus:border-transparent outline-none transition" placeholder="Your name">
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email Address</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-600 focus:border-transparent outline-none transition" placeholder="your@email.com">
                        </div>

                        <div>
                            <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">Phone Number</label>
                            <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-600 focus:border-transparent outline-none transition" placeholder="+92 300 1234567">
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-semibold text-gray-700 mb-2">Subject</label>
                            <input type="text" id="subject" name="subject" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-600 focus:border-transparent outline-none transition" placeholder="How can we help?">
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">Message</label>
                            <textarea id="message" name="message" rows="5" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-600 focus:border-transparent outline-none transition resize-none" placeholder="Tell us more about your inquiry..."></textarea>
                        </div>

                        <button type="submit" class="w-full px-6 py-4 bg-orange-600 text-white font-semibold rounded-lg hover:bg-orange-700 transition">
                            Send Message
                        </button>
                    </form>
                </div>

                <!-- Contact Information -->
                <div class="space-y-8">
                    <div class="bg-white rounded-xl shadow-lg p-8">
                        <h2 class="text-3xl font-bold text-gray-800 mb-6">Get in Touch</h2>
                        <div class="space-y-6">
                            <!-- Phone -->
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center flex-shrink-0">
                                    <span class="text-2xl">📞</span>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold text-gray-800 mb-1">Phone</h3>
                                    <p class="text-gray-600">+92 300 1234567</p>
                                    <p class="text-gray-600">+92 321 9876543</p>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center flex-shrink-0">
                                    <span class="text-2xl">✉️</span>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold text-gray-800 mb-1">Email</h3>
                                    <p class="text-gray-600">info@pizzamax.com</p>
                                    <p class="text-gray-600">support@pizzamax.com</p>
                                </div>
                            </div>

                            <!-- Address -->
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center flex-shrink-0">
                                    <span class="text-2xl">📍</span>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold text-gray-800 mb-1">Address</h3>
                                    <p class="text-gray-600">123 Main Street</p>
                                    <p class="text-gray-600">Karachi, Pakistan</p>
                                </div>
                            </div>

                            <!-- Hours -->
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center flex-shrink-0">
                                    <span class="text-2xl">🕐</span>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold text-gray-800 mb-1">Opening Hours</h3>
                                    <p class="text-gray-600">Mon - Thu: 11am - 11pm</p>
                                    <p class="text-gray-600">Fri - Sat: 11am - 12am</p>
                                    <p class="text-gray-600">Sunday: 12pm - 11pm</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Map Placeholder -->
                    <div class="bg-white rounded-xl shadow-lg p-8">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">Find Us</h2>
                        <div class="w-full h-64 bg-gray-200 rounded-lg flex items-center justify-center">
                            <span class="text-gray-500 text-lg">🗺️ Map Location</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</x-custom.layout>