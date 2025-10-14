<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CoachBookingController;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;

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
Route::get('/about', [Homecontroller::class, 'about'])->name('about');
Route::get('/blogs', [Homecontroller::class, 'post'])->name('posts');
Route::get('/contact', [Homecontroller::class, 'contact'])->name('user.contact');
Route::get('/blog/{title}', [Homecontroller::class, 'postDetail'])->name('post.details');
Route::post('/contact-submit', [Homecontroller::class, 'submit'])->name('contact.submit');

Route::post('/book-session', [CoachBookingController::class, 'createBooking']);

Route::get('/bookings', [CoachBookingController::class, 'index']);
Route::post('/bookings', [CoachBookingController::class, 'store']);
Route::put('/bookings/{id}', [CoachBookingController::class, 'update']);
Route::delete('/bookings/{id}', [CoachBookingController::class, 'destroy']);

Route::get('/shop', [ShopController::class, 'index'])->name('user.shops');
Route::get('/shop/{id}', [ShopController::class, 'show'])->name('user.shops.detail');
Route::post('/cart/add/{product}', [ShopController::class, 'add'])->name('cart.add');
Route::post('/checkout/buy/{product}', [ShopController::class, 'buy'])->name('checkout.buy');
Route::post('/products/{product}/reviews', [ShopController::class, 'store'])->name('reviews.store');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('/admin/bookings', BookingController::class);
    Route::resource('/admin/services', ServiceController::class);
    Route::resource('/admin/testimonials', TestimonialController::class);
    Route::resource('/admin/posts', PostController::class);
    Route::resource('products', ProductController::class);
});
