<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController; // Adjust to your actual controller path

Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/products', [DashboardController::class, 'products'])->name('products');

Route::get('/staff/view-orders', function () {
    return view('staff.sections.orders-parts.view-orders');
})->name('view-orders');

Route::get('/staff', function () {
    return view('staff.dashboard');
});
