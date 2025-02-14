<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //user
    Route::get('/hospitals', [HospitalController::class, 'index'])->name('hospitals');
    Route::get('/hospitals/{hospital:name}', [HospitalController::class, 'show']);
    Route::get('/doctors', [DoctorController::class, 'index'])->name('doctors');
    Route::get('/doctors/{doctor:name}', [DoctorController::class, 'show']);
    Route::get('/bookings', [BookingController::class, 'index'])->name('bookings');
    Route::post('/doctors/{doctor}/bookings/{schedule}',[BookingController::class, 'book']);
    Route::delete('/bookings/{booking:id}',[BookingController::class, 'destroy']);

    //admin
    Route::get('/admin-dashboard', [AdminController::class, 'index'])->name('admin');
});

require __DIR__.'/auth.php';
