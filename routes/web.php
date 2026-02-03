<?php

use App\Http\Controllers\PizzaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Public Site Routes



Route::get('/', [PizzaController::class, 'index'])->name('home');
Route::get('/products', [PizzaController::class, 'productsPage'])->name('products');
Route::get('/product-detail/{pizza:slug}', [PizzaController::class, 'productDetailsPage'])->name('product.detail');
Route::get('/contact', [PizzaController::class, 'contactPage'])->name('contact');
Route::get('/about', [PizzaController::class, 'aboutPage'])->name('about');




// Admin Dashboard Routes
Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // Pizzas Management
    Route::get('/pizzas', function () {
        return view('admin.pizzas.index');
    })->name('pizzas.index');

    Route::get('/pizzas/create', function () {
        return view('admin.pizzas.create');
    })->name('pizzas.create');

    // Orders Management
    Route::get('/orders', function () {
        return view('admin.orders.index');
    })->name('orders.index');

    // Customers Management
    Route::get('/customers', function () {
        return view('admin.customers.index');
    })->name('customers.index');

    // Analytics
    Route::get('/analytics', function () {
        return view('admin.analytics');
    })->name('analytics');

    // Settings
    Route::get('/settings', function () {
        return view('admin.settings');
    })->name('settings');
});

// Legacy Dashboard Route (redirect to admin)
Route::get('/dashboard', function () {
    return redirect()->route('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
