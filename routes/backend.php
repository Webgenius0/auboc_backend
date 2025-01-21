<?php

use App\Http\Controllers\Web\Backend\Category\CategoryController;
use App\Http\Controllers\Web\Backend\Contact\ContactController;
use App\Http\Controllers\Web\Backend\DashboardController;
use App\Http\Controllers\Web\Backend\FAQ\FaqController;
use App\Http\Controllers\Web\Backend\Product\ProductController;
use App\Http\Controllers\Web\Backend\Settings\CustomScriptController;
use App\Http\Controllers\Web\Backend\Settings\DynamicPageController;
use App\Http\Controllers\Web\Backend\Settings\MailSettingController;
use App\Http\Controllers\Web\Backend\Settings\ProfileController;
use App\Http\Controllers\Web\Backend\Settings\StripeSettingController;
use App\Http\Controllers\Web\Backend\Settings\SystemSettingController;
use App\Http\Controllers\Web\Backend\SocialLink\LinkSocialController;
use App\Http\Controllers\Web\Backend\Subscription\SubscriptionController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    ////!!!! Routes for Settings

    //Route for SystemSettingController
    Route::get('/system-setting', [SystemSettingController::class, 'index'])->name('settings.system.index');
    Route::post('/system-setting/', [SystemSettingController::class, 'update'])->name('settings.system.update');

    //Route for ProfileController
    Route::get('/profile', [ProfileController::class, 'showProfile'])->name('settings.profile');
    Route::post('/update-profile', [ProfileController::class, 'updateProfile'])->name('settings.update-profile');
    Route::post('/update-profile-password', [ProfileController::class, 'updatePassword'])->name('settings.update-password');

    //Route for MailSettingController
    Route::get('/mail-setting', [MailSettingController::class, 'index'])->name('settings.mail');
    Route::post('/mail-setting', [MailSettingController::class, 'update'])->name('settings.mail-update');

    //Route for DynamicPageController
    Route::get('/dynamic-page', [DynamicPageController::class, 'index'])->name('settings.dynamic-page.index');
    Route::get('/dynamic-page/create', [DynamicPageController::class, 'create'])->name('settings.dynamic-page.create');
    Route::post('/dynamic-page/store', [DynamicPageController::class, 'store'])->name('settings.dynamic-page.store');
    Route::get('/dynamic-page/edit/{id}', [DynamicPageController::class, 'edit'])->name('settings.dynamic-page.edit');
    Route::post('/dynamic-page/update/{id}', [DynamicPageController::class, 'update'])->name('settings.dynamic-page.update');
    Route::delete('/dynamic-page/delete/{id}', [DynamicPageController::class, 'destroy'])->name('settings.dynamic-page.destroy');
    Route::get('/dynamic-page/status/{id}', [DynamicPageController::class, 'status'])->name('settings.dynamic-page.status');

    //Route for StripeSettingController
    Route::get('/stripe-setting', [StripeSettingController::class, 'index'])->name('settings.stripe.index');
    Route::post('/stripe-setting', [StripeSettingController::class, 'update'])->name('settings.stripe.update');

    //Route for CustomScriptController
    Route::get('/custom-script', [CustomScriptController::class, 'index'])->name('settings.custom-script.index');
    Route::get('/custom-script/create', [CustomScriptController::class, 'create'])->name('settings.custom-script.create');
    Route::post('/custom-script/store', [CustomScriptController::class, 'store'])->name('settings.custom-script.store');
    Route::get('/custom-script/edit/{id}', [CustomScriptController::class, 'edit'])->name('settings.custom-script.edit');
    Route::post('/custom-script/update/{id}', [CustomScriptController::class, 'update'])->name('settings.custom-script.update');
    Route::get('/custom-script/status/{id}', [CustomScriptController::class, 'status'])->name('settings.custom-script.status');
    Route::delete('/custom-script/destroy/{id}', [CustomScriptController::class, 'destroy'])->name('settings.custom-script.destroy');


    //Route for Category Controller
    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/show/{id}', [CategoryController::class, 'show'])->name('category.show');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/category/status/{id}', [CategoryController::class, 'status'])->name('category.status');
    Route::delete('/category/destroy/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');


    //! Route for Product Controller
    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/show/{id}', [ProductController::class, 'show'])->name('product.show');
    Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::get('/product/status/{id}', [ProductController::class, 'status'])->name('product.status');
    Route::delete('/product/destroy/{id}', [ProductController::class, 'destroy'])->name('product.destroy');

    Route::get('/product/toggle-trending/{id}', [ProductController::class, 'toggleTrendingProduct'])->name('product.toggle-trending');


    //!! Route for Contact Us Controller
    Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');

    //!! Route for Subscribe Newsletter Controller
    Route::get('/subscription/newsletter', [SubscriptionController::class, 'index'])->name('subscription.index');

    //! Route for Faq Controller
    Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');
    Route::get('/faq/create', [FaqController::class, 'create'])->name('faq.create');
    Route::post('/faq/store', [FaqController::class, 'store'])->name('faq.store');
    Route::get('/faq/edit/{id}', [FaqController::class, 'edit'])->name('faq.edit');
    Route::post('/faq/update/{id}', [FaqController::class, 'update'])->name('faq.update');
    Route::delete('/faq/destroy/{id}', [FaqController::class, 'destroy'])->name('faq.destroy');
    Route::get('/faq/status/{id}', [FaqController::class, 'status'])->name('faq.status');

    //! Route for SocialLinks Controller
    Route::get('/social-links', [LinkSocialController::class, 'index'])->name('social-links');
    Route::post('/social-links', [LinkSocialController::class, 'update'])->name('social-links.update');


});
