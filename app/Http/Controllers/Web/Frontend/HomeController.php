<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the home page.
     *
     * @return \Illuminate\View\View The view for the home page.
     */
    public function index()
    {
        return view('frontend.layouts.home');
    }

    /**
     * Display the "For Business" home page.
     *
     * @return \Illuminate\View\View The view for the business home page.
     */
    public function forBusinessHome()
    {
        return view('frontend.layouts.for-business-home');
    }

    /**
     * Display the "For Humans" home page.
     *
     * @return \Illuminate\View\View The view for the humans home page.
     */
    public function forHumansHome()
    {
        return view('frontend.layouts.for-humans-home');
    }

    /**
     * Display the "Get the App" page.
     *
     * @return \Illuminate\View\View The view for the get the app page.
     */
    public function getTheApp()
    {
        return view('frontend.layouts.get-the-app');
    }

    /**
     * Display the "How It Works" page for general users.
     *
     * @return \Illuminate\View\View The view for the general "How It Works" page.
     */
    public function howItWorks()
    {
        return view('frontend.layouts.how-it-works');
    }

    /**
     * Display the "How It Works" page for businesses.
     *
     * @return \Illuminate\View\View The view for the business "How It Works" page.
     */
    public function howItWorksBusiness()
    {
        return view('frontend.layouts.how-it-works-business');
    }

    /**
     * Display the "Why Zally" page.
     *
     * @return \Illuminate\View\View The view for the "Why Zally" page.
     */
    public function whyZally()
    {
        return view('frontend.layouts.why-zally');
    }

    /**
     * Display the "About" page.
     *
     * @return \Illuminate\View\View The view for the about page.
     */
    public function about()
    {
        return view('frontend.layouts.about');
    }

    /**
     * Display the "For Business" form page.
     *
     * @return \Illuminate\View\View The view for the business form page.
     */
    public function forBusinessForm()
    {
        return view('frontend.layouts.for-business-form');
    }


    public function forHumansForm()
    {
        return view('frontend.layouts.for-humans-form');
    }

}
