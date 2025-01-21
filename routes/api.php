<?php

use App\Http\Controllers\API\Auth\AuthController;
use App\Http\Controllers\API\Auth\ResetPasswordController;
use App\Http\Controllers\API\ContactController;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\ProductPaginationController;
use App\Http\Controllers\API\ReviewController;
use App\Http\Controllers\API\SocialLinkController;
use App\Http\Controllers\API\CartController;
use App\Http\Controllers\API\NewsletterController;
use Illuminate\Support\Facades\Route;

//Route for Auth Controller

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::post('/verify-otp', [AuthController::class, 'verifyOtp']);


//Route for ResetPasswordController
Route::post('forgot-password', [ResetPasswordController::class, 'forgotPassword']);
Route::post('verify-otp', [ResetPasswordController::class, 'verifyOtp']);
Route::post('reset-password', [ResetPasswordController::class, 'resetPassword']);



//Route for ContactController
Route::post('/contact', [ContactController::class, 'submitContactForm']);

//Route for Category controller
Route::get('/category', [CategoryController::class, 'index']);

//Route for Social-Links
Route::get('/social-links', [SocialLinkController::class, 'index']);



//Route for Product Controller
Route::get('/products', [ProductController::class, 'index']);
Route::get('product/show/{id}', [ProductController::class, 'show']);
Route::get('/product-show/{id}', [ProductController::class, 'showWithReviews']);
Route::get('/products/reviews/{productId}', [ProductController::class, 'getReviews']);

Route::get('/products/pagination', [ProductPaginationController::class, 'index']);




//Route for authenticated users
Route::middleware('auth:api')->group(function () {

    // Cart Routes
    Route::post('/cart/add', [CartController::class, 'addToCart']);
    Route::post('/cart/update', [CartController::class, 'updateCart']);
    Route::post('/cart/increase', [CartController::class, 'quantityUpdate']);
    Route::post('/cart/decrease', [CartController::class, 'quantityMinus']);
    Route::post('/cart/remove', [CartController::class, 'removeFromCart']);
    Route::get('/cart/view', [CartController::class, 'viewCart']);



    //!! Review Route
    Route::post('/reviews', [ReviewController::class, 'storeReview']);
    //Route::get('/reviews/latest', [ReviewController::class, 'getLatestReviews']);


});


Route::get('/reviews/latest', [ReviewController::class, 'getLatestReviews']);

Route::post('/subscribe', [NewsletterController::class, 'subscribe']);



