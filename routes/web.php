<?php

use App\Http\Controllers\Act2;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestPageController;
use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CustomerController;

//guests
Route::get('/', [GuestPageController::class, 'page1'])->name('page1');
Route::get('/page2', [GuestPageController::class, 'page2'])->name('page2');
Route::get('/page3', [GuestPageController::class, 'page3'])->name('page3');
Route::get('/page4', [GuestPageController::class, 'page4'])->name('page4');
Route::get('/page5', [Act2::class, 'showGallery'])->name('page5');
Route::get('/page5/{index}', [Act2::class, 'showGalleryImg']);

//admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/page1', [Act2::class, 'show'])->name('admin.page1');
    Route::get('/admin/page1/{index}', [Act2::class, 'showDetails']);
    Route::post('/admin/page1/customer', [CustomerController::class, 'create'])->name('customer.create');
    Route::post('/admin/page1/booking', [BookingController::class, 'create'])->name('booking.create');
    Route::put('/admin/page1/{id}/update', [BookingController::class, 'update'])->name('booking.update');
    Route::patch('/admin/page1/{id}/restore', [BookingController::class, 'restore'])->name('booking.restore');
    Route::delete('/admin/page1/{id}/delete', [BookingController::class, 'delete'])->name('booking.delete');
    Route::delete('/admin/page1/{id}/force-delete', [BookingController::class, 'permaDelete'])->name('booking.permaDelete');
    Route::get('/admin/page2', [AdminPageController::class, 'page2'])->name('admin.page2');
    Route::get('/admin/page3', [AdminPageController::class, 'page3'])->name('admin.page3');
    Route::get('/admin/page4', [AdminPageController::class, 'page4'])->name('admin.page4');
    Route::get('/admin/page4', [AdminPageController::class, 'page4'])->name('admin.page4');
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    //profile
    Route::get('/profile', [UserProfileController::class, 'show'])->name('profile.show');
    Route::put('/profile', [UserProfileController::class, 'update'])->name('profile.update');
});





