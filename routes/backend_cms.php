<?php

use App\Http\Controllers\Web\Backend\CMS\AboutPage\AboutPageController;
use App\Http\Controllers\Web\Backend\CMS\BlogPage\BlogPageController;
use App\Http\Controllers\Web\Backend\CMS\HomePage\HomePageController;
use App\Http\Controllers\Web\Backend\CMS\ServicePage\ServicePageController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {

    //!Route for HomePageController
    Route::controller(HomePageController::class)->group(function () {
        Route::get('/cms/home-page/home-section-text', 'homeSection')->name('cms.home-page.home-section-text');
        Route::patch('/cms/home-page/home-section', 'storeHomeSection')->name('cms.home-page.home-section.update');

        //!Route for home page hero images
        Route::get('/cms/home-page/home-feature', 'homeSectionImage')->name('cms.home-page.section');
        Route::patch('/cms/home-page/home-feature', 'homeSectionImageOne')->name('cms.home-page.section.item-one.update');
        Route::patch('/cms/home-page/home-feature/one', 'homeSectionImageTwo')->name('cms.home-page.section.item-two.update');
        Route::patch('/cms/home-page/home-feature/two', 'homeSectionImageThree')->name('cms.home-page.section.item-three.update');
        Route::patch('/cms/home-page/home-feature/three', 'homeSectionImageFour')->name('cms.home-page.section.item-four.update');
        Route::patch('/cms/home-page/home-feature/four', 'homeSectionImageFive')->name('cms.home-page.section.item-five.update');
    });


    //! Route for ServicePageController
    // Route::controller(ServicePageController::class)->group(function () {
    //     Route::get('/cms/service-page/service-section', 'serviceSection')->name('cms.service-page.service-section');
    //     Route::patch('/cms/service-page/service-section', 'storeServiceSection')->name('cms.service-page.service-section.update');
    // });



    //! Route for ServicePageController CMS one controller for all section
    /* Route::controller(ServicePageController::class)->group(function () {
        Route::get('/cms/service-page/{section}', 'serviceSection')->name('cms.service-page.section');
        Route::patch('/cms/service-page/{section}', 'storeServiceSection')->name('cms.service-page.section.update');
    }); */



    Route::controller(ServicePageController::class)->group(function () {

        Route::get('/cms/service-page/service-feature', 'serviceFeature')->name('cms.service-page.section');
        Route::patch('/cms/service-page/service-feature', 'storeserviceFeature')->name('cms.service-page.section.update');
        Route::patch('/cms/service-page/service-feature/one', 'storeserviceFeatureItemOne')->name('cms.service-page.section.item-one.update');
        Route::patch('/cms/service-page/service-feature/two', 'storeserviceFeatureItemTwo')->name('cms.service-page.section.item-two.update');
        Route::patch('/cms/service-page/service-feature/three', 'storeserviceFeatureItemThree')->name('cms.service-page.section.item-three.update');
   });


    //! Route for BlogPageController CMS
    Route::controller(BlogPageController::class)->group(function () {

        Route::get('/cms/blog-page/blog-feature', 'blogFeature')->name('cms.blog-page.section');
        Route::patch('/cms/blog-page/blog-feature', 'storeblogFeature')->name('cms.blog-page.section.update');
        Route::patch('/cms/blog-page/blog-feature/one', 'storeblogFeatureItemOne')->name('cms.blog-page.section.item-one.update');
        Route::patch('/cms/blog-page/blog-feature/two', 'storeblogFeatureItemTwo')->name('cms.blog-page.section.item-two.update');
        Route::patch('/cms/blog-page/blog-feature/three', 'storeblogFeatureItemThree')->name('cms.blog-page.section.item-two.update');
    });

    //! Route for AboutPageController CMS
    Route::controller(AboutPageController::class)->group(function () {

        Route::get('/cms/about-page/about-feature', 'aboutFeature')->name('cms.about-page.section');
        Route::patch('/cms/about-page/about-feature', 'storeaboutFeature')->name('cms.about-page.section.update');
        Route::patch('/cms/about-page/about-feature/one', 'storeaboutFeatureItemOne')->name('cms.about-page.section.item-one.update');
        Route::patch('/cms/about-page/about-feature/two', 'storeaboutFeatureItemTwo')->name('cms.about-page.section.item-two.update');
        Route::patch('/cms/about-page/about-feature/three', 'storeaboutFeatureItemThree')->name('cms.about-page.section.item-three.update');
    });



});
