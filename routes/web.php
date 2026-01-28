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



    
// Dashboard Route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
