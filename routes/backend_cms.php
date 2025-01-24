<?php

use App\Http\Controllers\Web\Backend\CMS\AboutPage\AboutPageController;
use App\Http\Controllers\Web\Backend\CMS\BlogPage\BlogPageController;
use App\Http\Controllers\Web\Backend\CMS\BusinessHomePage\BusinessPageController;
use App\Http\Controllers\Web\Backend\CMS\GetTheApp\GetTheAppController;
use App\Http\Controllers\Web\Backend\CMS\HomePage\HomePageController;
use App\Http\Controllers\Web\Backend\CMS\HumansHomePage\HumanPageController;
use App\Http\Controllers\Web\Backend\CMS\WhyZally\WhyZallyPageController;
use App\Http\Controllers\Web\Backend\CMS\HowItWorksBusiness\HowItWorksBusinessController;
use App\Http\Controllers\Web\Backend\CMS\ServicePage\ServicePageController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {

    //!Route for HomePageController
    Route::controller(HomePageController::class)->group(function () {
        Route::get('/cms/home-page/home-section-text', 'homeSection')->name('cms.home-page.home-section-text');
        Route::patch('/cms/home-page/home-section', 'storeHomeSection')->name('cms.home-page.home-section.update');
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





    //!Route for BusinessPageController
    // Route::controller(BusinessPageController::class)->group(function () {
    //     Route::get('/cms/business-home-page/section-one', 'sectionOne')->name('cms.business-home-page.section-one');
    //     Route::patch('/cms/business-home-page/section-one', 'storeSectionOne')->name('cms.business-home-page.section-one.update');

    //     Route::get('/cms/business-home-page/section-two', 'sectionTwo')->name('cms.business-home-page.section-two');
    //     Route::patch('/cms/business-home-page/section-two', 'storeSectionTwo')->name('cms.business-home-page.section-two.update');

    //     Route::get('/cms/business-home-page/section-three', 'sectionThree')->name('cms.business-home-page.section-three');
    //     Route::patch('/cms/business-home-page/section-three', 'storeSectionThree')->name('cms.business-home-page.section-three.update');

    //     Route::get('/cms/business-home-page/section-four', 'sectionFour')->name('cms.business-home-page.section-four');
    //     Route::patch('/cms/business-home-page/section-four', 'storeSectionFour')->name('cms.business-home-page.section-four.update');

    //     Route::get('/cms/business-home-page/section-five', 'sectionFive')->name('cms.business-home-page.section-five');
    //     Route::patch('/cms/business-home-page/section-five', 'storeSectionFive')->name('cms.business-home-page.section-five.update');
    // });



    //!Route for HumanPageController
    // Route::controller(GetTheAppController::class)->group(function () {
    //     Route::get('/cms/get-the-app/section-one', 'sectionOne')->name('cms.get-the-app.section-one');
    //     Route::patch('/cms/get-the-app/section-one', 'storeSectionOne')->name('cms.get-the-app.section-one.update');

    //     Route::get('/cms/get-the-app/section-two', 'sectionTwo')->name('cms.get-the-app.section-two');
    //     Route::patch('/cms/get-the-app/section-two', 'storeSectionTwo')->name('cms.get-the-app.section-two.update');

    //     Route::get('/cms/get-the-app/section-three', 'sectionThree')->name('cms.get-the-app.section-three');
    //     Route::patch('/cms/get-the-app/section-three', 'storeSectionThree')->name('cms.get-the-app.section-three.update');

    //     Route::get('/cms/get-the-app/section-four', 'sectionFour')->name('cms.get-the-app.section-four');
    //     Route::patch('/cms/get-the-app/section-four', 'storeSectionFour')->name('cms.get-the-app.section-four.update');

    //     Route::get('/cms/get-the-app/section-five', 'sectionFive')->name('cms.get-the-app.section-five');
    //     Route::patch('/cms/get-the-app/section-five', 'storeSectionFive')->name('cms.get-the-app.section-five.update');
    // });





});
