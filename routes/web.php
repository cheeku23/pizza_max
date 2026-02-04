<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// Public Site Routes



Route::get('/', [PizzaController::class, 'index'])->name('home');
Route::get('/products', [PizzaController::class, 'productsPage'])->name('products');
Route::get('/product-detail/{pizza:slug}', [PizzaController::class, 'productDetailsPage'])->name('product.detail');
Route::get('/contact', [PizzaController::class, 'contactPage'])->name('contact');
Route::get('/about', [PizzaController::class, 'aboutPage'])->name('about');


// Admin authentication (login / register)
Route::get('/admin/login', [AdminController::class, 'loginPage'])->name('admin.login');
Route::get('/admin/register', [AdminController::class, 'registerPage'])->name('admin.register');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/register', [AdminController::class, 'register'])->name('admin.register');

// Logout route used by layout
Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
})->name('logout');

// Admin Dashboard Routes (protected)
Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    // Pizzas Management
    Route::get('/pizzas', [AdminController::class, 'pizzasIndex'])->name('pizzas.index');
    Route::post('/pizzas', [AdminController::class, 'pizzasStore'])->middleware(['auth', 'verified'])->name('pizzas.store');
    Route::get('/pizzas/create', [AdminController::class, 'pizzasCreate'])->name('pizzas.create');
    Route::get('/pizzas/{pizza:slug}', [AdminController::class, 'pizzasShow'])->name('pizzas.show');

    // Orders Management
    Route::get('/orders', [AdminController::class, 'ordersIndex'])->name('orders.index');

    // Customers Management
    Route::get('/customers', [AdminController::class, 'customersIndex'])->name('customers.index');

    // Analytics
    Route::get('/analytics', [AdminController::class, 'analytics'])->name('analytics');

    // Settings
    Route::get('/settings', [AdminController::class, 'settings'])->name('settings');
});

Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');


