<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ConditionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RefundController;
use App\Http\Controllers\TrackController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\EmailController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\SearchResultController;

Route::resource('/', LandingPageController::class);
Route::resource('/category', CategoryController::class);
Route::resource('/blog', BlogPostController::class);
Route::resource('/product', ProductController::class);
Route::resource('/checkout', CheckoutController::class);
Route::resource('/contact', ContactController::class);
Route::resource('/about', AboutController::class);
Route::resource('/newsletter', NewsletterController::class);
Route::resource('/newsletter', NewsletterController::class);
Route::resource('/privacy', PrivacyController::class);
Route::resource('/condition', ConditionController::class);
Route::resource('/news', NewsController::class);
Route::resource('/refund', RefundController::class);
Route::resource('/track', TrackController::class);
Route::resource('/search', SearchResultController::class);

Route::name('user.')->prefix('user')->middleware(['auth', 'verified'])->group(function () {
    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/wishlist', WishlistController::class);
    Route::resource('/order', OrderController::class);
    Route::resource('email', EmailController::class);
});

// Cart
Route::middleware(['web'])->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
    Route::patch('/cart/update/{product}', [CartController::class, 'update'])->name('cart.update');
    Route::delete('/cart/remove/{product}', [CartController::class, 'remove'])->name('cart.remove');
    Route::post('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('/password/update', [ProfileController::class, 'updatePassword'])->name('password.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
