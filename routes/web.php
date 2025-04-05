<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/


// Route::get('/', function () {   
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('home');
// });

// ✅ Route Home & Dashboard
Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// ✅ Pastikan Middleware Role Sudah Terdaftar
Route::middleware(['auth'])->group(function () {

    // 🔹 Admin Routes
    Route::middleware('role:admin')->group(function () {
        Route::get('/admin/dashboard', [DashboardController::class, 'admin'])->name('admin.dashboard');

        // 🔹 Manajemen User (CRUD)
        Route::resource('/users', UserController::class)->except(['show']);
    });

    // 🔹 Guru Routes
    Route::middleware('role:guru')->group(function () {
        Route::get('/guru/dashboard', [DashboardController::class, 'guru'])->name('guru.dashboard');
    });

    // 🔹 Siswa Routes
    Route::middleware('role:siswa')->group(function () {
        Route::get('/siswa/dashboard', [DashboardController::class, 'siswa'])->name('siswa.dashboard');
    });

    // 🔹 Manajemen Nilai (Admin & Guru)
    Route::middleware('role:guru, admin')->group(function () {
        Route::resource('/grades', GradeController::class);
    });

    Route::middleware(['auth', 'role:admin'])->group(function () {
        Route::resource('subjects', SubjectController::class)->except(['show']);
    });
    

    // 🔹 Profile Routes (Bisa diakses semua user yang login)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ✅ Logout Route
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// ✅ Auth Routes
require __DIR__.'/auth.php';


