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



    //! Route for ServicePageController CMS
    Route::controller(ServicePageController::class)->group(function () {
        Route::get('/cms/service-page/{section}', 'serviceSection')->name('cms.service-page.section');
        Route::patch('/cms/service-page/{section}', 'storeServiceSection')->name('cms.service-page.section.update');
    });


    //! Route for BlogPageController CMS
    Route::controller(BlogPageController::class)->group(function () {

        Route::get('/cms/blog-page/blog-feature', 'blogFeature')->name('cms.blog-page.section');
        Route::patch('/cms/blog-page/blog-feature', 'storeblogFeature')->name('cms.blog-page.section.update');
        Route::patch('/cms/blog-page/blog-feature/one', 'storeblogFeatureItemOne')->name('cms.blog-page.section.item-one.update');
        Route::patch('/cms/blog-page/blog-feature/two', 'storeblogFeatureItemTwo')->name('cms.blog-page.section.item-two.update');

    });

    //! Route for AboutPageController CMS
    Route::controller(AboutPageController::class)->group(function () {

        Route::get('/cms/about-page/about-feature', 'aboutFeature')->name('cms.about-page.section');
        Route::patch('/cms/about-page/about-feature', 'storeaboutFeature')->name('cms.about-page.section.update');
        Route::patch('/cms/about-page/about-feature/one', 'storeaboutFeatureItemOne')->name('cms.about-page.section.item-one.update');
        Route::patch('/cms/about-page/about-feature/two', 'storeaboutFeatureItemTwo')->name('cms.about-page.section.item-two.update');

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
    Route::controller(HumanPageController::class)->group(function () {
        Route::get('/cms/humans-home-page/section-one', 'sectionOne')->name('cms.humans-home-page.section-one');
        Route::patch('/cms/humans-home-page/section-one', 'storeSectionOne')->name('cms.humans-home-page.section-one.update');

        Route::get('/cms/humans-home-page/section-two', 'sectionTwo')->name('cms.humans-home-page.section-two');
        Route::patch('/cms/humans-home-page/section-two', 'storeSectionTwo')->name('cms.humans-home-page.section-two.update');

        Route::get('/cms/humans-home-page/section-three', 'sectionThree')->name('cms.humans-home-page.section-three');
        Route::patch('/cms/humans-home-page/section-three', 'storeSectionThree')->name('cms.humans-home-page.section-three.update');

        Route::get('/cms/humans-home-page/section-four', 'sectionFour')->name('cms.humans-home-page.section-four');
        Route::patch('/cms/humans-home-page/section-four', 'storeSectionFour')->name('cms.humans-home-page.section-four.update');

        Route::get('/cms/humans-home-page/section-five', 'sectionFive')->name('cms.humans-home-page.section-five');
        Route::patch('/cms/humans-home-page/section-five', 'storeSectionFive')->name('cms.humans-home-page.section-five.update');
    });

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

    //!Route for WhyZallyPageController
    Route::controller(WhyZallyPageController::class)->group(function () {
        Route::get('/cms/why-zally/section-one', 'sectionOne')->name('cms.why-zally.section-one');
        Route::patch('/cms/why-zally/section-one', 'storeSectionOne')->name('cms.why-zally.section-one.update');

        Route::get('/cms/why-zally/section-two', 'sectionTwo')->name('cms.why-zally.section-two');
        Route::patch('/cms/why-zally/section-two', 'storeSectionTwo')->name('cms.why-zally.section-two.update');

        Route::get('/cms/why-zally/section-three', 'sectionThree')->name('cms.why-zally.section-three');
        Route::patch('/cms/why-zally/section-three', 'storeSectionThree')->name('cms.why-zally.section-three.update');

        Route::get('/cms/why-zally/section-four', 'sectionFour')->name('cms.why-zally.section-four');
        Route::patch('/cms/why-zally/section-four', 'storeSectionFour')->name('cms.why-zally.section-four.update');

        Route::get('/cms/why-zally/section-five', 'sectionFive')->name('cms.why-zally.section-five');
        Route::patch('/cms/why-zally/section-five', 'storeSectionFive')->name('cms.why-zally.section-five.update');
    });

    //!Route for WhyZallyPageController
    Route::controller(HowItWorksBusinessController::class)->group(function () {
        Route::get('/cms/how-it-works-business/section-one', 'sectionOne')->name('cms.how-it-works-business.section-one');
        Route::patch('/cms/how-it-works-business/section-one', 'storeSectionOne')->name('cms.how-it-works-business.section-one.update');

        Route::get('/cms/how-it-works-business/section-two', 'sectionTwo')->name('cms.how-it-works-business.section-two');
        Route::patch('/cms/how-it-works-business/section-two', 'storeSectionTwo')->name('cms.how-it-works-business.section-two.update');

        Route::get('/cms/how-it-works-business/section-three', 'sectionThree')->name('cms.how-it-works-business.section-three');
        Route::patch('/cms/how-it-works-business/section-three', 'storeSectionThree')->name('cms.how-it-works-business.section-three.update');

        Route::get('/cms/how-it-works-business/section-four', 'sectionFour')->name('cms.how-it-works-business.section-four');
        Route::patch('/cms/how-it-works-business/section-four', 'storeSectionFour')->name('cms.how-it-works-business.section-four.update');

        Route::get('/cms/how-it-works-business/section-five', 'sectionFive')->name('cms.how-it-works-business.section-five');
        Route::patch('/cms/how-it-works-business/section-five', 'storeSectionFive')->name('cms.how-it-works-business.section-five.update');
    });

});
