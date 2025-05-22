<?php

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
    Route::resource('products', App\Http\Controllers\ProductController::class)->middleware('auth');
    Route::resource('categories', App\Http\Controllers\CategoryController::class)->middleware('auth');
    Route::resource('orders', App\Http\Controllers\OrderController::class)->middleware('auth');
    Route::resource('customers', App\Http\Controllers\CustomerController::class)->middleware('auth');
    Route::resource('suppliers', App\Http\Controllers\SupplierController::class)->middleware('auth');
    Route::resource('invoices', App\Http\Controllers\InvoiceController::class)->middleware('auth');
    Route::resource('payments', App\Http\Controllers\PaymentController::class)->middleware('auth');
    Route::resource('reports', App\Http\Controllers\ReportController::class)->middleware('auth');
    Route::resource('settings', App\Http\Controllers\SettingController::class)->middleware('auth');
    Route::resource('users', App\Http\Controllers\UserController::class)->middleware('auth');
    Route::resource('roles', App\Http\Controllers\RoleController::class)->middleware('auth');
    Route::resource('permissions', App\Http\Controllers\PermissionController::class)->middleware('auth');
    Route::resource('notifications', App\Http\Controllers\NotificationController::class)->middleware('auth');
    Route::resource('logs', App\Http\Controllers\LogController::class)->middleware('auth');
    Route::resource('activity-logs', App\Http\Controllers\ActivityLogController::class)->middleware('auth');
    Route::resource('audit-logs', App\Http\Controllers\AuditLogController::class)->middleware('auth');
    Route::resource('backups', App\Http\Controllers\BackupController::class)->middleware('auth');
    Route::resource('updates', App\Http\Controllers\UpdateController::class)->middleware('auth');
    Route::resource('feedbacks', App\Http\Controllers\FeedbackController::class)->middleware('auth');
    Route::resource('subscriptions', App\Http\Controllers\SubscriptionController::class)->middleware('auth');
    Route::resource('coupons', App\Http\Controllers\CouponController::class)->middleware('auth');
    Route::resource('promotions', App\Http\Controllers\PromotionController::class)->middleware('auth');
    Route::resource('discounts', App\Http\Controllers\DiscountController::class)->middleware('auth');
    Route::resource('wishlists', App\Http\Controllers\WishlistController::class)->middleware('auth');
    Route::resource('carts', App\Http\Controllers\CartController::class)->middleware('auth');
    Route::resource('addresses', App\Http\Controllers\AddressController::class)->middleware('auth');
});

require __DIR__.'/auth.php';
