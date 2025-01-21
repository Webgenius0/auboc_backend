<?php

use App\Http\Controllers\API\StripePaymentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Web\Frontend\HomeController;
use App\Http\Controllers\Web\Frontend\FooterController;
use App\Http\Controllers\Web\Frontend\BlogController;


//live command run
Route::get('/run-migrate', function () {
    Artisan::call('migrate');
    return 'Database migration completed successfully!';
});

Route::get('/run-fresh-migrate-seed', function () {
    try {
        Artisan::call('migrate:fresh --seed');
        return 'Database refreshed and seeded successfully!';
    } catch (\Exception $e) {
        return 'Error: ' . $e->getMessage();
    }
});

Route::get('/optimize-clear', function () {
    try {
        Artisan::call('optimize:clear');
        return 'Application cache cleared successfully!';
    } catch (\Exception $e) {
        return 'Error: ' . $e->getMessage();
    }
});


//! added by Tanvir
Route::get('/', function () {
    return redirect()->route('login');
});


//! Route for StripePaymentController added by Masum
// Route::get('checkout/success', [StripePaymentController::class, 'checkoutSuccess'])->name('checkout.success');
// Route::get('checkout/cancel', [StripePaymentController::class, 'checkoutCancel'])->name('checkout.cancel');


require __DIR__ . '/auth.php';
