<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\ProfileController;
use App\Models\Doctor;
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

    //doctor
    Route::get('/doctor-dashboard', [DoctorController::class, 'doctorDashboard'])->name('doctor');
    Route::get('/view-appointments', [BookingController::class, 'viewAppointments'])->name('viewAppointments');
    Route::get('/view-patients', [DoctorController::class, 'viewPatients'])->name('viewPatients');
    Route::get('/manage-schedule', [DoctorController::class, 'manageSchedule'])->name('manageSchedule');
    Route::post('/manage-schedule/add', [DoctorController::class, 'storeSchedule'])->name('addSchedule');
    Route::delete('/manage-schedule/{schedule:id}/delete',[DoctorController::class,'deleteSchedule'])->name('deleteSchedule');
    Route::put('/manage-schedule/{schedule:id}/update',[DoctorController::class, 'updateSchedule']);

    //admin
    Route::get('/admin-dashboard', [AdminController::class, 'index'])->name('admin');
    Route::get('/manage-users', [AdminController::class, 'users']);
    Route::get('/manage-bookings', [AdminController::class, 'bookings']);
    Route::get('/manage-doctors', [AdminController::class, 'doctors']);
    Route::get('/manage-hospitals', [AdminController::class, 'hospitals']);
    Route::get('/manage-users/edit', [AdminController::class, 'delete']);
    Route::delete('/manage-users/{id}/delete', [AdminController::class, 'destroyUser']);    Route::post('/manage-users/toggle-role/{user}', [AdminController::class, 'toggleRole'])->name('users.toggleRole');
    Route::delete('/manage-bookings/{bookings:id}/delete', [AdminController::class, 'delete']);
    Route::delete('/logout', [AdminController::class, 'logout']);
    Route::put('/manage-bookings/{booking:id}/approve',[AdminController::class,'approve']);
    Route::put('/manage-bookings/{booking:id}/cancel',[AdminController::class,'cancel']);
    Route::delete('/manage-doctors/{doctor:id}/delete', [AdminController::class, 'deleteDoctor']);
    Route::get('/manage-doctors/{doctor:id}/edit',[AdminController::class,'editDoctor']);
    Route::patch('/manage-doctors/{doctor:id}/update',[AdminController::class,'updateDoctor']);
    Route::get('/add-doctor', [DoctorController::class, 'create']);
    Route::post('/store-doctor', [DoctorController::class, 'store']);
    Route::get('/add-hospital', [HospitalController::class, 'create']);
    Route::post('/store-hospital', [HospitalController::class, 'store']);
    Route::get('/manage-hospitals/{hospital:id}/edit',[HospitalController::class,'editHospital']);
    Route::put('/manage-hospitals/{hospital:id}/update',[HospitalController::class,'updateHospital']);
});

require __DIR__.'/auth.php';
