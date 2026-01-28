<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Pizza Max</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gradient-to-br from-orange-50 to-orange-100 min-h-screen flex items-center justify-center py-8">
    <div class="w-full max-w-md">
        <!-- Logo/Header -->
        <div class="text-center mb-8">
            <a href="{{ route('home') }}" class="inline-block">
                <h1 class="text-5xl font-bold text-orange-600 mb-2">🍕 Pizza Max</h1>
            </a>
            <p class="text-gray-600">Create your account and start ordering!</p>
        </div>

        <!-- Register Card -->
        <div class="bg-white rounded-2xl shadow-2xl p-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Sign Up</h2>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mb-5">
                    <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Full Name</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-600 focus:border-transparent outline-none transition"
                        placeholder="John Doe">
                    @error('name')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email Address -->
                <div class="mb-5">
                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email Address</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-600 focus:border-transparent outline-none transition"
                        placeholder="your@email.com">
                    @error('email')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-5">
                    <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">Password</label>
                    <input id="password" type="password" name="password" required autocomplete="new-password"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-600 focus:border-transparent outline-none transition"
                        placeholder="••••••••">
                    @error('password')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div class="mb-6">
                    <label for="password_confirmation" class="block text-sm font-semibold text-gray-700 mb-2">Confirm Password</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-600 focus:border-transparent outline-none transition"
                        placeholder="••••••••">
                    @error('password_confirmation')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <button type="submit" class="w-full py-3 bg-orange-600 text-white font-bold rounded-lg hover:bg-orange-700 transition shadow-lg">
                    Create Account
                </button>

                <!-- Login Link -->
                <div class="mt-6 text-center">
                    <p class="text-gray-600">
                        Already have an account?
                        <a href="{{ route('login') }}" class="text-orange-600 hover:text-orange-700 font-semibold">
                            Login
                        </a>
                    </p>
                </div>
            </form>
        </div>

        <!-- Back to Home -->
        <div class="text-center mt-6">
            <a href="{{ route('home') }}" class="text-gray-600 hover:text-gray-800">
                ← Back to Home
            </a>
        </div>
    </div>
</body>

</html>