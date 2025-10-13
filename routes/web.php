<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CoachBookingController;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Homecontroller::class, 'index'])->name('home');
Route::get('/blogs', [Homecontroller::class, 'post'])->name('posts');
Route::get('/blog/{title}', [Homecontroller::class, 'postDetail'])->name('post.details');
Route::post('/contact-submit', [Homecontroller::class, 'submit'])->name('contact.submit');

Route::post('/book-session', [CoachBookingController::class, 'createBooking']);

Route::get('/bookings', [CoachBookingController::class, 'index']);
Route::post('/bookings', [CoachBookingController::class, 'store']);
Route::put('/bookings/{id}', [CoachBookingController::class, 'update']);
Route::delete('/bookings/{id}', [CoachBookingController::class, 'destroy']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('/admin/bookings', BookingController::class);
    Route::resource('/admin/services', ServiceController::class);
    Route::resource('/admin/testimonials', TestimonialController::class);
    Route::resource('/admin/posts', PostController::class);
});
