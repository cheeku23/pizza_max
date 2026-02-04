<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Pizza Max</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gradient-to-br from-orange-50 to-orange-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md">
        <!-- Logo/Header -->
        <div class="text-center mb-8">
            <a href="{{ route('home') }}" class="inline-block">
                <h1 class="text-5xl font-bold text-orange-600 mb-2">🍕 Pizza Max</h1>
            </a>
            <p class="text-gray-600">Welcome back! Please login to your account</p>
        </div>

        <!-- Login Card -->
        <div class="bg-white rounded-2xl shadow-2xl p-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Login</h2>

            <!-- Session Status -->
            @if (session('status'))
            <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
                {{ session('status') }}
            </div>
            @endif

            <form method="POST" action="{{ route('admin.login') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-6">
                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email Address</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-600 focus:border-transparent outline-none transition"
                        placeholder="your@email.com">
                    @error('email')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-6">
                    <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">Password</label>
                    <input id="password" type="password" name="password" required autocomplete="current-password"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-600 focus:border-transparent outline-none transition"
                        placeholder="••••••••">
                    @error('password')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="flex items-center justify-between mb-6">
                    <label for="remember_me" class="inline-flex items-center cursor-pointer">
                        <input id="remember_me" type="checkbox" name="remember"
                            class="w-4 h-4 text-orange-600 border-gray-300 rounded focus:ring-orange-500">
                        <span class="ml-2 text-sm text-gray-600">Remember me</span>
                    </label>

                    @if (Route::has('admin.password.request'))
                    <a href="{{ route('admin.password.request') }}" class="text-sm text-orange-600 hover:text-orange-700 font-semibold">
                        Forgot Password?
                    </a>
                    @endif
                </div>

                <!-- Submit Button -->
                <button type="submit" class="w-full py-3 bg-orange-600 text-white font-bold rounded-lg hover:bg-orange-700 transition shadow-lg">
                    Login
                </button>

                <!-- Register Link -->
                <div class="mt-6 text-center">
                    <p class="text-gray-600">
                        Don't have an account?
                        <a href="{{ route('admin.register') }}" class="text-orange-600 hover:text-orange-700 font-semibold">
                            Sign up
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