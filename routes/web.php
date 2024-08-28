<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestPageController;
use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\Auth\LoginController;

//guests
Route::get('/', [GuestPageController::class, 'page1'])->name('page1');
Route::get('/page2', [GuestPageController::class, 'page2'])->name('page2');
Route::get('/page3', [GuestPageController::class, 'page3'])->name('page3');
Route::get('/page4', [GuestPageController::class, 'page4'])->name('page4');
Route::get('/page5', [GuestPageController::class, 'page5'])->name('page5');


//profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [UserProfileController::class, 'show'])->name('profile.show');
    Route::put('/profile', [UserProfileController::class, 'update'])->name('profile.update');
});

//admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminPageController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/page1', [AdminPageController::class, 'page1'])->name('admin.page1');
    Route::get('/admin/page2', [AdminPageController::class, 'page2'])->name('admin.page2');
    Route::get('/admin/page3', [AdminPageController::class, 'page3'])->name('admin.page3');
    Route::get('/admin/page4', [AdminPageController::class, 'page4'])->name('admin.page4');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
