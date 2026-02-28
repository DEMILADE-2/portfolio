<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;
use App\Models\Hero;
use App\Models\About;
use App\Models\BrandDesign;
use App\Http\Controllers\BookingController;

use App\Http\Controllers\FrontendController;

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/form', [BookingController::class, 'create'])->name('form');
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');
   