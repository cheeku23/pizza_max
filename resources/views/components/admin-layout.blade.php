<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Admin Dashboard' }} - Pizza Max</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-900 text-white flex-shrink-0">
            <div class="p-6">
                <a href="{{ route('admin.dashboard') }}" class="text-2xl font-bold text-orange-500">
                    🍕 Pizza Max
                </a>
                <p class="text-gray-400 text-sm mt-1">Admin Panel</p>
            </div>

            <nav class="mt-6">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center px-6 py-3 text-gray-300 hover:bg-gray-800 hover:text-white transition {{ request()->routeIs('admin.dashboard') ? 'bg-gray-800 text-white border-l-4 border-orange-500' : '' }}">
                    <span class="text-xl mr-3">📊</span>
                    <span>Dashboard</span>
                </a>

                <a href="{{ route('admin.pizzas.index') }}" class="flex items-center px-6 py-3 text-gray-300 hover:bg-gray-800 hover:text-white transition {{ request()->routeIs('admin.pizzas.*') ? 'bg-gray-800 text-white border-l-4 border-orange-500' : '' }}">
                    <span class="text-xl mr-3">🍕</span>
                    <span>Pizzas</span>
                </a>

                <a href="{{ route('admin.orders.index') }}" class="flex items-center px-6 py-3 text-gray-300 hover:bg-gray-800 hover:text-white transition {{ request()->routeIs('admin.orders.*') ? 'bg-gray-800 text-white border-l-4 border-orange-500' : '' }}">
                    <span class="text-xl mr-3">📦</span>
                    <span>Orders</span>
                </a>

                <a href="{{ route('admin.customers.index') }}" class="flex items-center px-6 py-3 text-gray-300 hover:bg-gray-800 hover:text-white transition {{ request()->routeIs('admin.customers.*') ? 'bg-gray-800 text-white border-l-4 border-orange-500' : '' }}">
                    <span class="text-xl mr-3">👥</span>
                    <span>Customers</span>
                </a>

                <a href="{{ route('admin.analytics') }}" class="flex items-center px-6 py-3 text-gray-300 hover:bg-gray-800 hover:text-white transition {{ request()->routeIs('admin.analytics') ? 'bg-gray-800 text-white border-l-4 border-orange-500' : '' }}">
                    <span class="text-xl mr-3">📈</span>
                    <span>Analytics</span>
                </a>

                <a href="{{ route('admin.settings') }}" class="flex items-center px-6 py-3 text-gray-300 hover:bg-gray-800 hover:text-white transition {{ request()->routeIs('admin.settings') ? 'bg-gray-800 text-white border-l-4 border-orange-500' : '' }}">
                    <span class="text-xl mr-3">⚙️</span>
                    <span>Settings</span>
                </a>

                <div class="border-t border-gray-700 mt-6 pt-6">
                    <a href="{{ route('home') }}" class="flex items-center px-6 py-3 text-gray-300 hover:bg-gray-800 hover:text-white transition">
                        <span class="text-xl mr-3">🌐</span>
                        <span>View Website</span>
                    </a>
                </div>
            </nav>
        </aside>

        <!-- Main Content Area -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Top Navbar -->
            <header class="bg-white shadow-sm z-10">
                <div class="flex items-center justify-between px-6 py-4">
                    <div>
                        <h1 class="text-2xl font-bold text-gray-800">{{ $pageTitle ?? 'Dashboard' }}</h1>
                        <p class="text-sm text-gray-500">{{ $pageSubtitle ?? 'Welcome to admin panel' }}</p>
                    </div>

                    <div class="flex items-center space-x-4">
                        <div class="text-right">
                            <p class="text-sm font-semibold text-gray-800">{{ Auth::user()->name }}</p>
                            <p class="text-xs text-gray-500">Administrator</p>
                        </div>
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition text-sm font-semibold">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </header>

            <!-- Main Content -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100">
                <div class="container mx-auto px-6 py-8">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>
</body>

</html>